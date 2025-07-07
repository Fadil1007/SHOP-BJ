<?php

require_once dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Doctrine\DBAL\DriverManager;

$dotenv = new Dotenv();
$dotenv->load(dirname(__DIR__).'/.env');

// Récupération des informations depuis le .env
$databaseUrl = $_ENV['DATABASE_URL'] ?? null;

if (!$databaseUrl) {
    echo "❌ DATABASE_URL manquante dans le fichier .env\n";
    exit(1);
}

// Convertir la DATABASE_URL en tableau de connexion
$connectionParams = [
    'url' => $databaseUrl
];

try {
    $conn = DriverManager::getConnection($connectionParams);

    // Créer la table si elle n'existe pas
    $sql = "CREATE TABLE IF NOT EXISTS flash_message (
        id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) DEFAULT NULL,
        message TEXT NOT NULL,
        type VARCHAR(50) NOT NULL,
        target_pages VARCHAR(255) NOT NULL,
        is_active BOOLEAN NOT NULL,
        created_at DATETIME NOT NULL
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4";
    
    $conn->executeStatement($sql);

    // Supprimer les anciens messages
    $conn->executeStatement('DELETE FROM flash_message');

    // Créer des messages de test
    $messages = [
        [
            'title' => '🎉 Bienvenue sur SHOP BJ !',
            'message' => 'Découvrez nos nouveaux produits avec <strong>20% de réduction</strong> sur votre première commande !',
            'type' => 'success',
            'target_pages' => 'all',
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'title' => '📢 Promotion Spéciale',
            'message' => 'Livraison gratuite pour toute commande supérieure à 50 000 FCFA',
            'type' => 'info',
            'target_pages' => 'app_home',
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ],
        [
            'title' => '⚠️ Stock Limité',
            'message' => 'Dépêchez-vous ! Nos articles les plus populaires partent rapidement.',
            'type' => 'warning',
            'target_pages' => 'product_list',
            'is_active' => 1,
            'created_at' => date('Y-m-d H:i:s')
        ]
    ];

    foreach ($messages as $msg) {
        $conn->insert('flash_message', $msg);
    }

    echo "✅ " . count($messages) . " messages flash créés avec succès !\n";

    // Afficher les messages insérés
    $result = $conn->fetchAllAssociative('SELECT * FROM flash_message WHERE is_active = 1');
    echo "📋 Messages actifs dans la base :\n";
    foreach ($result as $row) {
        echo "  - {$row['title']} ({$row['type']}) pour {$row['target_pages']}\n";
    }

} catch (\Exception $e) {
    echo "❌ Erreur : " . $e->getMessage() . "\n";
}
