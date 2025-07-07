<?php

require dirname(__DIR__).'/vendor/autoload.php';

use App\Entity\Category;
use Symfony\Component\String\Slugger\AsciiSlugger;
use Symfony\Component\Dotenv\Dotenv;

(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

$kernel = new \App\Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();
$container = $kernel->getContainer();

$em = $container->get('doctrine.orm.entity_manager');
$slugger = new AsciiSlugger('fr');

echo "Mise à jour des slugs des catégories...\n";

$categories = $em->getRepository(Category::class)->findAll();
$count = 0;

foreach ($categories as $category) {
    $name = $category->getName();
    
    if ($name) {
        $slug = strtolower($slugger->slug($name));
        $category->setSlug($slug);
        $count++;
        
        echo "Catégorie #{$category->getId()} {$name} -> slug: {$slug}\n";
    }
}

$em->flush();

echo "Terminé ! {$count} catégories mises à jour.\n";