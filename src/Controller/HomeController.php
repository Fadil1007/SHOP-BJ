<?php

namespace App\Controller;

use App\Repository\CarouselRepository;
use App\Repository\CategoryRepository;
use App\Repository\ProductRepository;
use App\Repository\SiteConfigRepository;
use App\Repository\FlashMessageRepository; // 👈 Ajouté
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(
        ProductRepository $productRepository, 
        CategoryRepository $categoryRepository,
        SiteConfigRepository $siteConfigRepository,
        CarouselRepository $carouselRepository,
        FlashMessageRepository $flashMessageRepository // 👈 Injecté ici
    ): Response
    {
        // Vérification du mode maintenance
        if ($siteConfigRepository->isMaintenanceMode()) {
            if (!$this->getUser() || !$this->isGranted('ROLE_ADMIN')) {
                return $this->render('maintenance.html.twig');
            }
        }
        
        $featuredCategories = $categoryRepository->findBy(['featured' => true]);
        $otherCategories = $categoryRepository->findBy(['featured' => false]);
        $featuredProducts = $productRepository->findBy(['featured' => true], ['id' => 'DESC'], 8);
        $saleProducts = $productRepository->findBy(['onSale' => true], ['discountPercentage' => 'DESC'], 4);
        $newProducts = $productRepository->findBy(['isActive' => true], ['id' => 'DESC'], 4);
        $carouselSlides = $carouselRepository->findActiveSortedByPosition();

        // ✅ Récupération des messages flash actifs et valides
        $now = new \DateTime();
        $flashMessagesPublic = $flashMessageRepository->createQueryBuilder('m')
            ->where('m.isActive = true')
            ->andWhere('m.startDate IS NULL OR m.startDate <= :now')
            ->andWhere('m.endDate IS NULL OR m.endDate >= :now')
            ->setParameter('now', $now)
            ->orderBy('m.createdAt', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('home/index.html.twig', [
            'featuredCategories' => $featuredCategories,
            'otherCategories' => $otherCategories,
            'featuredProducts' => $featuredProducts,
            'saleProducts' => $saleProducts,
            'newProducts' => $newProducts,
            'carouselSlides' => $carouselSlides,
            'flashMessagesPublic' => $flashMessagesPublic, // 👈 Passé à la vue
        ]);
    }
}
