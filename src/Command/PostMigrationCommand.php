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
    name: 'app:post-migration',
    description: 'Executes tasks after database migration',
)]
class PostMigrationCommand extends Command
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

        $io->title('Exécution des tâches post-migration');

        try {
            // 1. Créer l'utilisateur admin s'il n'existe pas
            $this->createAdminUser($io);
            
            // 2. Autres tâches post-migration peuvent être ajoutées ici
            
            $io->success('Toutes les tâches post-migration ont été exécutées avec succès !');

        } catch (\Exception $e) {
            $io->error('Erreur lors de l\'exécution des tâches post-migration : ' . $e->getMessage());
            return Command::FAILURE;
        }

        return Command::SUCCESS;
    }

    private function createAdminUser(SymfonyStyle $io): void
    {
        // Vérifier si un utilisateur admin existe déjà
        $existingAdmin = $this->entityManager->getRepository(User::class)->findOneBy(['email' => 'admin@shop-bj.com']);
        
        if ($existingAdmin) {
            $io->info('✓ Utilisateur admin existe déjà');
            return;
        }

        // Créer un nouvel utilisateur admin
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

        $io->success('✓ Utilisateur admin créé automatiquement');
        $io->table(
            ['Email', 'Mot de passe', 'Rôle'],
            [['admin@shop-bj.com', $defaultPassword, 'ROLE_ADMIN']]
        );
    }
}
