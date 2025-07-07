<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

// Load environment variables
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

// Répertoire pour les bannières
$bannerDir = dirname(__DIR__) . '/public/uploads/banners';

// Assurez-vous que le répertoire existe
if (!is_dir($bannerDir)) {
    mkdir($bannerDir, 0777, true);
}

// Sources d'images de bannières (utilisation d'images libres de droits)
$bannerSources = [
    'https://images.unsplash.com/photo-1483985988355-763728e1935b?w=1200&h=400', // Mode femme
    'https://images.unsplash.com/photo-1441984904996-e0b6ba687e04?w=1200&h=400', // Mode homme
    'https://images.unsplash.com/photo-1607083206968-13611e3d76db?w=1200&h=400', // Mode enfant
    'https://images.unsplash.com/photo-1490481651871-ab68de25d43d?w=1200&h=400', // Style urbain
    'https://images.unsplash.com/photo-1445205170230-053b83016050?w=1200&h=400', // Accessoires
];

// Téléchargement des images
for ($i = 0; $i < count($bannerSources); $i++) {
    $imageUrl = $bannerSources[$i];
    // Nommer l'image avec un index (commençant à 1)
    $fileName = 'carousel-' . ($i + 1) . '.jpg';
    $filePath = $bannerDir . '/' . $fileName;
    
    // Télécharger l'image
    $imageContent = @file_get_contents($imageUrl);
    if ($imageContent !== false) {
        file_put_contents($filePath, $imageContent);
        echo "Image de bannière téléchargée: " . $filePath . "\n";
    } else {
        echo "Erreur lors du téléchargement de l'image: " . $imageUrl . "\n";
    }
}

echo "Téléchargement des images de bannière terminé.\n";