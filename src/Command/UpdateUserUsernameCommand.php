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

#[AsCommand(
    name: 'app:update-user-username',
    description: 'Met à jour le nom d\'utilisateur d\'un utilisateur',
)]
class UpdateUserUsernameCommand extends Command
{
    private EntityManagerInterface $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function configure(): void
    {
        $this
            ->addArgument('email', InputArgument::REQUIRED, 'L\'email de l\'utilisateur')
            ->addArgument('username', InputArgument::REQUIRED, 'Le nouveau nom d\'utilisateur')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);
        $email = $input->getArgument('email');
        $username = $input->getArgument('username');

        // Trouver l'utilisateur
        $user = $this->entityManager->getRepository(User::class)->findOneBy(['email' => $email]);
        if (!$user) {
            $io->error(sprintf('Aucun utilisateur trouvé avec l\'email %s', $email));
            return Command::FAILURE;
        }

        // Vérifier si le nom d'utilisateur existe déjà
        $usernameExists = $this->entityManager->getRepository(User::class)->findOneBy(['username' => $username]);
        if ($usernameExists && $usernameExists->getId() !== $user->getId()) {
            $io->error(sprintf('Le nom d\'utilisateur "%s" est déjà utilisé', $username));
            return Command::FAILURE;
        }

        // Mettre à jour le nom d'utilisateur
        $user->setUsername($username);

        // Sauvegarder l'utilisateur
        $this->entityManager->flush();

        $io->success(sprintf('Le nom d\'utilisateur de l\'utilisateur %s a été mis à jour : %s', $email, $username));

        return Command::SUCCESS;
    }
}