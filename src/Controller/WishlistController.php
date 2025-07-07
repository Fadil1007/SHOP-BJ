<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Product;
use App\Entity\Wishlist;
use App\Repository\ProductRepository;
use App\Repository\WishlistRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

#[Route('/favoris')]
class WishlistController extends AbstractController
{
    private $entityManager;
    private $wishlistRepository;
    private $productRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        WishlistRepository $wishlistRepository,
        ProductRepository $productRepository
    ) {
        $this->entityManager = $entityManager;
        $this->wishlistRepository = $wishlistRepository;
        $this->productRepository = $productRepository;
    }

    /**
     * Affiche la liste des favoris de l'utilisateur
     */
    #[Route('', name: 'wishlist_index')]
    #[IsGranted('ROLE_USER')]
    public function index(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $wishlistItems = $this->wishlistRepository->findByUser($user);

        return $this->render('wishlist/index.html.twig', [
            'wishlistItems' => $wishlistItems,
        ]);
    }

    /**
     * Ajoute un produit aux favoris (AJAX)
     */
    #[Route('/ajouter/{id}', name: 'wishlist_add', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function add(Product $product, Request $request): JsonResponse
    {
        /** @var User $user */
        $user = $this->getUser();
        
        // Vérifier si le produit est déjà dans les favoris
        if ($this->wishlistRepository->isInWishlist($user, $product)) {
            return $this->json([
                'success' => false,
                'message' => 'Ce produit est déjà dans vos favoris',
                'in_wishlist' => true,
                'wishlist_count' => $this->wishlistRepository->countByUser($user)
            ]);
        }
        
        // Créer une nouvelle entrée dans les favoris
        $wishlistItem = new Wishlist();
        $wishlistItem->setUser($user);
        $wishlistItem->setProduct($product);
        
        $this->entityManager->persist($wishlistItem);
        $this->entityManager->flush();
        
        // Retourner la réponse JSON
        return $this->json([
            'success' => true,
            'message' => 'Produit ajouté aux favoris',
            'in_wishlist' => true,
            'wishlist_count' => $this->wishlistRepository->countByUser($user)
        ]);
    }

    /**
     * Supprime un produit des favoris
     */
    #[Route('/supprimer/{id}', name: 'wishlist_remove', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function remove(Product $product, Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        // Rechercher l'élément de la liste de souhaits
        $wishlistItem = $this->wishlistRepository->findOneByUserAndProduct($user, $product);
        
        // Si l'élément existe, le supprimer
        if ($wishlistItem) {
            $this->entityManager->remove($wishlistItem);
            $this->entityManager->flush();
            
            // Si la requête est AJAX, retourner une réponse JSON
            if ($request->isXmlHttpRequest()) {
                return $this->json([
                    'success' => true,
                    'message' => 'Produit retiré des favoris',
                    'in_wishlist' => false,
                    'wishlist_count' => $this->wishlistRepository->countByUser($user)
                ]);
            }
            
            // Sinon, ajouter un message flash et rediriger
            $this->addFlash('success', 'Le produit a été retiré de vos favoris');
        }
        
        // Rediriger vers la page des favoris
        return $this->redirectToRoute('wishlist_index');
    }

    /**
     * Vérifie si un produit est dans les favoris (AJAX)
     */
    #[Route('/verifie/{id}', name: 'wishlist_check', methods: ['GET'])]
    public function check(Product $product): JsonResponse
    {
        // Vérifier si l'utilisateur est connecté
        if (!$this->getUser()) {
            return $this->json([
                'in_wishlist' => false
            ]);
        }
        
        /** @var User $user */
        $user = $this->getUser();
        
        // Vérifier si le produit est dans les favoris
        $inWishlist = $this->wishlistRepository->isInWishlist($user, $product);
        
        return $this->json([
            'in_wishlist' => $inWishlist
        ]);
    }

    /**
     * Bascule un produit dans les favoris (ajoute ou supprime)
     */
    #[Route('/basculer/{id}', name: 'wishlist_toggle', methods: ['POST'])]
    #[IsGranted('ROLE_USER')]
    public function toggle(Product $product, Request $request): JsonResponse
    {
        /** @var User $user */
        $user = $this->getUser();
        
        // Vérifier si le produit est déjà dans les favoris
        $wishlistItem = $this->wishlistRepository->findOneByUserAndProduct($user, $product);
        
        if ($wishlistItem) {
            // Si oui, le supprimer
            $this->entityManager->remove($wishlistItem);
            $message = 'Produit retiré des favoris';
            $inWishlist = false;
        } else {
            // Sinon, l'ajouter
            $wishlistItem = new Wishlist();
            $wishlistItem->setUser($user);
            $wishlistItem->setProduct($product);
            $this->entityManager->persist($wishlistItem);
            $message = 'Produit ajouté aux favoris';
            $inWishlist = true;
        }
        
        $this->entityManager->flush();
        
        // Retourner la réponse JSON
        return $this->json([
            'success' => true,
            'message' => $message,
            'in_wishlist' => $inWishlist,
            'wishlist_count' => $this->wishlistRepository->countByUser($user)
        ]);
    }
}