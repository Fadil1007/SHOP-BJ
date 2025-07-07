<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-user',
    description: 'Creates a new user',
)]
class CreateUserCommand extends Command
{
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('email', InputArgument::REQUIRED, 'User email')
            ->addArgument('username', InputArgument::REQUIRED, 'Username')
            ->addArgument('password', InputArgument::REQUIRED, 'User password (min 8 chars, 1 uppercase, 1 symbol)')
            ->addArgument('firstName', InputArgument::REQUIRED, 'User first name')
            ->addArgument('lastName', InputArgument::REQUIRED, 'User last name')
            ->addArgument('role', InputArgument::OPTIONAL, 'User role (ROLE_USER or ROLE_ADMIN)', 'ROLE_USER')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getArgument('email');
        $username = $input->getArgument('username');
        $password = $input->getArgument('password');
        $firstName = $input->getArgument('firstName');
        $lastName = $input->getArgument('lastName');
        $role = $input->getArgument('role');

        // Validation du mot de passe (8+ caractères, une majuscule, un symbole)
        if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[^a-zA-Z0-9]/', $password)) {
            $io->error('Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule et un symbole');
            return Command::FAILURE;
        }

        // Check if user exists
        $existingUser = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        if ($existingUser) {
            $io->error(sprintf('User with email %s already exists', $email));
            return Command::FAILURE;
        }

        // Check if username exists
        $existingUsername = $this->entityManager->getRepository(User::class)->findOneBy(['username' => $username]);
        if ($existingUsername) {
            $io->error(sprintf('User with username %s already exists', $username));
            return Command::FAILURE;
        }

        // Create new user
        $user = new User();
        $user->setEmail($email);
        $user->setUsername($username);
        $user->setFirstName($firstName);
        $user->setLastName($lastName);
        $user->setCreatedAt(new \DateTimeImmutable());
        $user->setIsVerified(true);

        // Hash password
        $hashedPassword = $this->passwordHasher->hashPassword($user, $password);
        $user->setPassword($hashedPassword);

        // Set roles
        $roles = ['ROLE_USER'];
        if ($role === 'ROLE_ADMIN') {
            $roles[] = 'ROLE_ADMIN';
        }
        $user->setRoles($roles);

        // Save user
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $io->success(sprintf('User %s created successfully with role %s', $email, $role));

        return Command::SUCCESS;
    }
}