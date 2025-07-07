<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

// Load environment variables
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

// Définir le répertoire cible
$bannerDir = dirname(__DIR__) . '/public/uploads/banners';

// Assurez-vous que le répertoire existe
if (!is_dir($bannerDir)) {
    mkdir($bannerDir, 0777, true);
}

// Génération de la bannière principale
generateBanner(
    $bannerDir . '/banner-1.jpg',
    'Collection Printemps-Été',
    'Découvrez nos nouvelles tendances',
    [232, 245, 233], // fond vert très pâle
    [8, 138, 75],    // vert principal
    1200, 600
);

// Génération de la bannière de soldes
generateBanner(
    $bannerDir . '/sale-banner.jpg',
    'SOLDES JUSQU\'À -70%',
    'Profitez de nos offres exceptionnelles sur toute la collection',
    [21, 67, 47],    // vert foncé
    [46, 204, 113],  // vert accent clair
    1200, 400
);

// Génération de la bannière catégorie femmes
generateBanner(
    $bannerDir . '/femmes-banner.jpg',
    'Collection Femmes',
    'Élégance et style pour toutes les occasions',
    [226, 240, 217], // fond vert pâle
    [76, 175, 80],   // vert moyen
    1200, 400
);

// Génération de la bannière catégorie hommes
generateBanner(
    $bannerDir . '/hommes-banner.jpg',
    'Collection Hommes',
    'Confort et tendance au quotidien',
    [220, 237, 223], // fond vert très pâle
    [39, 174, 96],   // vert foncé
    1200, 400
);

// Génération de la bannière catégorie enfants
generateBanner(
    $bannerDir . '/enfants-banner.jpg',
    'Collection Enfants',
    'Des vêtements colorés et confortables pour les petits',
    [232, 245, 233], // fond vert très pâle
    [46, 204, 113],  // vert vif
    1200, 400
);

// Génération de la bannière catégorie accessoires
generateBanner(
    $bannerDir . '/accessoires-banner.jpg',
    'Accessoires',
    'Complétez votre look avec nos accessoires tendance',
    [220, 237, 200], // fond vert-jaune pâle
    [88, 214, 141],  // vert-jaune
    1200, 400
);

// Génération de la bannière catégorie beauté
generateBanner(
    $bannerDir . '/beaute-banner.jpg',
    'Beauté & Soins',
    'Prenez soin de vous avec nos produits sélectionnés',
    [212, 239, 223], // fond vert pâle
    [22, 160, 133],  // vert-bleu
    1200, 400
);

echo "Bannières générées avec succès !\n";

/**
 * Génère une image de bannière avec du texte
 */
function generateBanner($filePath, $title, $subtitle, $bgColor, $accentColor, $width = 1200, $height = 400)
{
    // Créer l'image
    $image = imagecreatetruecolor($width, $height);
    
    // Allouer les couleurs
    $backgroundColor = imagecolorallocate($image, $bgColor[0], $bgColor[1], $bgColor[2]);
    $textColor = imagecolorallocate($image, 255, 255, 255);
    $accentColorAlloc = imagecolorallocate($image, $accentColor[0], $accentColor[1], $accentColor[2]);
    $shadowColor = imagecolorallocate($image, 0, 0, 0);
    
    // Remplir le fond
    imagefill($image, 0, 0, $backgroundColor);
    
    // Dessiner des éléments graphiques pour égayer la bannière
    // Barre d'accent
    imagefilledrectangle($image, 0, $height - 80, $width, $height, $accentColorAlloc);
    
    // Cercles décoratifs
    $circleSize = 200;
    for ($i = 0; $i < 5; $i++) {
        $x = rand(0, $width);
        $y = rand(0, $height);
        $size = rand($circleSize / 2, $circleSize);
        $opacity = rand(30, 80); // Niveau de transparence
        
        // Versions semi-transparentes de l'accent
        $circleColor = imagecolorallocatealpha($image, 
            $accentColor[0], 
            $accentColor[1], 
            $accentColor[2], 
            127 - ($opacity * 127 / 100)
        );
        
        imagefilledellipse($image, $x, $y, $size, $size, $circleColor);
    }
    
    // Ajouter titre principal avec ombre
    $fontSize = 5;
    $titleY = $height / 3;
    
    // Texte avec ombre légère
    $shadowOffset = 2;
    imagestring($image, $fontSize, ($width / 2) - (strlen($title) * imagefontwidth($fontSize) / 2) + $shadowOffset, 
               $titleY + $shadowOffset, $title, $shadowColor);
    
    // Texte principal
    imagestring($image, $fontSize, ($width / 2) - (strlen($title) * imagefontwidth($fontSize) / 2), 
               $titleY, $title, $textColor);
    
    // Ajouter sous-titre
    $subFontSize = 4;
    $subtitleY = $titleY + 30;
    imagestring($image, $subFontSize, ($width / 2) - (strlen($subtitle) * imagefontwidth($subFontSize) / 2), 
               $subtitleY, $subtitle, $textColor);
    
    // Enregistrer l'image
    imagejpeg($image, $filePath, 90);
    imagedestroy($image);
    
    echo "Bannière créée: " . basename($filePath) . "\n";
}