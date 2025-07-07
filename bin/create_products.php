<?php

require_once dirname(__DIR__).'/vendor/autoload.php';

use App\Entity\Category;
use App\Entity\Product;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\HttpKernel\KernelInterface;

// Load environment variables
(new Dotenv())->bootEnv(dirname(__DIR__).'/.env');

$kernel = new \App\Kernel($_SERVER['APP_ENV'], (bool) $_SERVER['APP_DEBUG']);
$kernel->boot();

$container = $kernel->getContainer();
$entityManager = $container->get('doctrine.orm.entity_manager');

// Vider la table des produits existants
$connection = $entityManager->getConnection();
$platform = $connection->getDatabasePlatform();
$connection->executeStatement('DELETE FROM cart_item');
$connection->executeStatement('DELETE FROM product');
$connection->executeStatement($platform->getTruncateTableSQL('product', true));

echo "Suppression des produits existants terminée.\n";

// Récupérer les catégories
$categoryRepository = $entityManager->getRepository(Category::class);
$categories = $categoryRepository->findAll();

$categoryMap = [];
foreach ($categories as $category) {
    $categoryMap[$category->getName()] = $category;
    echo "Catégorie trouvée: " . $category->getName() . " (ID: " . $category->getId() . ")\n";
}

// Vérifier que nous avons bien les 5 catégories principales
$requiredCategories = ['Femmes', 'Hommes', 'Enfants', 'Accessoires', 'Beauté'];
foreach ($requiredCategories as $catName) {
    if (!isset($categoryMap[$catName])) {
        echo "ERREUR: Catégorie '$catName' non trouvée!\n";
        exit(1);
    }
}

// Fonction pour créer un produit
function createProduct($entityManager, $data, $category) {
    $product = new Product();
    $product->setName($data['name']);
    $product->setSku($data['sku']);
    $product->setShortDescription($data['short_description']);
    $product->setDescription($data['description']);
    $product->setPrice($data['price']);
    $product->setStock($data['stock']);
    $product->setSizes($data['sizes']);
    $product->setColors($data['colors']);
    $product->setCategory($category);
    $product->setIsActive(true);
    $product->setFeatured($data['featured'] ?? false);
    
    if (isset($data['old_price']) && $data['old_price'] !== null) {
        $product->setOldPrice($data['old_price']);
        $product->setOnSale(true);
        $product->setDiscountPercentage($data['discount_percentage'] ?? null);
    } else {
        $product->setOnSale(false);
    }
    
    $entityManager->persist($product);
    return $product;
}

// Produits pour la catégorie Femmes
$produitsWomen = [
    [
        'name' => 'Robe Longue Bohème',
        'sku' => 'FW-RB-001',
        'short_description' => 'Robe longue bohème à imprimé floral, idéale pour l\'été',
        'description' => 'Robe longue au style bohème avec imprimé floral. Fluide et légère, parfaite pour l\'été. Tissu 100% coton, col en V et manches 3/4.',
        'price' => 49.99,
        'old_price' => 69.99,
        'discount_percentage' => 28,
        'stock' => 25,
        'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
        'colors' => ['Bleu', 'Blanc', 'Rose'],
        'featured' => true
    ],
    [
        'name' => 'Blazer Oversize',
        'sku' => 'FW-BL-001',
        'short_description' => 'Blazer oversize élégant pour look professionnel décontracté',
        'description' => 'Blazer coupe oversize au style moderne et élégant. Se porte avec un jean ou une jupe pour un look business casual. Doublé, deux poches, boutons décoratifs.',
        'price' => 79.99,
        'old_price' => null,
        'stock' => 15,
        'sizes' => ['S', 'M', 'L', 'XL'],
        'colors' => ['Noir', 'Beige', 'Bleu marine']
    ],
    [
        'name' => 'Jean Mom Taille Haute',
        'sku' => 'FW-JN-001',
        'short_description' => 'Jean mom taille haute au style vintage',
        'description' => 'Jean mom à taille haute inspiré des années 90. Coupe ample sur les hanches et fuselée vers le bas. 100% coton, délavage vintage.',
        'price' => 59.99,
        'old_price' => 74.99,
        'discount_percentage' => 20,
        'stock' => 30,
        'sizes' => ['34', '36', '38', '40', '42', '44'],
        'colors' => ['Bleu clair', 'Bleu foncé', 'Noir']
    ],
    [
        'name' => 'Robe Chemise Midi',
        'sku' => 'FW-RC-001',
        'short_description' => 'Robe chemise midi élégante et confortable',
        'description' => 'Robe chemise longueur midi avec ceinture. Polyvalente et facile à porter en toute occasion. Manches retroussables, poches latérales.',
        'price' => 54.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
        'colors' => ['Blanc', 'Bleu ciel', 'Kaki']
    ],
    [
        'name' => 'Pull Cachemire Col Rond',
        'sku' => 'FW-PC-001',
        'short_description' => 'Pull en cachemire doux et confortable',
        'description' => 'Pull doux en cachemire de qualité supérieure. Confortable et chaud, il est parfait pour l\'hiver. Mailles fines, col rond classique.',
        'price' => 89.99,
        'old_price' => 109.99,
        'discount_percentage' => 18,
        'stock' => 12,
        'sizes' => ['S', 'M', 'L'],
        'colors' => ['Gris', 'Camel', 'Rouge']
    ],
    [
        'name' => 'T-shirt Basique Col V',
        'sku' => 'FW-TV-001',
        'short_description' => 'T-shirt basique col V en coton biologique',
        'description' => 'T-shirt essentiel à col V en coton biologique. Coupe ajustée et confortable, idéal pour le quotidien. Tissu respirant et durable.',
        'price' => 19.99,
        'old_price' => null,
        'stock' => 50,
        'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
        'colors' => ['Blanc', 'Noir', 'Gris', 'Marine']
    ],
    [
        'name' => 'Jupe Plissée Mi-longue',
        'sku' => 'FW-JP-001',
        'short_description' => 'Jupe plissée élégante à taille élastique',
        'description' => 'Jupe plissée mi-longue à taille élastique. Fluide et élégante, facile à assortir. Tombé impeccable, confortable toute la journée.',
        'price' => 39.99,
        'old_price' => 54.99,
        'discount_percentage' => 27,
        'stock' => 18,
        'sizes' => ['XS/S', 'M/L', 'XL/XXL'],
        'colors' => ['Noir', 'Beige', 'Rouge']
    ],
    [
        'name' => 'Chemisier Satin Col Lavallière',
        'sku' => 'FW-CS-001',
        'short_description' => 'Chemisier satin élégant avec col lavallière',
        'description' => 'Chemisier en satin avec col lavallière, élégant et féminin. Parfait pour le bureau ou les occasions spéciales. Manches longues avec boutons aux poignets.',
        'price' => 44.99,
        'old_price' => null,
        'stock' => 22,
        'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
        'colors' => ['Blanc', 'Rose poudré', 'Noir']
    ],
    [
        'name' => 'Veste Jean Oversize',
        'sku' => 'FW-VJ-001',
        'short_description' => 'Veste jean oversize décontractée et tendance',
        'description' => 'Veste en jean oversize au style décontracté. S\'adapte à toutes les morphologies et se porte en toute saison. Poches plaquées, boutons métalliques.',
        'price' => 69.99,
        'old_price' => 84.99,
        'discount_percentage' => 17,
        'stock' => 28,
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Bleu délavé', 'Bleu brut', 'Noir']
    ],
    [
        'name' => 'Pantalon Palazzo',
        'sku' => 'FW-PP-001',
        'short_description' => 'Pantalon palazzo fluide à taille haute',
        'description' => 'Pantalon palazzo fluide à taille haute. Élégant et confortable grâce à sa coupe ample. Tissu léger, ceinture élastiquée à l\'arrière.',
        'price' => 49.99,
        'old_price' => null,
        'stock' => 25,
        'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
        'colors' => ['Noir', 'Écru', 'Terracotta']
    ],
    [
        'name' => 'Robe Moulante Soirée',
        'sku' => 'FW-RM-001',
        'short_description' => 'Robe moulante élégante pour soirées',
        'description' => 'Robe moulante pour soirée en tissu stretch. Élégante et flatteuse, met en valeur la silhouette. Longueur midi, fente à l\'arrière, encolure carrée.',
        'price' => 64.99,
        'old_price' => 79.99,
        'discount_percentage' => 18,
        'stock' => 15,
        'sizes' => ['XS', 'S', 'M', 'L'],
        'colors' => ['Noir', 'Rouge', 'Bleu nuit']
    ],
    [
        'name' => 'Gilet Long Sans Manches',
        'sku' => 'FW-GL-001',
        'short_description' => 'Gilet long sans manches pour look superposé',
        'description' => 'Gilet long sans manches, parfait pour créer un look superposé. Style minimaliste et élégant. Deux poches, fente latérale, tissu léger.',
        'price' => 54.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['S/M', 'L/XL'],
        'colors' => ['Gris', 'Noir', 'Camel']
    ],
    [
        'name' => 'Short Taille Haute',
        'sku' => 'FW-ST-001',
        'short_description' => 'Short taille haute en coton pour l\'été',
        'description' => 'Short taille haute en coton. Confortable et stylé pour l\'été. Poches fonctionnelles, revers aux jambes, ceinture passants.',
        'price' => 34.99,
        'old_price' => 44.99,
        'discount_percentage' => 22,
        'stock' => 30,
        'sizes' => ['34', '36', '38', '40', '42'],
        'colors' => ['Blanc', 'Kaki', 'Bleu']
    ],
    [
        'name' => 'Top Dentelle',
        'sku' => 'FW-TD-001',
        'short_description' => 'Top en dentelle fine pour un look féminin',
        'description' => 'Top en dentelle fine et élégante. Parfait pour les occasions spéciales ou pour ajouter une touche féminine à un look. Doublé, bretelles ajustables.',
        'price' => 39.99,
        'old_price' => null,
        'stock' => 18,
        'sizes' => ['XS', 'S', 'M', 'L'],
        'colors' => ['Blanc', 'Noir', 'Bordeaux']
    ],
    [
        'name' => 'Combinaison Pantalon',
        'sku' => 'FW-CP-001',
        'short_description' => 'Combinaison pantalon élégante et pratique',
        'description' => 'Combinaison pantalon élégante et moderne. Pratique et stylée pour toutes les occasions. Ceinture à nouer, jambes évasées, décolleté en V.',
        'price' => 79.99,
        'old_price' => 94.99,
        'discount_percentage' => 15,
        'stock' => 12,
        'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
        'colors' => ['Noir', 'Bleu marine', 'Vert']
    ],
    [
        'name' => 'Cardigan Long',
        'sku' => 'FW-CL-001',
        'short_description' => 'Cardigan long confortable pour la mi-saison',
        'description' => 'Cardigan long et confortable, parfait pour se réchauffer avec style. Idéal pour la mi-saison. Poches plaquées, maille douce, coupe ample.',
        'price' => 59.99,
        'old_price' => null,
        'stock' => 22,
        'sizes' => ['S', 'M', 'L', 'XL'],
        'colors' => ['Gris chiné', 'Écru', 'Violet']
    ],
    [
        'name' => 'Débardeur Côtelé',
        'sku' => 'FW-DC-001',
        'short_description' => 'Débardeur côtelé, basique indispensable',
        'description' => 'Débardeur en coton côtelé, basique indispensable du dressing. Confortable et durable. Encolure ronde, tissu stretch, coutures plates.',
        'price' => 14.99,
        'old_price' => 19.99,
        'discount_percentage' => 25,
        'stock' => 40,
        'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
        'colors' => ['Blanc', 'Noir', 'Beige', 'Rouge']
    ],
    [
        'name' => 'Pantalon Cigarette',
        'sku' => 'FW-PC-002',
        'short_description' => 'Pantalon cigarette ajusté et élégant',
        'description' => 'Pantalon cigarette ajusté et élégant. Coupe flatteuse qui affine la silhouette. Taille mi-haute, fermeture éclair invisible, tissu stretch confortable.',
        'price' => 49.99,
        'old_price' => null,
        'stock' => 24,
        'sizes' => ['34', '36', '38', '40', '42', '44'],
        'colors' => ['Noir', 'Marine', 'Bordeaux']
    ],
    [
        'name' => 'Sweatshirt À Capuche',
        'sku' => 'FW-SC-001',
        'short_description' => 'Sweatshirt à capuche confortable pour le sport',
        'description' => 'Sweatshirt à capuche confortable et décontracté. Parfait pour le sport ou la détente. Poche kangourou, cordon de serrage, intérieur brossé doux.',
        'price' => 44.99,
        'old_price' => 59.99,
        'discount_percentage' => 25,
        'stock' => 35,
        'sizes' => ['S', 'M', 'L', 'XL'],
        'colors' => ['Gris', 'Rose', 'Bleu']
    ],
    [
        'name' => 'Blouse Imprimée',
        'sku' => 'FW-BI-001',
        'short_description' => 'Blouse imprimée au style bohème chic',
        'description' => 'Blouse légère à imprimé floral ou géométrique. Style bohème chic, décontractée mais élégante. Col V, manches bouffantes, poignets élastiques.',
        'price' => 44.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['XS', 'S', 'M', 'L', 'XL'],
        'colors' => ['Multicolore']
    ],
];

// Produits pour Hommes
$produitsMen = [
    [
        'name' => 'Chemise Oxford Classique',
        'sku' => 'MN-CO-001',
        'short_description' => 'Chemise Oxford classique en coton pour un style élégant',
        'description' => 'Chemise Oxford en coton de qualité supérieure, coupe classique. Indispensable pour un look professionnel soigné. Col rigide, poignets ajustables, tissu résistant et facile à entretenir.',
        'price' => 49.99,
        'old_price' => 64.99,
        'discount_percentage' => 23,
        'stock' => 30,
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Blanc', 'Bleu clair', 'Bleu marine'],
        'featured' => true
    ],
    [
        'name' => 'Jean Slim Coupe Droite',
        'sku' => 'MN-JS-001',
        'short_description' => 'Jean slim à coupe droite, style urbain',
        'description' => 'Jean slim à coupe droite, moderne et confortable. Denim stretch premium pour un confort optimal. Poches fonctionnelles, surpiqûres contrastées, bouton et rivets métalliques.',
        'price' => 59.99,
        'old_price' => null,
        'stock' => 25,
        'sizes' => ['28', '30', '32', '34', '36', '38'],
        'colors' => ['Bleu indigo', 'Noir', 'Gris']
    ],
    [
        'name' => 'Polo Manches Courtes',
        'sku' => 'MN-PM-001',
        'short_description' => 'Polo manches courtes en piqué de coton',
        'description' => 'Polo manches courtes en piqué de coton, style intemporel et décontracté. Parfait pour les journées chaudes ou le golf. Col renforcé, finitions soignées, ouverture à deux boutons.',
        'price' => 34.99,
        'old_price' => 44.99,
        'discount_percentage' => 22,
        'stock' => 40,
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Blanc', 'Noir', 'Bleu marine', 'Rouge']
    ],
    [
        'name' => 'Veste Blazer Casual',
        'sku' => 'MN-VB-001',
        'short_description' => 'Veste blazer casual pour un style décontracté-chic',
        'description' => 'Veste blazer casual au style décontracté-chic. Polyvalente, elle s\'associe à un jean ou un chino. Deux boutons, doublure intérieure, trois poches extérieures et deux intérieures.',
        'price' => 89.99,
        'old_price' => null,
        'stock' => 15,
        'sizes' => ['48', '50', '52', '54', '56'],
        'colors' => ['Bleu marine', 'Noir', 'Gris']
    ],
    [
        'name' => 'Pantalon Chino',
        'sku' => 'MN-PC-001',
        'short_description' => 'Pantalon chino stretch pour plus de confort',
        'description' => 'Pantalon chino en coton stretch pour un confort optimal. Coupe droite moderne adaptée à toutes les morphologies. Fermeture à glissière, passants pour ceinture, deux poches avant et deux arrière.',
        'price' => 44.99,
        'old_price' => 54.99,
        'discount_percentage' => 18,
        'stock' => 28,
        'sizes' => ['38', '40', '42', '44', '46', '48'],
        'colors' => ['Beige', 'Bleu marine', 'Kaki', 'Noir']
    ],
    [
        'name' => 'Pull Col Roulé',
        'sku' => 'MN-PR-001',
        'short_description' => 'Pull col roulé en laine mérinos fine',
        'description' => 'Pull col roulé en laine mérinos fine. Chaud et élégant, idéal pour l\'hiver. Tissu doux et confortable, coupe ajustée, finitions soignées aux poignets et à la taille.',
        'price' => 69.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['S', 'M', 'L', 'XL'],
        'colors' => ['Noir', 'Gris', 'Bordeaux']
    ],
    [
        'name' => 'Sweat Zippé à Capuche',
        'sku' => 'MN-SZ-001',
        'short_description' => 'Sweat zippé à capuche, style sportswear',
        'description' => 'Sweat zippé à capuche au style sportswear urbain. Confortable et pratique pour le quotidien ou le sport. Fermeture éclair complète, poches kangourou, cordon de serrage, bords-côtes aux poignets et à la taille.',
        'price' => 49.99,
        'old_price' => 69.99,
        'discount_percentage' => 28,
        'stock' => 35,
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Gris chiné', 'Noir', 'Bleu marine', 'Vert kaki']
    ],
    [
        'name' => 'T-shirt Col Rond',
        'sku' => 'MN-TR-001',
        'short_description' => 'T-shirt col rond en coton premium, basique essentiel',
        'description' => 'T-shirt col rond en coton premium de haute qualité. Basique essentiel du dressing masculin. Coupe régulière, confortable et durable, coutures renforcées, finition soignée.',
        'price' => 19.99,
        'old_price' => null,
        'stock' => 50,
        'sizes' => ['XS', 'S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Blanc', 'Noir', 'Gris', 'Bleu marine', 'Bordeaux']
    ],
    [
        'name' => 'Short Bermuda',
        'sku' => 'MN-SB-001',
        'short_description' => 'Short bermuda en coton léger pour l\'été',
        'description' => 'Short bermuda en coton léger pour l\'été. Coupe droite au genou, confortable pour les journées chaudes. Deux poches avant, deux poches arrière, passants pour ceinture, fermeture à bouton et glissière.',
        'price' => 34.99,
        'old_price' => 44.99,
        'discount_percentage' => 22,
        'stock' => 30,
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Beige', 'Bleu marine', 'Kaki']
    ],
    [
        'name' => 'Veste en Cuir',
        'sku' => 'MN-VC-001',
        'short_description' => 'Veste en cuir véritable, style intemporel',
        'description' => 'Veste en cuir véritable au style intemporel. Look à la fois rock et élégant, parfaite pour la mi-saison. Fermeture à glissière asymétrique, poches zippées, doublure intérieure, col rabattable.',
        'price' => 199.99,
        'old_price' => null,
        'stock' => 10,
        'sizes' => ['S', 'M', 'L', 'XL'],
        'colors' => ['Noir', 'Marron']
    ],
    [
        'name' => 'Gilet Costume',
        'sku' => 'MN-GC-001',
        'short_description' => 'Gilet de costume élégant pour tenue habillée',
        'description' => 'Gilet de costume élégant pour une tenue habillée ou professionnelle. Coupe ajustée, touche de sophistication pour tout ensemble. Quatre boutons, deux poches, dos ajustable, doublure satinée.',
        'price' => 59.99,
        'old_price' => 79.99,
        'discount_percentage' => 25,
        'stock' => 15,
        'sizes' => ['48', '50', '52', '54', '56'],
        'colors' => ['Noir', 'Gris', 'Bleu marine']
    ],
    [
        'name' => 'Chemise Flanelle à Carreaux',
        'sku' => 'MN-CF-001',
        'short_description' => 'Chemise en flanelle à carreaux pour un style décontracté',
        'description' => 'Chemise en flanelle à carreaux au style décontracté et chaleureux. Parfaite pour l\'automne et l\'hiver. Tissu doux et confortable, coupe regular, poche poitrine, boutons classiques.',
        'price' => 39.99,
        'old_price' => null,
        'stock' => 25,
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Rouge/Noir', 'Bleu/Noir', 'Vert/Noir']
    ],
    [
        'name' => 'Manteau Laine',
        'sku' => 'MN-ML-001',
        'short_description' => 'Manteau en laine mélangée pour l\'hiver',
        'description' => 'Manteau en laine mélangée pour l\'hiver. Élégant et chaud, il est parfait pour la saison froide. Coupe droite mi-longue, double boutonnage, deux poches latérales, col large.',
        'price' => 149.99,
        'old_price' => 179.99,
        'discount_percentage' => 16,
        'stock' => 12,
        'sizes' => ['S', 'M', 'L', 'XL'],
        'colors' => ['Gris anthracite', 'Bleu marine', 'Noir']
    ],
    [
        'name' => 'Cravate Soie',
        'sku' => 'MN-CS-001',
        'short_description' => 'Cravate en soie avec motifs géométriques',
        'description' => 'Cravate en soie avec motifs géométriques élégants. Accessoire indispensable pour une tenue formelle. Tissu soyeux de qualité, finitions main, largeur classique de 7 cm.',
        'price' => 29.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['Unique'],
        'colors' => ['Bleu', 'Rouge', 'Gris', 'Noir']
    ],
    [
        'name' => 'Pull Col V',
        'sku' => 'MN-PV-001',
        'short_description' => 'Pull col V en coton fin, classique et léger',
        'description' => 'Pull col V en coton fin, classique et léger. Idéal pour la mi-saison ou en superposition. Maille fine, confortable et respirante, finitions côtelées aux poignets et à la taille.',
        'price' => 39.99,
        'old_price' => 49.99,
        'discount_percentage' => 20,
        'stock' => 30,
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Bleu marine', 'Gris', 'Noir', 'Bordeaux']
    ],
    [
        'name' => 'Cardigan Boutonné',
        'sku' => 'MN-CB-001',
        'short_description' => 'Cardigan boutonné en maille côtelée, style casual chic',
        'description' => 'Cardigan boutonné en maille côtelée au style casual chic. Parfait pour la mi-saison ou comme couche supplémentaire. Col en V, cinq boutons, deux poches plaquées, bords côtelés.',
        'price' => 59.99,
        'old_price' => null,
        'stock' => 18,
        'sizes' => ['S', 'M', 'L', 'XL'],
        'colors' => ['Gris', 'Bleu marine', 'Marron']
    ],
    [
        'name' => 'Pantalon Jogging',
        'sku' => 'MN-PJ-001',
        'short_description' => 'Pantalon de jogging en molleton doux, confortable',
        'description' => 'Pantalon de jogging en molleton doux et confortable. Idéal pour le sport ou la détente à la maison. Taille élastique avec cordon de serrage, deux poches latérales, chevilles resserrées.',
        'price' => 34.99,
        'old_price' => 44.99,
        'discount_percentage' => 22,
        'stock' => 35,
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Gris chiné', 'Noir', 'Bleu marine']
    ],
    [
        'name' => 'Veste Doudoune Légère',
        'sku' => 'MN-VD-001',
        'short_description' => 'Veste doudoune légère, compressible et chaude',
        'description' => 'Veste doudoune légère, compressible et chaude. Parfaite pour la mi-saison ou comme couche intermédiaire en hiver. Garnissage synthétique, col montant, fermeture éclair, deux poches zippées.',
        'price' => 79.99,
        'old_price' => null,
        'stock' => 22,
        'sizes' => ['S', 'M', 'L', 'XL', 'XXL'],
        'colors' => ['Noir', 'Bleu marine', 'Rouge', 'Vert kaki']
    ],
    [
        'name' => 'Chemise Chambray',
        'sku' => 'MN-CC-001',
        'short_description' => 'Chemise en chambray, look casual et intemporel',
        'description' => 'Chemise en chambray au look casual et intemporel. S\'adapte à toutes les occasions décontractées. Tissu léger similaire au denim, poche poitrine, boutons nacrés, col classique.',
        'price' => 44.99,
        'old_price' => 54.99,
        'discount_percentage' => 18,
        'stock' => 25,
        'sizes' => ['S', 'M', 'L', 'XL'],
        'colors' => ['Bleu clair', 'Bleu foncé']
    ],
    [
        'name' => 'Combinaison de Ski',
        'sku' => 'MN-CS-002',
        'short_description' => 'Combinaison de ski imperméable et respirante',
        'description' => 'Combinaison de ski imperméable et respirante. Conçue pour les amateurs de sports d\'hiver exigeants. Membrane technique, isolation thermique, capuche ajustable, multiples poches, guêtres intégrées.',
        'price' => 199.99,
        'old_price' => 249.99,
        'discount_percentage' => 20,
        'stock' => 8,
        'sizes' => ['S', 'M', 'L', 'XL'],
        'colors' => ['Noir', 'Bleu', 'Rouge']
    ]
];

// Produits pour Enfants
$produitsKids = [
    [
        'name' => 'Robe Princesse Enfant',
        'sku' => 'KD-RP-001',
        'short_description' => 'Robe de princesse pour petites filles, style féerique',
        'description' => 'Robe de princesse pour petites filles au style féerique. Parfaite pour les fêtes ou le déguisement. Tulle pailleté, détails brillants, jupe volume, fermeture à l\'arrière facile à utiliser.',
        'price' => 29.99,
        'old_price' => 39.99,
        'discount_percentage' => 25,
        'stock' => 15,
        'sizes' => ['2 ans', '3 ans', '4 ans', '5 ans', '6 ans'],
        'colors' => ['Rose', 'Bleu', 'Violet'],
        'featured' => true
    ],
    [
        'name' => 'Ensemble Sport Garçon',
        'sku' => 'KD-ES-001',
        'short_description' => 'Ensemble sportif pour garçon, confortable et résistant',
        'description' => 'Ensemble sportif pour garçon, confortable et résistant. Idéal pour l\'école ou les activités extérieures. Sweat à capuche et pantalon assorti, tissu respirant, poches pratiques, élastiques aux chevilles et poignets.',
        'price' => 34.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Bleu/Noir', 'Rouge/Noir', 'Gris/Noir']
    ],
    [
        'name' => 'T-shirt Imprimé Enfant',
        'sku' => 'KD-TI-001',
        'short_description' => 'T-shirt avec impression ludique pour enfant',
        'description' => 'T-shirt avec impression ludique pour enfant. Motifs amusants et colorés qui plairont aux petits. Coton doux et confortable, col rond, manches courtes, lavable en machine à 30°C.',
        'price' => 14.99,
        'old_price' => 19.99,
        'discount_percentage' => 25,
        'stock' => 30,
        'sizes' => ['2 ans', '4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Blanc', 'Bleu', 'Rose', 'Jaune']
    ],
    [
        'name' => 'Salopette Jean Enfant',
        'sku' => 'KD-SJ-001',
        'short_description' => 'Salopette en jean pour enfant, style décontracté',
        'description' => 'Salopette en jean pour enfant au style décontracté et intemporel. Pratique et confortable pour jouer. Denim résistant, bretelles ajustables, poches multiples, boutons pressions latéraux pour faciliter l\'habillage.',
        'price' => 29.99,
        'old_price' => null,
        'stock' => 18,
        'sizes' => ['2 ans', '3 ans', '4 ans', '5 ans', '6 ans', '8 ans'],
        'colors' => ['Bleu clair', 'Bleu foncé']
    ],
    [
        'name' => 'Pull Cartoon Enfant',
        'sku' => 'KD-PC-001',
        'short_description' => 'Pull avec personnage de dessin animé pour enfant',
        'description' => 'Pull avec personnage de dessin animé pour enfant. Amusant et chaleureux pour l\'hiver. Maille douce, col rond, broderies et appliques colorées, intérieur gratté pour plus de chaleur.',
        'price' => 24.99,
        'old_price' => 34.99,
        'discount_percentage' => 28,
        'stock' => 15,
        'sizes' => ['3 ans', '4 ans', '6 ans', '8 ans', '10 ans'],
        'colors' => ['Rouge', 'Bleu', 'Vert']
    ],
    [
        'name' => 'Veste Imperméable Enfant',
        'sku' => 'KD-VI-001',
        'short_description' => 'Veste imperméable pour enfant, protection contre la pluie',
        'description' => 'Veste imperméable pour enfant, protection efficace contre la pluie. Essentielle pour les jours humides. Membrane étanche, capuche ajustable, fermeture éclair sous rabat, poches zippées, bandes réfléchissantes.',
        'price' => 39.99,
        'old_price' => null,
        'stock' => 22,
        'sizes' => ['4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Jaune', 'Bleu marine', 'Rouge', 'Vert']
    ],
    [
        'name' => 'Pyjama Doux Enfant',
        'sku' => 'KD-PD-001',
        'short_description' => 'Pyjama doux et confortable pour enfant',
        'description' => 'Pyjama doux et confortable pour enfant. Parfait pour des nuits paisibles. Coton bio doux pour la peau, élastiques confortables, imprimés ludiques, facile à enfiler et à retirer.',
        'price' => 19.99,
        'old_price' => 26.99,
        'discount_percentage' => 25,
        'stock' => 25,
        'sizes' => ['2 ans', '4 ans', '6 ans', '8 ans', '10 ans'],
        'colors' => ['Bleu étoiles', 'Rose licorne', 'Vert dinosaure']
    ],
    [
        'name' => 'Jupe Plissée Fille',
        'sku' => 'KD-JP-001',
        'short_description' => 'Jupe plissée pour fille, style écolière',
        'description' => 'Jupe plissée pour fille au style écolière classique et élégant. Parfaite pour les occasions spéciales ou l\'école. Tissu résistant, taille élastique confortable, plis permanents, shorts intégrés.',
        'price' => 24.99,
        'old_price' => null,
        'stock' => 18,
        'sizes' => ['4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Bleu marine', 'Gris', 'Rouge']
    ],
    [
        'name' => 'Short Sport Enfant',
        'sku' => 'KD-SS-001',
        'short_description' => 'Short de sport pour enfant, léger et respirant',
        'description' => 'Short de sport pour enfant, léger et respirant. Idéal pour l\'éducation physique ou les activités extérieures. Tissu technique qui évacue l\'humidité, taille élastique avec cordon, poches latérales.',
        'price' => 14.99,
        'old_price' => 19.99,
        'discount_percentage' => 25,
        'stock' => 30,
        'sizes' => ['4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Noir', 'Bleu', 'Rouge']
    ],
    [
        'name' => 'Robe à Pois Fille',
        'sku' => 'KD-RP-002',
        'short_description' => 'Robe à pois pour fille, style rétro mignon',
        'description' => 'Robe à pois pour fille au style rétro mignon. Parfaite pour les occasions spéciales ou les photos. Coton doux, coupe évasée, manches courtes, ceinture à nouer, fermeture facile dans le dos.',
        'price' => 29.99,
        'old_price' => null,
        'stock' => 15,
        'sizes' => ['3 ans', '4 ans', '5 ans', '6 ans', '8 ans'],
        'colors' => ['Rouge à pois blancs', 'Bleu à pois blancs', 'Noir à pois blancs']
    ],
    [
        'name' => 'Pantalon Cargo Garçon',
        'sku' => 'KD-PC-002',
        'short_description' => 'Pantalon cargo pour garçon, pratique et résistant',
        'description' => 'Pantalon cargo pour garçon, pratique et résistant. Parfait pour les aventures en plein air. Tissu renforcé aux genoux, multiples poches, taille ajustable, jambes transformables en bermuda avec zip.',
        'price' => 32.99,
        'old_price' => 42.99,
        'discount_percentage' => 23,
        'stock' => 20,
        'sizes' => ['4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Beige', 'Kaki', 'Gris']
    ],
    [
        'name' => 'Pull Capuche Enfant',
        'sku' => 'KD-PC-003',
        'short_description' => 'Pull à capuche pour enfant, chaud et confortable',
        'description' => 'Pull à capuche pour enfant, chaud et confortable. Idéal pour les journées fraîches. Molleton doux à l\'intérieur, grande poche kangourou, capuche doublée, finitions côtelées aux poignets et à la taille.',
        'price' => 24.99,
        'old_price' => null,
        'stock' => 22,
        'sizes' => ['3 ans', '4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Bleu', 'Gris', 'Rose']
    ],
    [
        'name' => 'Combinaison Ski Enfant',
        'sku' => 'KD-CS-001',
        'short_description' => 'Combinaison de ski pour enfant, chaude et imperméable',
        'description' => 'Combinaison de ski pour enfant, chaude et imperméable. Protection optimale pour les sports d\'hiver. Membrane imperméable et respirante, garnissage isolant, capuche détachable, poignets élastiques, renforts aux genoux et au siège.',
        'price' => 79.99,
        'old_price' => 99.99,
        'discount_percentage' => 20,
        'stock' => 12,
        'sizes' => ['4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Rouge', 'Bleu', 'Noir']
    ],
    [
        'name' => 'Chemise Garçon',
        'sku' => 'KD-CG-001',
        'short_description' => 'Chemise pour garçon, élégante pour les occasions spéciales',
        'description' => 'Chemise pour garçon, élégante pour les occasions spéciales. Style classique qui convient aux cérémonies. Coton facile à entretenir, col standard, manches longues avec poignets boutonnés, coupe confortable.',
        'price' => 22.99,
        'old_price' => null,
        'stock' => 18,
        'sizes' => ['3 ans', '4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Blanc', 'Bleu clair', 'Bleu marine']
    ],
    [
        'name' => 'Legging Enfant',
        'sku' => 'KD-LE-001',
        'short_description' => 'Legging pour enfant, confortable et extensible',
        'description' => 'Legging pour enfant, confortable et extensible. Basique essentiel pour le quotidien. Coton stretch, taille élastique, coupe ajustée mais non comprimante, lavable en machine.',
        'price' => 12.99,
        'old_price' => 16.99,
        'discount_percentage' => 23,
        'stock' => 35,
        'sizes' => ['2 ans', '4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Noir', 'Gris', 'Rose', 'Bleu marine']
    ],
    [
        'name' => 'Veste Jean Enfant',
        'sku' => 'KD-VJ-001',
        'short_description' => 'Veste en jean pour enfant, style décontracté',
        'description' => 'Veste en jean pour enfant au style décontracté et intemporel. Parfaite comme couche intermédiaire en mi-saison. Denim durable, boutons pressions pour faciliter l\'habillage, poches fonctionnelles, col rabattable.',
        'price' => 29.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['3 ans', '4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Bleu clair', 'Bleu foncé']
    ],
    [
        'name' => 'Robe Été Fille',
        'sku' => 'KD-RE-001',
        'short_description' => 'Robe d\'été légère pour fille, style bohème',
        'description' => 'Robe d\'été légère pour fille au style bohème. Fraîche et confortable pour les journées chaudes. Coton aéré, bretelles ajustables, imprimé floral, volants décoratifs, taille élastique.',
        'price' => 24.99,
        'old_price' => 34.99,
        'discount_percentage' => 28,
        'stock' => 18,
        'sizes' => ['3 ans', '4 ans', '6 ans', '8 ans', '10 ans'],
        'colors' => ['Floral bleu', 'Floral rose', 'Floral jaune']
    ],
    [
        'name' => 'Pantalon Jean Enfant',
        'sku' => 'KD-PJ-001',
        'short_description' => 'Pantalon en jean pour enfant, durable et confortable',
        'description' => 'Pantalon en jean pour enfant, durable et confortable. Basique indispensable pour toutes les saisons. Denim stretch avec taille ajustable, poches fonctionnelles, genoux renforcés, coutures doubles pour plus de solidité.',
        'price' => 27.99,
        'old_price' => null,
        'stock' => 25,
        'sizes' => ['2 ans', '3 ans', '4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Bleu clair', 'Bleu foncé', 'Noir']
    ],
    [
        'name' => 'Bonnet Enfant',
        'sku' => 'KD-BE-001',
        'short_description' => 'Bonnet tricoté pour enfant, chaud et mignon',
        'description' => 'Bonnet tricoté pour enfant, chaud et mignon. Protection essentielle contre le froid en hiver. Maille douce et épaisse, doublure polaire à l\'intérieur, motifs ludiques, pompon décoratif au sommet.',
        'price' => 14.99,
        'old_price' => 19.99,
        'discount_percentage' => 25,
        'stock' => 30,
        'sizes' => ['Unique (2-6 ans)', 'Unique (6-12 ans)'],
        'colors' => ['Rouge', 'Bleu', 'Rose', 'Gris']
    ],
    [
        'name' => 'Maillot de Bain Enfant',
        'sku' => 'KD-MB-001',
        'short_description' => 'Maillot de bain pour enfant, protection UV',
        'description' => 'Maillot de bain pour enfant avec protection UV intégrée. Sécurité et style pour la plage ou la piscine. Tissu à séchage rapide, élastique confortable, motifs amusants, résistant au chlore et au sel.',
        'price' => 19.99,
        'old_price' => null,
        'stock' => 22,
        'sizes' => ['2 ans', '4 ans', '6 ans', '8 ans', '10 ans', '12 ans'],
        'colors' => ['Bleu motif marin', 'Rose flamant', 'Vert dinosaure']
    ]
];

// Produits pour Accessoires
$produitsAccessories = [
    [
        'name' => 'Sac à Main Tendance',
        'sku' => 'AC-SM-001',
        'short_description' => 'Sac à main tendance en simili cuir texturé',
        'description' => 'Sac à main tendance en simili cuir texturé de haute qualité. Accessoire élégant pour compléter vos tenues. Finitions soignées, structure rigide, doublure intérieure, compartiments multiples, bandoulière amovible.',
        'price' => 59.99,
        'old_price' => 79.99,
        'discount_percentage' => 25,
        'stock' => 15,
        'sizes' => ['Unique'],
        'colors' => ['Noir', 'Beige', 'Rouge'],
        'featured' => true
    ],
    [
        'name' => 'Chapeau Fedora',
        'sku' => 'AC-CF-001',
        'short_description' => 'Chapeau fedora en feutre, accessoire intemporel',
        'description' => 'Chapeau fedora en feutre, accessoire intemporel et élégant. Touche sophistiquée pour vos tenues d\'automne et d\'hiver. Ruban contrastant, bords moyens, forme classique, doublure intérieure.',
        'price' => 34.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['S', 'M', 'L'],
        'colors' => ['Noir', 'Camel', 'Gris']
    ],
    [
        'name' => 'Ceinture Cuir',
        'sku' => 'AC-CC-001',
        'short_description' => 'Ceinture en cuir véritable, finition élégante',
        'description' => 'Ceinture en cuir véritable avec finition élégante. Accessoire essentiel pour un look soigné. Cuir de qualité, boucle métallique robuste, largeur standard, bordures cousues, trous multiples pour ajustement parfait.',
        'price' => 29.99,
        'old_price' => 39.99,
        'discount_percentage' => 25,
        'stock' => 25,
        'sizes' => ['85 cm', '90 cm', '95 cm', '100 cm', '105 cm'],
        'colors' => ['Noir', 'Marron', 'Cognac']
    ],
    [
        'name' => 'Écharpe Laine',
        'sku' => 'AC-EL-001',
        'short_description' => 'Écharpe en laine douce, chaleur et confort',
        'description' => 'Écharpe en laine douce offrant chaleur et confort. Accessoire d\'hiver indispensable pour se protéger du froid. Maille épaisse, franges aux extrémités, dimensions généreuses, toucher doux et non irritant.',
        'price' => 24.99,
        'old_price' => null,
        'stock' => 30,
        'sizes' => ['Unique'],
        'colors' => ['Gris', 'Bordeaux', 'Bleu marine', 'Beige']
    ],
    [
        'name' => 'Lunettes Soleil Aviateur',
        'sku' => 'AC-LS-001',
        'short_description' => 'Lunettes de soleil style aviateur, protection UV',
        'description' => 'Lunettes de soleil style aviateur avec protection UV complète. Look iconique et protection optimale contre les rayons solaires. Monture métallique légère, verres polarisés, branches confortables, étui rigide inclus.',
        'price' => 39.99,
        'old_price' => 54.99,
        'discount_percentage' => 27,
        'stock' => 18,
        'sizes' => ['Unique'],
        'colors' => ['Noir/Gris', 'Or/Marron', 'Argent/Bleu']
    ],
    [
        'name' => 'Gants Cuir Tactiles',
        'sku' => 'AC-GC-001',
        'short_description' => 'Gants en cuir compatibles écrans tactiles',
        'description' => 'Gants en cuir compatibles avec les écrans tactiles. Élégance et praticité pour l\'hiver. Cuir souple, doublure chaude, technologie tactile aux bouts des doigts, fermeture ajustable au poignet.',
        'price' => 32.99,
        'old_price' => null,
        'stock' => 15,
        'sizes' => ['S', 'M', 'L', 'XL'],
        'colors' => ['Noir', 'Marron', 'Bordeaux']
    ],
    [
        'name' => 'Sac À Dos Urbain',
        'sku' => 'AC-SD-001',
        'short_description' => 'Sac à dos urbain polyvalent avec compartiment ordinateur',
        'description' => 'Sac à dos urbain polyvalent avec compartiment pour ordinateur portable. Pratique pour le quotidien en ville. Tissu résistant à l\'eau, rembourrage dorsal, bretelles ajustables ergonomiques, compartiments multiples, port USB intégré.',
        'price' => 49.99,
        'old_price' => 69.99,
        'discount_percentage' => 28,
        'stock' => 22,
        'sizes' => ['Unique'],
        'colors' => ['Noir', 'Gris', 'Bleu marine']
    ],
    [
        'name' => 'Montre Minimaliste',
        'sku' => 'AC-MM-001',
        'short_description' => 'Montre au design minimaliste, élégance discrète',
        'description' => 'Montre au design minimaliste pour une élégance discrète au quotidien. Accessoire intemporel qui s\'accorde avec toutes les tenues. Boîtier fin, cadran épuré, mouvement à quartz, bracelet en cuir véritable ou maille milanaise, étanchéité 3 ATM.',
        'price' => 79.99,
        'old_price' => null,
        'stock' => 12,
        'sizes' => ['Unique'],
        'colors' => ['Argent/Noir', 'Or rose/Gris', 'Or/Marron']
    ],
    [
        'name' => 'Set de Bracelets Bohèmes',
        'sku' => 'AC-SB-001',
        'short_description' => 'Set de bracelets style bohème, mix and match',
        'description' => 'Set de bracelets style bohème à mixer et assortir selon vos envies. Accessoires tendance pour un look festival ou casual chic. Matériaux variés (perles, fils, métal), élastiques ou à fermoir, couleurs coordonnées, pochette de rangement incluse.',
        'price' => 19.99,
        'old_price' => 29.99,
        'discount_percentage' => 33,
        'stock' => 25,
        'sizes' => ['Unique'],
        'colors' => ['Multicolore']
    ],
    [
        'name' => 'Portefeuille Compact',
        'sku' => 'AC-PC-001',
        'short_description' => 'Portefeuille compact en cuir, design pratique',
        'description' => 'Portefeuille compact en cuir au design pratique et fonctionnel. Accessoire quotidien alliant élégance et utilité. Cuir de qualité, multiples compartiments pour cartes, poche à monnaie zippée, rangement pour billets, format poche.',
        'price' => 34.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['Unique'],
        'colors' => ['Noir', 'Marron', 'Bleu marine']
    ],
    [
        'name' => 'Bonnet Côtelé',
        'sku' => 'AC-BC-001',
        'short_description' => 'Bonnet côtelé en maille épaisse, chaleur garantie',
        'description' => 'Bonnet côtelé en maille épaisse pour une chaleur garantie en hiver. Accessoire essentiel pour affronter le froid avec style. Revers ajustable, tricot double épaisseur, stretch confortable, lavable en machine.',
        'price' => 16.99,
        'old_price' => 22.99,
        'discount_percentage' => 26,
        'stock' => 35,
        'sizes' => ['Unique'],
        'colors' => ['Noir', 'Gris', 'Bordeaux', 'Bleu marine', 'Vert forêt']
    ],
    [
        'name' => 'Foulard Soie',
        'sku' => 'AC-FS-001',
        'short_description' => 'Foulard en soie avec motifs géométriques élégants',
        'description' => 'Foulard en soie avec motifs géométriques élégants. Accessoire luxueux pour sublimer une tenue simple. Soie de qualité, finitions roulottées à la main, dimensions versatiles, toucher soyeux, couleurs résistantes au lavage délicat.',
        'price' => 29.99,
        'old_price' => null,
        'stock' => 15,
        'sizes' => ['Unique'],
        'colors' => ['Bleu/Doré', 'Rouge/Noir', 'Vert/Beige']
    ],
    [
        'name' => 'Casquette Baseball',
        'sku' => 'AC-CB-001',
        'short_description' => 'Casquette de baseball ajustable, style urbain',
        'description' => 'Casquette de baseball ajustable au style urbain décontracté. Accessoire incontournable pour les looks casual. Coton twill résistant, visière incurvée, œillets d\'aération, fermeture arrière ajustable, logo brodé.',
        'price' => 19.99,
        'old_price' => 24.99,
        'discount_percentage' => 20,
        'stock' => 30,
        'sizes' => ['Unique'],
        'colors' => ['Noir', 'Bleu marine', 'Gris', 'Rouge']
    ],
    [
        'name' => 'Boucles d\'Oreilles Géométriques',
        'sku' => 'AC-BO-001',
        'short_description' => 'Boucles d\'oreilles aux formes géométriques modernes',
        'description' => 'Boucles d\'oreilles aux formes géométriques modernes. Bijoux tendance pour un look contemporain. Métal hypoallergénique, design léger et confortable, fermoir sécurisé, présentation en coffret cadeau.',
        'price' => 22.99,
        'old_price' => null,
        'stock' => 18,
        'sizes' => ['Unique'],
        'colors' => ['Or', 'Argent', 'Or rose']
    ],
    [
        'name' => 'Pochette Soirée',
        'sku' => 'AC-PS-001',
        'short_description' => 'Pochette de soirée élégante avec chaîne métallique',
        'description' => 'Pochette de soirée élégante avec chaîne métallique. Accessoire raffiné pour les événements spéciaux. Tissu satiné ou pailleté, fermoir décoratif, chaîne amovible, doublure intérieure, format compact mais fonctionnel.',
        'price' => 39.99,
        'old_price' => 54.99,
        'discount_percentage' => 27,
        'stock' => 12,
        'sizes' => ['Unique'],
        'colors' => ['Noir', 'Argent', 'Doré', 'Bordeaux']
    ],
    [
        'name' => 'Cravate Soie Rayée',
        'sku' => 'AC-CR-001',
        'short_description' => 'Cravate en soie avec motif rayé classique',
        'description' => 'Cravate en soie avec motif rayé classique. Accessoire intemporel pour une tenue formelle impeccable. Soie de qualité, doublure intérieure, largeur standard de 7 cm, finitions cousues main, pochette de protection incluse.',
        'price' => 29.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['Unique'],
        'colors' => ['Bleu/Gris', 'Bordeaux/Marine', 'Noir/Gris']
    ],
    [
        'name' => 'Bandeau Cheveux',
        'sku' => 'AC-BC-002',
        'short_description' => 'Bandeau pour cheveux en tissu plissé, style rétro',
        'description' => 'Bandeau pour cheveux en tissu plissé au style rétro. Accessoire capillaire tendance pour sublimer une coiffure. Tissu doux, élastique confortable, nœud décoratif, maintien efficace, lavable en machine.',
        'price' => 12.99,
        'old_price' => 16.99,
        'discount_percentage' => 23,
        'stock' => 25,
        'sizes' => ['Unique'],
        'colors' => ['Noir', 'Rouge', 'Bleu marine', 'Léopard']
    ],
    [
        'name' => 'Parapluie Automatique',
        'sku' => 'AC-PA-001',
        'short_description' => 'Parapluie automatique résistant au vent',
        'description' => 'Parapluie automatique résistant au vent. Accessoire pratique et durable pour les jours pluvieux. Ouverture automatique d\'une seule main, structure renforcée anti-retournement, toile imperméable, manche ergonomique, housse de transport.',
        'price' => 24.99,
        'old_price' => null,
        'stock' => 22,
        'sizes' => ['Unique'],
        'colors' => ['Noir', 'Bleu marine', 'Rouge']
    ],
    [
        'name' => 'Collier Pendentif Minimaliste',
        'sku' => 'AC-CP-001',
        'short_description' => 'Collier avec pendentif minimaliste, élégance quotidienne',
        'description' => 'Collier avec pendentif minimaliste pour une élégance quotidienne discrète. Bijou intemporel et facile à porter. Chaîne fine ajustable, pendentif géométrique simple, métal hypoallergénique, présentation en coffret cadeau.',
        'price' => 19.99,
        'old_price' => 27.99,
        'discount_percentage' => 28,
        'stock' => 18,
        'sizes' => ['Unique'],
        'colors' => ['Or', 'Argent', 'Or rose']
    ],
    [
        'name' => 'Bretelles Élastiques',
        'sku' => 'AC-BE-001',
        'short_description' => 'Bretelles élastiques ajustables, touche vintage',
        'description' => 'Bretelles élastiques ajustables pour une touche vintage ou formelle. Accessoire fonctionnel avec style distinctif. Élastique résistant, clips métalliques ou boutons, largeur classique, forme en Y dans le dos, longueur ajustable.',
        'price' => 22.99,
        'old_price' => null,
        'stock' => 15,
        'sizes' => ['Unique'],
        'colors' => ['Noir', 'Marine', 'Bordeaux', 'Gris']
    ]
];

// Produits pour Beauté
$produitsBeauty = [
    [
        'name' => 'Palette de Fards à Paupières',
        'sku' => 'BY-FP-001',
        'short_description' => 'Palette de fards à paupières aux teintes variées',
        'description' => 'Palette de fards à paupières aux teintes variées et complémentaires. Pour créer des looks jour et soir. Pigments intenses et longue tenue, finis mats et irisés, applicateur double embout inclus, miroir intégré, packaging compact.',
        'price' => 29.99,
        'old_price' => 39.99,
        'discount_percentage' => 25,
        'stock' => 20,
        'sizes' => ['Unique'],
        'colors' => ['Nude', 'Smoky', 'Coloré'],
        'featured' => true
    ],
    [
        'name' => 'Rouge à Lèvres Hydratant',
        'sku' => 'BY-RL-001',
        'short_description' => 'Rouge à lèvres hydratant longue tenue',
        'description' => 'Rouge à lèvres hydratant longue tenue. Couleur intense et confort pour vos lèvres. Formule enrichie en beurre de karité, application facile et précise, fini satiné, packaging élégant avec capuchon magnétique.',
        'price' => 16.99,
        'old_price' => null,
        'stock' => 30,
        'sizes' => ['Unique'],
        'colors' => ['Rouge classique', 'Rose nude', 'Corail', 'Bordeaux']
    ],
    [
        'name' => 'Sérum Hydratant Visage',
        'sku' => 'BY-SH-001',
        'short_description' => 'Sérum hydratant pour tous types de peau',
        'description' => 'Sérum hydratant pour tous types de peau. Soin concentré pour une hydratation intense et durable. Formule à l\'acide hyaluronique, texture légère rapidement absorbée, sans parfum, flacon pompe hygiénique, convient comme base de maquillage.',
        'price' => 24.99,
        'old_price' => 34.99,
        'discount_percentage' => 28,
        'stock' => 25,
        'sizes' => ['30 ml'],
        'colors' => ['Unique']
    ],
    [
        'name' => 'Mascara Volume Extrême',
        'sku' => 'BY-MV-001',
        'short_description' => 'Mascara volume extrême, cils dramatiques',
        'description' => 'Mascara volume extrême pour des cils dramatiques et définis. Regard intense en un seul geste. Formule volumisante non grumeleuse, brosse dense aux poils courts, tenue toute la journée, facile à démaquiller, ne coule pas.',
        'price' => 14.99,
        'old_price' => null,
        'stock' => 35,
        'sizes' => ['12 ml'],
        'colors' => ['Noir intense', 'Brun profond', 'Bleu nuit']
    ],
    [
        'name' => 'Crème Anti-Âge',
        'sku' => 'BY-CA-001',
        'short_description' => 'Crème anti-âge enrichie en peptides',
        'description' => 'Crème anti-âge enrichie en peptides et antioxydants. Combat efficacement les signes visibles du vieillissement. Formule nourrissante, texture riche non grasse, parfum discret, pot en verre avec spatule, utilisation jour et nuit.',
        'price' => 39.99,
        'old_price' => 54.99,
        'discount_percentage' => 27,
        'stock' => 15,
        'sizes' => ['50 ml'],
        'colors' => ['Unique']
    ],
    [
        'name' => 'Pinceau Maquillage Set',
        'sku' => 'BY-PM-001',
        'short_description' => 'Set de pinceaux de maquillage professionnels',
        'description' => 'Set de pinceaux de maquillage professionnels. Outils essentiels pour une application précise et impeccable. Poils synthétiques doux, manches ergonomiques, pochette de rangement incluse, polyvalents pour produits liquides et en poudre.',
        'price' => 29.99,
        'old_price' => null,
        'stock' => 20,
        'sizes' => ['Set de 12 pièces'],
        'colors' => ['Noir/Or', 'Rose gold']
    ],
    [
        'name' => 'Fond de Teint Couvrant',
        'sku' => 'BY-FT-001',
        'short_description' => 'Fond de teint couvrant longue tenue',
        'description' => 'Fond de teint couvrant longue tenue. Base parfaite pour un teint unifié et sans défauts. Formule hydratante non comédogène, fini naturel semi-mat, SPF 20, pompe pratique, large gamme de teintes pour toutes les carnations.',
        'price' => 22.99,
        'old_price' => 32.99,
        'discount_percentage' => 30,
        'stock' => 25,
        'sizes' => ['30 ml'],
        'colors' => ['Porcelaine', 'Beige clair', 'Beige moyen', 'Beige doré', 'Caramel', 'Chocolat']
    ],
    [
        'name' => 'Gel Douche Nourrissant',
        'sku' => 'BY-GD-001',
        'short_description' => 'Gel douche nourrissant aux huiles essentielles',
        'description' => 'Gel douche nourrissant aux huiles essentielles. Nettoie en douceur tout en préservant l\'hydratation naturelle de la peau. Formule sans sulfates, parfums naturels, texture onctueuse, bouteille recyclable, convient aux peaux sensibles.',
        'price' => 9.99,
        'old_price' => null,
        'stock' => 40,
        'sizes' => ['250 ml'],
        'colors' => ['Fleur de coton', 'Monoï', 'Lavande', 'Agrumes']
    ],
    [
        'name' => 'Highlighter Poudre',
        'sku' => 'BY-HP-001',
        'short_description' => 'Highlighter en poudre pour éclat naturel',
        'description' => 'Highlighter en poudre pour un éclat naturel. Illumine subtilement le visage pour un effet bonne mine. Poudre fine et soyeuse, pigments réfléchissants, applicateur inclus, boîtier avec miroir, format compact pour la retouche.',
        'price' => 18.99,
        'old_price' => 24.99,
        'discount_percentage' => 24,
        'stock' => 22,
        'sizes' => ['8 g'],
        'colors' => ['Champagne', 'Or rose', 'Bronze doré']
    ],
    [
        'name' => 'Huile Cheveux Réparatrice',
        'sku' => 'BY-HC-001',
        'short_description' => 'Huile réparatrice pour cheveux abîmés',
        'description' => 'Huile réparatrice pour cheveux abîmés ou secs. Nourrit en profondeur sans alourdir. Formule aux huiles naturelles (argan, jojoba, coco), sans silicones, application sur cheveux humides ou secs, parfum subtil, flacon avec compte-gouttes.',
        'price' => 19.99,
        'old_price' => null,
        'stock' => 18,
        'sizes' => ['100 ml'],
        'colors' => ['Unique']
    ],
    [
        'name' => 'Parfum Élégant',
        'sku' => 'BY-PE-001',
        'short_description' => 'Parfum élégant aux notes florales et boisées',
        'description' => 'Parfum élégant aux notes florales et boisées. Fragrance sophistiquée pour une présence mémorable. Concentration eau de parfum, longue tenue, flacon design, vaporisateur pratique, notes de tête d\'agrumes, cœur floral, fond boisé-ambré.',
        'price' => 49.99,
        'old_price' => 69.99,
        'discount_percentage' => 28,
        'stock' => 15,
        'sizes' => ['50 ml'],
        'colors' => ['Unique']
    ],
    [
        'name' => 'Gommage Visage Doux',
        'sku' => 'BY-GV-001',
        'short_description' => 'Gommage visage doux aux particules fines',
        'description' => 'Gommage visage doux aux particules fines d\'origine naturelle. Exfolie en douceur pour une peau lisse et éclatante. Formule non irritante, enrichie en aloe vera apaisant, texture crémeuse, rinçage facile, adapté à un usage hebdomadaire.',
        'price' => 14.99,
        'old_price' => null,
        'stock' => 25,
        'sizes' => ['75 ml'],
        'colors' => ['Unique']
    ],
    [
        'name' => 'Vernis à Ongles Longue Tenue',
        'sku' => 'BY-VO-001',
        'short_description' => 'Vernis à ongles longue tenue, finition brillante',
        'description' => 'Vernis à ongles longue tenue avec finition brillante. Couleur intense jusqu\'à 7 jours. Formule 10-free (sans produits chimiques nocifs), pinceau large pour application facile, séchage rapide, couleurs tendance, capuchon ergonomique.',
        'price' => 8.99,
        'old_price' => 12.99,
        'discount_percentage' => 30,
        'stock' => 30,
        'sizes' => ['10 ml'],
        'colors' => ['Rouge classique', 'Rose poudré', 'Bordeaux', 'Nude', 'Bleu marine', 'Noir']
    ],
    [
        'name' => 'Shampoing Revitalisant',
        'sku' => 'BY-SR-001',
        'short_description' => 'Shampoing revitalisant pour cheveux ternes',
        'description' => 'Shampoing revitalisant pour cheveux ternes et fatigués. Redonne éclat et vitalité à la chevelure. Formule douce sans sulfates, enrichie en vitamines, parfum frais, mousse onctueuse, bouteille recyclable, convient à un usage fréquent.',
        'price' => 12.99,
        'old_price' => null,
        'stock' => 28,
        'sizes' => ['250 ml'],
        'colors' => ['Unique']
    ],
    [
        'name' => 'Contour des Yeux Anti-Cernes',
        'sku' => 'BY-CA-002',
        'short_description' => 'Soin contour des yeux anti-cernes et anti-poches',
        'description' => 'Soin contour des yeux anti-cernes et anti-poches. Combat efficacement les signes de fatigue. Formule légère à la caféine et peptides, embout applicateur rafraîchissant, texture gel rapidement absorbée, peut s\'utiliser par-dessus le maquillage.',
        'price' => 19.99,
        'old_price' => 29.99,
        'discount_percentage' => 33,
        'stock' => 20,
        'sizes' => ['15 ml'],
        'colors' => ['Unique']
    ],
    [
        'name' => 'Eau Micellaire Démaquillante',
        'sku' => 'BY-EM-001',
        'short_description' => 'Eau micellaire démaquillante pour tous types de peau',
        'description' => 'Eau micellaire démaquillante pour tous types de peau. Nettoie en douceur et élimine le maquillage en un seul geste. Formule sans alcool, apaisante et hydratante, ne nécessite pas de rinçage, bouchon pratique, convient aux yeux sensibles.',
        'price' => 10.99,
        'old_price' => null,
        'stock' => 35,
        'sizes' => ['400 ml'],
        'colors' => ['Unique']
    ],
    [
        'name' => 'Spray Coiffant Volumisant',
        'sku' => 'BY-SC-001',
        'short_description' => 'Spray coiffant volumisant, fixation souple',
        'description' => 'Spray coiffant volumisant à fixation souple. Donne du volume et du maintien sans effet carton. Formule légère non collante, protection contre la chaleur, parfum discret, vaporisateur fin, peut s\'utiliser sur cheveux humides ou secs.',
        'price' => 15.99,
        'old_price' => 20.99,
        'discount_percentage' => 23,
        'stock' => 22,
        'sizes' => ['200 ml'],
        'colors' => ['Unique']
    ],
    [
        'name' => 'Crème Mains Réparatrice',
        'sku' => 'BY-CM-001',
        'short_description' => 'Crème mains réparatrice pour peaux très sèches',
        'description' => 'Crème mains réparatrice pour peaux très sèches et abîmées. Soulage et nourrit intensément les mains sollicitées. Formule concentrée au beurre de karité, texture riche vite absorbée, format pratique à emporter, non grasse, parfum délicat.',
        'price' => 7.99,
        'old_price' => null,
        'stock' => 40,
        'sizes' => ['75 ml'],
        'colors' => ['Unique']
    ],
    [
        'name' => 'Poudre Libre Matifiante',
        'sku' => 'BY-PL-001',
        'short_description' => 'Poudre libre matifiante, fini naturel',
        'description' => 'Poudre libre matifiante pour un fini naturel et longue tenue. Fixe le maquillage et absorbe l\'excès de sébum. Texture ultrafine et légère, houppe incluse, tamis régulateur, boîtier élégant avec miroir, ne dessèche pas la peau.',
        'price' => 19.99,
        'old_price' => 26.99,
        'discount_percentage' => 25,
        'stock' => 18,
        'sizes' => ['20 g'],
        'colors' => ['Translucide', 'Beige clair', 'Beige moyen']
    ],
    [
        'name' => 'Gels Douche Coffret',
        'sku' => 'BY-GC-001',
        'short_description' => 'Coffret de gels douche aux parfums variés',
        'description' => 'Coffret de gels douche aux parfums variés. Idéal pour offrir ou pour varier les plaisirs olfactifs. Formules douces sans sulfates, packaging attrayant, fragrances complémentaires, petit format pratique pour les voyages, boîte cadeau élégante.',
        'price' => 24.99,
        'old_price' => null,
        'stock' => 15,
        'sizes' => ['4 x 100 ml'],
        'colors' => ['Assortiment']
    ]
];

echo "\nCréation des produits en cours...\n";

// Fonction pour traiter un lot de produits
function processProductBatch($entityManager, $products, $category, $batchSize = 5) {
    $count = 0;
    foreach ($products as $data) {
        createProduct($entityManager, $data, $category);
        $count++;
        
        // Flush tous les X produits pour éviter les problèmes de mémoire
        if ($count % $batchSize === 0) {
            $entityManager->flush();
            echo ".";
        }
    }
    // Flush final pour le dernier lot
    $entityManager->flush();
    echo " Terminé!\n";
    return $count;
}

// Catégories
try {
    $totalCount = 0;
    
    // Femmes
    echo "Création des produits pour la catégorie Femmes...";
    $count = processProductBatch($entityManager, $produitsWomen, $categoryMap['Femmes']);
    $totalCount += $count;
    
    // Hommes
    echo "Création des produits pour la catégorie Hommes...";
    $count = processProductBatch($entityManager, $produitsMen, $categoryMap['Hommes']);
    $totalCount += $count;
    
    // Enfants
    echo "Création des produits pour la catégorie Enfants...";
    $count = processProductBatch($entityManager, $produitsKids, $categoryMap['Enfants']);
    $totalCount += $count;
    
    // Accessoires
    echo "Création des produits pour la catégorie Accessoires...";
    $count = processProductBatch($entityManager, $produitsAccessories, $categoryMap['Accessoires']);
    $totalCount += $count;
    
    // Beauté
    echo "Création des produits pour la catégorie Beauté...";
    $count = processProductBatch($entityManager, $produitsBeauty, $categoryMap['Beauté']);
    $totalCount += $count;
    
    echo "\nCréation des produits terminée avec succès!\n";
    echo "Nombre total de produits créés: " . $totalCount . "\n";
    
} catch (Exception $e) {
    echo "Une erreur est survenue lors de la création des produits: " . $e->getMessage() . "\n";
}