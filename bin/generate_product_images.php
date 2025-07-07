<?php

require dirname(__DIR__).'/vendor/autoload.php';

use App\Entity\Product;
use App\Entity\Category;
use Symfony\Component\Dotenv\Dotenv;

// Load environment variables
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

// Create Kernel
$kernel = new \App\Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();

// Get Doctrine Entity Manager
$entityManager = $kernel->getContainer()->get('doctrine')->getManager();

// Get Product Repository
$productRepository = $entityManager->getRepository(Product::class);
$categoryRepository = $entityManager->getRepository(Category::class);

// Get all categories
$categories = $categoryRepository->findAll();

$categoryNames = [
    'Femmes' => 'femmes',
    'Hommes' => 'hommes',
    'Enfants' => 'enfants',
    'Accessoires' => 'accessoires',
    'Beauté' => 'beaute'
];

// Generate placeholder images for products
foreach ($categories as $category) {
    $folderName = strtolower($categoryNames[$category->getName()] ?? 'default');
    echo "Processing category: " . $category->getName() . " (folder: $folderName)\n";
    
    // Get products for this category
    $products = $category->getProducts();
    
    if (count($products) == 0) {
        echo "  No products found for this category.\n";
        continue;
    }
    
    foreach ($products as $product) {
        // Create image filename based on product ID
        $imageFilename = sprintf('%s_%d.jpg', $folderName, $product->getId());
        $imagePathRelative = "uploads/products/$folderName/" . $imageFilename;
        $imagePath = dirname(__DIR__) . '/public/' . $imagePathRelative;
        
        // Generate simple image with product name (using GD library)
        $width = 800;
        $height = 1000;
        $image = imagecreatetruecolor($width, $height);
        
        // Use different background colors for each category
        $bgColors = [
            'femmes' => [240, 220, 230],
            'hommes' => [220, 230, 240],
            'enfants' => [230, 240, 220],
            'accessoires' => [240, 230, 220],
            'beaute' => [230, 220, 240],
            'default' => [240, 240, 240]
        ];
        
        $bgColor = $bgColors[$folderName] ?? $bgColors['default'];
        $background = imagecolorallocate($image, $bgColor[0], $bgColor[1], $bgColor[2]);
        $textColor = imagecolorallocate($image, 60, 60, 60);
        $accentColor = imagecolorallocate($image, 30, 144, 255);
        
        // Fill the background
        imagefill($image, 0, 0, $background);
        
        // Draw a border
        $borderSize = 10;
        imagerectangle($image, $borderSize, $borderSize, $width - $borderSize, $height - $borderSize, $accentColor);
        
        // Draw some layout elements
        imagefilledrectangle($image, 0, $height - 200, $width, $height, $accentColor);
        
        // Add product name
        $productName = $product->getName();
        $fontSize = 5;
        $textWidth = imagefontwidth($fontSize) * strlen($productName);
        $textHeight = imagefontheight($fontSize);
        $x = ($width - $textWidth) / 2;
        $y = ($height - $textHeight) / 2;
        
        imagestring($image, $fontSize, $x, $y, $productName, $textColor);
        
        // Add category name
        $categoryName = $category->getName();
        $textWidth = imagefontwidth($fontSize) * strlen($categoryName);
        $x = ($width - $textWidth) / 2;
        imagestring($image, $fontSize, $x, $y + 30, $categoryName, $textColor);
        
        // Add price
        $price = sprintf('%.2f €', $product->getPrice());
        $textWidth = imagefontwidth($fontSize) * strlen($price);
        $x = ($width - $textWidth) / 2;
        imagestring($image, $fontSize, $x, $height - 100, $price, imagecolorallocate($image, 255, 255, 255));
        
        // Add a fake product code
        $productCode = 'REF: ' . strtoupper(substr(md5($product->getId()), 0, 8));
        $textWidth = imagefontwidth(2) * strlen($productCode);
        $x = ($width - $textWidth) / 2;
        imagestring($image, 2, $x, $height - 50, $productCode, imagecolorallocate($image, 220, 220, 220));
        
        // Save the image
        imagejpeg($image, $imagePath, 90);
        imagedestroy($image);
        
        // Update product with image filename
        $product->setImageFilename($imagePathRelative);
        $product->setImageName($imageFilename);
        
        echo "  Created image for product #{$product->getId()}: {$product->getName()} => $imagePathRelative\n";
    }
    
    // Persist changes for products in this category
    $entityManager->flush();
    echo "  Saved image paths to database for category: " . $category->getName() . "\n";
}

echo "Product image generation completed!\n";