<?php

require dirname(__DIR__).'/vendor/autoload.php';

use Symfony\Component\Dotenv\Dotenv;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Product;
use App\Repository\ProductRepository;

// Load environment variables
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

// Récupérer le Kernel Symfony
$kernel = new \App\Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();

// Récupérer l'EntityManager pour accéder à la base de données
$entityManager = $kernel->getContainer()->get('doctrine.orm.entity_manager');
$productRepository = $entityManager->getRepository(Product::class);

// Lister les nouvelles images par catégorie
$categories = ['femmes', 'hommes', 'enfants', 'accessoires', 'beaute'];
$newImages = [];

foreach ($categories as $category) {
    $categoryDir = dirname(__DIR__) . '/public/uploads/products/' . $category;
    
    if (is_dir($categoryDir)) {
        $files = glob($categoryDir . '/*.jpg');
        sort($files); // Trier les fichiers pour une affectation ordonnée
        $newImages[$category] = array_map('basename', $files);
    }
}

// Fonction pour obtenir le chemin relatif de l'image à partir du chemin complet
function getRelativePath($fullPath) {
    $basePath = dirname(__DIR__) . '/public/';
    return str_replace($basePath, '', $fullPath);
}

// Mise à jour des produits par catégorie
$updatedCount = 0;
foreach ($categories as $category) {
    // Récupérer tous les produits pour cette catégorie
    $categoryName = ucfirst($category);
    
    // Trouver des produits ayant cette catégorie
    $products = $productRepository->createQueryBuilder('p')
        ->join('p.category', 'c')
        ->where('c.name = :categoryName')
        ->setParameter('categoryName', $categoryName)
        ->getQuery()
        ->getResult();
    
    if (empty($products)) {
        echo "Aucun produit trouvé pour la catégorie: $categoryName\n";
        continue;
    }
    
    echo "Mise à jour des images pour " . count($products) . " produits dans la catégorie $categoryName\n";
    
    // Obtenir les nouvelles images pour cette catégorie
    $availableImages = $newImages[$category] ?? [];
    
    if (empty($availableImages)) {
        echo "Aucune nouvelle image trouvée pour la catégorie: $category\n";
        continue;
    }
    
    // Limiter le nombre d'images à utiliser au nombre de produits
    $numProducts = count($products);
    $numImages = count($availableImages);
    
    // Distribuer les images aux produits
    for ($i = 0; $i < $numProducts; $i++) {
        $product = $products[$i];
        
        // Attribuer cycliquement les images disponibles
        $imageIndex = $i % $numImages;
        $imageName = $availableImages[$imageIndex];
        
        // Mettre à jour le chemin de l'image
        $newImagePath = 'uploads/products/' . $category . '/' . $imageName;
        
        // Utiliser les méthodes disponibles pour mettre à jour l'image
        $product->setImageName($imageName);
        $product->setImageFilename($newImagePath);
        
        // Persister les modifications
        $entityManager->persist($product);
        $updatedCount++;
        
        echo "Produit ID: " . $product->getId() . " - Image mise à jour: " . $newImagePath . "\n";
    }
}

// Enregistrer les modifications dans la base de données
$entityManager->flush();

echo "\nMise à jour terminée. $updatedCount produits ont été mis à jour avec de nouvelles images.\n";