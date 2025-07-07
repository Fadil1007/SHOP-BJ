<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;

// Load environment variables
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

// Répertoires d'images
$categories = ['femmes', 'hommes', 'enfants', 'accessoires', 'beaute'];
$baseDir = dirname(__DIR__) . '/public/uploads/products';

// Assurez-vous que les répertoires existent
foreach ($categories as $category) {
    $categoryDir = $baseDir . '/' . $category;
    if (!is_dir($categoryDir)) {
        mkdir($categoryDir, 0777, true);
    }
}

// Sources d'images de produits de mode réelles (utilisation d'APIs d'images libres de droits)
$imageSources = [
    'femmes' => [
        'https://fakestoreapi.com/img/71z3kpMAYsL._AC_UY879_.jpg',
        'https://fakestoreapi.com/img/71HblAHs5xL._AC_UY879_-2.jpg',
        'https://fakestoreapi.com/img/51Y5NI-I5jL._AC_UX679_.jpg',
        'https://fakestoreapi.com/img/81XH0e8fefL._AC_UY879_.jpg',
        'https://fakestoreapi.com/img/71pWzhdJNwL._AC_UL640_QL65_ML3_.jpg',
    ],
    'hommes' => [
        'https://fakestoreapi.com/img/71li-ujtlUL._AC_UX679_.jpg',
        'https://fakestoreapi.com/img/71YXzeOuslL._AC_UY879_.jpg',
        'https://fakestoreapi.com/img/71-3HjGNDUL._AC_SY879._SX._UX._SY._UY_.jpg',
        'https://fakestoreapi.com/img/51eg55uWmdL._AC_UX679_.jpg',
        'https://fakestoreapi.com/img/61U7T1koQqL._AC_SX679_.jpg',
    ],
    'enfants' => [
        'https://images.unsplash.com/photo-1519238263530-99bdd11df2ea',
        'https://images.unsplash.com/photo-1515488042361-ee00e0ddd4e4',
        'https://images.unsplash.com/photo-1522771930-78848d9293e8',
        'https://images.unsplash.com/photo-1503919545889-aef636e10ad4',
        'https://images.unsplash.com/photo-1596870230751-ebdfce98ec42',
    ],
    'accessoires' => [
        'https://fakestoreapi.com/img/61sbMiUnoGL._AC_UL640_QL65_ML3_.jpg',
        'https://fakestoreapi.com/img/71YAIFU48IL._AC_UL640_QL65_ML3_.jpg',
        'https://fakestoreapi.com/img/51UDEzMJVpL._AC_UL640_QL65_ML3_.jpg',
        'https://fakestoreapi.com/img/61IBBVJvSDL._AC_SY879_.jpg',
        'https://fakestoreapi.com/img/81fPKd-2AYL._AC_SL1500_.jpg',
    ],
    'beaute' => [
        'https://images.unsplash.com/photo-1596462502278-27bfdc403348',
        'https://images.unsplash.com/photo-1571875257727-256c39da42af',
        'https://images.unsplash.com/photo-1620916566256-928b39148cc1',
        'https://images.unsplash.com/photo-1598440947619-2c35fc9aa908',
        'https://images.unsplash.com/photo-1583209814683-c023dd293cc6',
    ],
];

// Téléchargement des images
foreach ($categories as $category) {
    $sources = $imageSources[$category];
    
    for ($i = 0; $i < count($sources); $i++) {
        $imageUrl = $sources[$i];
        // Nommer l'image avec le nom de la catégorie et un numéro séquentiel
        $fileNumber = 100 + $i;
        $fileName = $category . '_' . $fileNumber . '.jpg';
        $filePath = $baseDir . '/' . $category . '/' . $fileName;
        
        // Télécharger l'image
        $imageContent = @file_get_contents($imageUrl);
        if ($imageContent !== false) {
            file_put_contents($filePath, $imageContent);
            echo "Image téléchargée: " . $filePath . "\n";
        } else {
            echo "Erreur lors du téléchargement de l'image: " . $imageUrl . "\n";
        }
    }
}

// Aussi, téléchargeons d'autres images pour avoir plus de variété
$additionalCategories = ['femmes', 'hommes', 'accessoires'];
$additionalUrls = [
    'femmes' => [
        'https://images.unsplash.com/photo-1434389677669-e08b4cac3105',
        'https://images.unsplash.com/photo-1485968579580-b6d095142e6e',
        'https://images.unsplash.com/photo-1475180098004-ca77a66827be',
    ],
    'hommes' => [
        'https://images.unsplash.com/photo-1516257984-b1b4d707412e',
        'https://images.unsplash.com/photo-1490578474895-699cd4e2cf59',
        'https://images.unsplash.com/photo-1491336477066-31156b5e4f35',
    ],
    'accessoires' => [
        'https://images.unsplash.com/photo-1548036328-c9fa89d128fa',
        'https://images.unsplash.com/photo-1575891753338-fff47d13f4e9',
        'https://images.unsplash.com/photo-1612902456551-333ac5afa26e',
    ]
];

// Téléchargement des images supplémentaires
foreach ($additionalCategories as $category) {
    $sources = $additionalUrls[$category];
    
    for ($i = 0; $i < count($sources); $i++) {
        $imageUrl = $sources[$i];
        // Nommer l'image avec le nom de la catégorie et un numéro séquentiel
        $fileNumber = 120 + $i;
        $fileName = $category . '_' . $fileNumber . '.jpg';
        $filePath = $baseDir . '/' . $category . '/' . $fileName;
        
        // Télécharger l'image
        $imageContent = @file_get_contents($imageUrl);
        if ($imageContent !== false) {
            file_put_contents($filePath, $imageContent);
            echo "Image supplémentaire téléchargée: " . $filePath . "\n";
        } else {
            echo "Erreur lors du téléchargement de l'image: " . $imageUrl . "\n";
        }
    }
}

echo "Téléchargement des images de produits terminé.\n";