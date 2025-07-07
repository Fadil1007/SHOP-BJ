<?php

namespace App\Controller;

use App\Entity\Category;
use App\Repository\CategoryRepository;
use App\Repository\SiteConfigRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/categorie', name: 'category_')]
class CategoryController extends AbstractController
{
    #[Route('/liste', name: 'list')]
    public function list(
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
        
        // Récupère toutes les catégories principales
        $categories = $categoryRepository->findAll();
        
        // Récupère les catégories mises en avant pour le menu
        $featuredCategories = $categoryRepository->findBy(['featured' => true]);
        
        // Récupère les catégories non mises en avant pour le menu "Autres catégories"
        $otherCategories = $categoryRepository->findBy(['featured' => false]);
        
        return $this->render('category/list.html.twig', [
            'categories' => $categories,
            'featuredCategories' => $featuredCategories,
            'otherCategories' => $otherCategories,
        ]);
    }

    #[Route('/{id}', name: 'show', requirements: ['id' => '\d+'])]
    public function show(
        Category $category, 
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
        
        // Récupère tous les produits de cette catégorie
        $products = $category->getProducts();
        
        // Récupère les catégories principales pour le menu
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
}