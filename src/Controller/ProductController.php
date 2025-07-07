<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Review;
use App\Entity\User;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Repository\SiteConfigRepository;
use App\Repository\WishlistRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/produits', name: 'product_')]
class ProductController extends AbstractController
{
    #[Route('/recherche', name: 'search')]
    public function search(
        Request $request, 
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        SiteConfigRepository $siteConfigRepository
    ): Response
    {
        // Vérification du mode maintenance
        if ($siteConfigRepository->isMaintenanceMode()) {
            // Si l'utilisateur n'est pas connecté ou n'a pas le rôle ADMIN, afficher la page de maintenance
            if (!$this->getUser() || !$this->isGranted('ROLE_ADMIN')) {
                return $this->render('maintenance.html.twig');
            }
        }
        
        $query = $request->query->get('q', '');
        
        // Recherche uniquement si une requête est fournie et a au moins 3 caractères
        $products = [];
        if (!empty($query) && strlen($query) >= 2) {
            $products = $productRepository->findBySearchQuery($query);
        }
        
        // Récupère les catégories mises en avant pour le menu
        $featuredCategories = $categoryRepository->findBy(['featured' => true]);
        
        // Récupère les catégories non mises en avant pour le menu "Autres catégories"
        $otherCategories = $categoryRepository->findBy(['featured' => false]);
        
        // Récupère quelques produits en vedette à afficher si aucun résultat n'est trouvé
        $featuredProducts = $productRepository->findFeatured(4);
        
        return $this->render('product/search.html.twig', [
            'query' => $query,
            'products' => $products,
            'featuredCategories' => $featuredCategories,
            'otherCategories' => $otherCategories,
            'featuredProducts' => $featuredProducts,
        ]);
    }
    #[Route('/category/{slug}', name: 'category_by_slug')]
    public function categoryBySlug(
        string $slug, 
        CategoryRepository $categoryRepository, 
        SiteConfigRepository $siteConfigRepository,
        EntityManagerInterface $entityManager
    ): Response
    {
        // Vérification du mode maintenance
        if ($siteConfigRepository->isMaintenanceMode()) {
            // Si l'utilisateur n'est pas connecté ou n'a pas le rôle ADMIN, afficher la page de maintenance
            if (!$this->getUser() || !$this->isGranted('ROLE_ADMIN')) {
                return $this->render('maintenance.html.twig');
            }
        }
        
        // Convertir le slug en nom pour la recherche (remplacer les tirets par des espaces)
        $searchName = str_replace('-', ' ', $slug);
        
        // Essayer d'abord de trouver la catégorie par le slug
        $category = $categoryRepository->findOneBy(['slug' => $slug]);
        
        // Si pas trouvé par slug, essayer par le nom exact
        if (!$category) {
            $category = $categoryRepository->findOneBy(['name' => $searchName]);
        }
        
        // Si toujours pas trouvée, essayer avec une recherche flexible
        if (!$category) {
            // Recherche avec LIKE sur le nom et sur le slug
            $categories = $entityManager->createQuery(
                'SELECT c FROM App\Entity\Category c 
                WHERE LOWER(c.name) LIKE LOWER(:name) 
                OR LOWER(c.slug) LIKE LOWER(:slug)'
            )
            ->setParameter('name', '%' . $searchName . '%')
            ->setParameter('slug', '%' . $slug . '%')
            ->getResult();
            
            if (count($categories) > 0) {
                // Prendre la première correspondance
                $category = $categories[0];
            } else {
                // Pas de catégorie trouvée, retourner une 404
                throw $this->createNotFoundException('Catégorie non trouvée: ' . $slug);
            }
        }
        
        // Récupère tous les produits de cette catégorie
        $products = $category->getProducts();
        
        // Récupère les catégories mises en avant pour le menu
        $featuredCategories = $categoryRepository->findBy(['featured' => true]);
        
        // Récupère les catégories non mises en avant pour le menu "Autres catégories"
        $otherCategories = $categoryRepository->findBy(['featured' => false]);
        
        // Récupère la catégorie parente pour le fil d'Ariane
        $parentCategory = $category->getParent();
        
        // Cherche un produit avec une image pour illustrer la catégorie
        $productWithImage = null;
        foreach ($products as $product) {
            if ($product->getImageFilename()) {
                $productWithImage = $product;
                break;
            }
        }
        
        return $this->render('category/show.html.twig', [
            'category' => $category,
            'products' => $products,
            'featuredCategories' => $featuredCategories,
            'otherCategories' => $otherCategories,
            'parentCategory' => $parentCategory,
            'productWithImage' => $productWithImage,
        ]);
    }
    #[Route('/', name: 'index')]
    public function index(
        ProductRepository $productRepository, 
        CategoryRepository $categoryRepository,
        SiteConfigRepository $siteConfigRepository
    ): Response
    {
        // Vérification du mode maintenance
        if ($siteConfigRepository->isMaintenanceMode()) {
            // Si l'utilisateur n'est pas connecté ou n'a pas le rôle ADMIN, afficher la page de maintenance
            if (!$this->getUser() || !$this->isGranted('ROLE_ADMIN')) {
                return $this->render('maintenance.html.twig');
            }
        }
        
        // Récupère les produits en vedette
        $featuredProducts = $productRepository->findBy(['featured' => true], ['id' => 'DESC'], 8);
        
        // Récupère les produits en solde
        $saleProducts = $productRepository->findBy(['onSale' => true], ['discountPercentage' => 'DESC'], 8);
        
        // Récupère les nouveautés (les 8 derniers produits ajoutés)
        $newProducts = $productRepository->findBy(['isActive' => true], ['id' => 'DESC'], 8);
        
        // Récupère les catégories mises en avant pour le menu
        $featuredCategories = $categoryRepository->findBy(['featured' => true]);
        
        // Récupère les catégories non mises en avant pour le menu "Autres catégories"
        $otherCategories = $categoryRepository->findBy(['featured' => false]);
        
        return $this->render('product/index.html.twig', [
            'featuredProducts' => $featuredProducts,
            'saleProducts' => $saleProducts,
            'newProducts' => $newProducts,
            'featuredCategories' => $featuredCategories,
            'otherCategories' => $otherCategories,
        ]);
    }
    
    #[Route('/{id}', name: 'show', requirements: ['id' => '\d+'])]
    public function show(
        Product $product, 
        ProductRepository $productRepository, 
        CategoryRepository $categoryRepository,
        SiteConfigRepository $siteConfigRepository,
        WishlistRepository $wishlistRepository,
        EntityManagerInterface $entityManager
    ): Response
    {
        // Vérification du mode maintenance
        if ($siteConfigRepository->isMaintenanceMode()) {
            // Si l'utilisateur n'est pas connecté ou n'a pas le rôle ADMIN, afficher la page de maintenance
            if (!$this->getUser() || !$this->isGranted('ROLE_ADMIN')) {
                return $this->render('maintenance.html.twig');
            }
        }
        
        // Récupère des produits similaires de la même catégorie
        $similarProducts = $productRepository->findBy(
            ['category' => $product->getCategory(), 'isActive' => true],
            ['id' => 'DESC'],
            4
        );
        
        // Récupère les avis du produit
        $reviews = $entityManager->getRepository(Review::class)->findBy(
            ['product' => $product, 'isApproved' => true],
            ['createdAt' => 'DESC']
        );
        
        // Récupère les catégories mises en avant pour le menu
        $featuredCategories = $categoryRepository->findBy(['featured' => true]);
        
        // Récupère les catégories non mises en avant pour le menu "Autres catégories"
        $otherCategories = $categoryRepository->findBy(['featured' => false]);
        
        // Vérifier si le produit est dans les favoris de l'utilisateur
        $isInWishlist = false;
        $user = $this->getUser();
        if ($user instanceof User) {
            $isInWishlist = $wishlistRepository->isProductInWishlist(
                $user->getId(),
                $product->getId()
            );
        }
        
        return $this->render('product/show.html.twig', [
            'product' => $product,
            'similarProducts' => $similarProducts,
            'featuredCategories' => $featuredCategories,
            'otherCategories' => $otherCategories,
            'reviews' => $reviews,
            'isInWishlist' => $isInWishlist,
        ]);
    }
}