<?php

namespace App\Command;

use App\Entity\Category;
use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;

#[AsCommand(
    name: 'app:initialize-database',
    description: 'Initialize the database with default categories and products',
)]
class InitializeDatabaseCommand extends Command
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $io = new SymfonyStyle($input, $output);

        // Create categories
        $io->section('Creating categories');
        
        $categories = [
            ['name' => 'Femmes', 'description' => 'Vêtements et accessoires pour femmes', 'featured' => true],
            ['name' => 'Hommes', 'description' => 'Vêtements et accessoires pour hommes', 'featured' => true],
            ['name' => 'Accessoires', 'description' => 'Accessoires de mode', 'featured' => true],
            ['name' => 'Chaussures', 'description' => 'Chaussures pour tous', 'featured' => true],
            ['name' => 'Beauté', 'description' => 'Produits de beauté et soins', 'featured' => true],
        ];

        $categoryEntities = [];
        foreach ($categories as $categoryData) {
            $category = new Category();
            $category->setName($categoryData['name']);
            $category->setDescription($categoryData['description']);
            $category->setFeatured($categoryData['featured']);

            $this->entityManager->persist($category);
            $categoryEntities[] = $category;
            $io->text('Created category: ' . $category->getName());
        }

        // Create products
        $io->section('Creating products');

        $products = [
            [
                'name' => 'T-shirt Basique',
                'description' => 'T-shirt basique en coton de haute qualité, idéal pour un usage quotidien.',
                'price' => 19.99,
                'category' => 0, // Femmes
                'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
                'colors' => ['Noir', 'Blanc', 'Rouge', 'Bleu'],
                'featured' => true,
                'stock' => 100
            ],
            [
                'name' => 'Jeans Slim',
                'description' => 'Jeans slim confortable et élégant pour un look moderne.',
                'price' => 49.99,
                'category' => 1, // Hommes
                'sizes' => ['28', '30', '32', '34', '36'],
                'colors' => ['Bleu foncé', 'Noir', 'Bleu clair'],
                'featured' => true,
                'stock' => 75
            ],
            [
                'name' => 'Robe d\'été',
                'description' => 'Robe légère et confortable pour les chaudes journées d\'été.',
                'price' => 39.99,
                'category' => 0, // Femmes
                'sizes' => ['XS', 'S', 'M', 'L'],
                'colors' => ['Floral', 'Rouge', 'Bleu ciel', 'Noir'],
                'featured' => true,
                'stock' => 50
            ],
            [
                'name' => 'Veste en Cuir',
                'description' => 'Veste en cuir véritable pour un style rock et intemporel.',
                'price' => 129.99,
                'category' => 1, // Hommes
                'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
                'colors' => ['Noir', 'Marron'],
                'featured' => false,
                'stock' => 30
            ],

            [
                'name' => 'Sac à Main',
                'description' => 'Sac à main élégant pour compléter votre tenue.',
                'price' => 59.99,
                'category' => 2, // Accessoires
                'sizes' => ['Unique'],
                'colors' => ['Noir', 'Marron', 'Rouge', 'Beige'],
                'featured' => true,
                'stock' => 40
            ],
            [
                'name' => 'Baskets Urbaines',
                'description' => 'Baskets confortables pour un look urbain et décontracté.',
                'price' => 79.99,
                'category' => 3, // Chaussures
                'sizes' => ['36', '37', '38', '39', '40', '41', '42', '43', '44', '45'],
                'colors' => ['Blanc', 'Noir', 'Gris/Rouge'],
                'featured' => true,
                'stock' => 80
            ],
            [
                'name' => 'Pull en Laine',
                'description' => 'Pull en laine douce et chaude pour les jours froids.',
                'price' => 45.99,
                'category' => 0, // Femmes
                'sizes' => ['S', 'M', 'L', 'XL'],
                'colors' => ['Crème', 'Gris', 'Bleu marine', 'Bordeaux'],
                'featured' => false,
                'stock' => 55
            ],
        ];

        foreach ($products as $productData) {
            $product = new Product();
            $product->setName($productData['name']);
            $product->setDescription($productData['description']);
            $product->setShortDescription(substr($productData['description'], 0, 100));
            $product->setPrice($productData['price']);
            $product->setCategory($categoryEntities[$productData['category']]);
            $product->setSizes($productData['sizes']);
            $product->setColors($productData['colors']);
            $product->setFeatured($productData['featured']);
            $product->setStock($productData['stock']);

            $this->entityManager->persist($product);
            $io->text('Created product: ' . $product->getName());
        }

        $this->entityManager->flush();

        $io->success('Database initialized successfully with sample data!');

        return Command::SUCCESS;
    }
}