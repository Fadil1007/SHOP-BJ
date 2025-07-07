<?php
// Script pour mettre à jour le mot de passe administrateur selon les nouveaux critères

require dirname(__FILE__).'/vendor/autoload.php';

use App\Entity\User;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Doctrine\ORM\EntityManagerInterface;

$kernel = new \App\Kernel($_SERVER['APP_ENV'] ?? 'dev', (bool) ($_SERVER['APP_DEBUG'] ?? true));
$kernel->boot();
$container = $kernel->getContainer();

$entityManager = $container->get('doctrine.orm.entity_manager');
$passwordHasher = $container->get('security.password_hasher');

// On cherche l'utilisateur admin par email
$userRepository = $entityManager->getRepository(User::class);
$admin = $userRepository->findOneBy(['email' => 'admin@example.com']);

if (!$admin) {
    echo "Utilisateur admin@example.com non trouvé.\n";
    exit(1);
}

// Nouveau mot de passe conforme aux critères (8+ caractères, majuscule, symbole)
$newPassword = 'Admin@2025!';

// Hashage et mise à jour du mot de passe
$hashedPassword = $passwordHasher->hashPassword($admin, $newPassword);
$admin->setPassword($hashedPassword);

// Sauvegarde en base de données
$entityManager->flush();

echo "Mot de passe admin mis à jour avec succès!\n";
echo "Nouveaux identifiants : admin@example.com / $newPassword\n";