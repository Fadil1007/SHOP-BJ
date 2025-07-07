<?php

namespace App\Command;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-admin',
    description: 'Creates an admin user automatically',
)]
class CreateAdminUserCommand extends Command
{
    private $entityManager;
    private $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher)
    {
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;

        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        try {
            // Vérifier si un utilisateur admin existe déjà
            $existingAdmin = $this->entityManager->getRepository(User::class)->findOneBy(['email' => 'admin@shop-bj.com']);
            
            if ($existingAdmin) {
                $io->success('Un utilisateur admin existe déjà avec l\'email admin@shop-bj.com');
                return Command::SUCCESS;
            }

            // Création d'un nouvel utilisateur admin
            $user = new User();
            $user->setEmail('admin@shop-bj.com');
            $user->setUsername('admin');
            $user->setFirstName('Admin');
            $user->setLastName('ShopBJ');
            $user->setRoles(['ROLE_ADMIN']);
            $user->setIsVerified(true);
            $user->setCreatedAt(new \DateTimeImmutable());
            
            // Mot de passe sécurisé par défaut
            $defaultPassword = 'AdminShop2025!';
            $hashedPassword = $this->passwordHasher->hashPassword($user, $defaultPassword);
            $user->setPassword($hashedPassword);
            
            // Sauvegarder l'utilisateur
            $this->entityManager->persist($user);
            $this->entityManager->flush();

            $io->success('Utilisateur admin créé avec succès !');
            $io->table(
                ['Email', 'Mot de passe', 'Rôle'],
                [['admin@shop-bj.com', $defaultPassword, 'ROLE_ADMIN']]
            );

        } catch (\Exception $e) {
            $io->error('Erreur lors de la création de l\'utilisateur admin : ' . $e->getMessage());
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }
}
