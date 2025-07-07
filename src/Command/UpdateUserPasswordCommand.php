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
    name: 'app:update-user-password',
    description: 'Met à jour le mot de passe d\'un utilisateur',
)]
class UpdateUserPasswordCommand extends Command
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
            ->addArgument('email', InputArgument::REQUIRED, 'L\'email de l\'utilisateur')
            ->addArgument('password', InputArgument::REQUIRED, 'Le nouveau mot de passe (min 8 chars, 1 majuscule, 1 symbole)')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getArgument('email');
        $password = $input->getArgument('password');

        // Validation du mot de passe (8+ caractères, une majuscule, un symbole)
        if (strlen($password) < 8 || !preg_match('/[A-Z]/', $password) || !preg_match('/[^a-zA-Z0-9]/', $password)) {
            $io->error('Le mot de passe doit contenir au moins 8 caractères, une lettre majuscule et un symbole');
            return Command::FAILURE;
        }

        // Trouver l'utilisateur
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        if (!$user) {
            $io->error(sprintf('Aucun utilisateur trouvé avec l\'email %s', $email));
            return Command::FAILURE;
        }

        // Mettre à jour le mot de passe
        $hashedPassword = $this->passwordHasher->hashPassword($user, $password);
        $user->setPassword($hashedPassword);

        // Sauvegarder l'utilisateur
        $this->entityManager->flush();

        $io->success(sprintf('Le mot de passe de l\'utilisateur %s a été mis à jour', $email));

        return Command::SUCCESS;
    }
}