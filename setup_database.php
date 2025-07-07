<?php

// Script pour automatiser la configuration de la base de données
// Usage: php setup_database.php

require dirname(__FILE__).'/vendor/autoload.php';

use Symfony\Component\Process\Process;
use Symfony\Component\Console\Output\ConsoleOutput;

$output = new ConsoleOutput();

$output->writeln('<info>🚀 Configuration automatique de la base de données...</info>');

try {
    // 1. Créer les migrations si nécessaire
    $output->writeln('<comment>📝 Création des migrations...</comment>');
    $makeMigrationProcess = new Process(['php', 'bin/console', 'make:migration']);
    $makeMigrationProcess->run();
    
    if ($makeMigrationProcess->getExitCode() === 0) {
        $output->writeln('<info>✓ Migrations créées avec succès</info>');
    } else {
        $output->writeln('<comment>ℹ Aucune nouvelle migration nécessaire</comment>');
    }

    // 2. Exécuter les migrations
    $output->writeln('<comment>🔄 Exécution des migrations...</comment>');
    $migrateProcess = new Process(['php', 'bin/console', 'doctrine:migrations:migrate', '--no-interaction']);
    $migrateProcess->run();
    
    if ($migrateProcess->getExitCode() === 0) {
        $output->writeln('<info>✓ Migrations exécutées avec succès</info>');
    } else {
        throw new Exception('Erreur lors de l\'exécution des migrations : ' . $migrateProcess->getErrorOutput());
    }

    // 3. Créer l'utilisateur admin automatiquement
    $output->writeln('<comment>👤 Création de l\'utilisateur admin...</comment>');
    $createAdminProcess = new Process(['php', 'bin/console', 'app:post-migration']);
    $createAdminProcess->run();
    
    if ($createAdminProcess->getExitCode() === 0) {
        $output->writeln('<info>✓ Utilisateur admin configuré</info>');
        $output->writeln($createAdminProcess->getOutput());
    } else {
        throw new Exception('Erreur lors de la création de l\'admin : ' . $createAdminProcess->getErrorOutput());
    }

    $output->writeln('<info>🎉 Configuration terminée avec succès !</info>');
    $output->writeln('<comment>Vous pouvez maintenant vous connecter avec :</comment>');
    $output->writeln('<comment>Email: admin@shop-bj.com</comment>');
    $output->writeln('<comment>Mot de passe: AdminShop2025!</comment>');

} catch (Exception $e) {
    $output->writeln('<error>❌ Erreur : ' . $e->getMessage() . '</error>');
    exit(1);
}
