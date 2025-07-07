<?php
// Fichier de configuration initial pour le mode maintenance

require_once __DIR__ . '/vendor/autoload.php';

use App\Entity\SiteConfig;
use App\Kernel;
use Symfony\Component\Dotenv\Dotenv;

(new Dotenv())->bootEnv(__DIR__ . '/.env');

$kernel = new Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();

$entityManager = $kernel->getContainer()->get('doctrine')->getManager();

// Vérifier si l'entrée 'maintenance_mode' existe déjà
$configRepo = $entityManager->getRepository(SiteConfig::class);
$config = $configRepo->findOneBy(['name' => 'maintenance_mode']);

if (!$config) {
    // Créer une nouvelle entrée si elle n'existe pas
    $config = new SiteConfig();
    $config->setName('maintenance_mode');
    $config->setValue('false');
    
    $entityManager->persist($config);
    $entityManager->flush();
    
    echo "Configuration du mode maintenance ajoutée avec succès.\n";
} else {
    echo "La configuration du mode maintenance existe déjà.\n";
}