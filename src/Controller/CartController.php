<?php

namespace App\Controller;

use App\Entity\CartItem;
use App\Entity\Product;
use App\Entity\User;
use App\Repository\CartItemRepository;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/cart')]
class CartController extends AbstractController
{
    #[Route('', name: 'cart_index')]
    public function index(
        Request $request, 
        SessionInterface $session, 
        ProductRepository $productRepository,
        CartItemRepository $cartItemRepository,
        EntityManagerInterface $entityManager
    ): Response {
        try {
            $cartItems = [];
            $total = 0;
            $cartCount = 0;

            // Si l'utilisateur est connecté, on utilise les CartItems en BDD
            $user = $this->getUser();
            if ($user instanceof User) {
                $dbCartItems = $cartItemRepository->findBy(['user' => $user]);
                foreach ($dbCartItems as $item) {
                    // Vérification supplémentaire pour éviter les erreurs
                    if ($item->getProduct()) {
                        $cartItems[] = $item;
                        $total += $item->getProduct()->getPrice() * $item->getQuantity();
                        $cartCount += $item->getQuantity();
                    } else {
                        // Si le produit n'existe plus, supprimer l'élément du panier
                        // Nous utilisons l'EntityManager injecté
                        $entityManager->remove($item);
                        $entityManager->flush();
                    }
                }
            } else {
                // Sinon, on utilise le panier en session
                $cart = $session->get('cart', []);
                foreach ($cart as $id => $quantity) {
                    $product = $productRepository->find($id);
                    if ($product) {
                        $cartItem = new CartItem();
                        $cartItem->setProduct($product);
                        $cartItem->setQuantity($quantity);
                        $cartItems[] = $cartItem;
                        $total += $product->getPrice() * $quantity;
                        $cartCount += $quantity;
                    }
                }
            }

            // Vérifier si la requête est une requête AJAX
            $isAjax = $request->headers->get('X-Requested-With') === 'XMLHttpRequest';

            if ($isAjax) {
                return new JsonResponse([
                    'success' => true,
                    'cart_count' => $cartCount,
                    'total' => $total
                ]);
            }

            return $this->render('cart/index.html.twig', [
                'cart_items' => $cartItems,
                'total' => $total
            ]);
        } catch (\Exception $e) {
            // En cas d'erreur, on affiche un message d'erreur
            $this->addFlash('error', 'Une erreur est survenue lors du chargement du panier: ' . $e->getMessage());

            if ($request->headers->get('X-Requested-With') === 'XMLHttpRequest') {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Une erreur est survenue lors du chargement du panier: ' . $e->getMessage()
                ], 500);
            }

            // Retourner une version vide du panier en cas d'erreur
            return $this->render('cart/index.html.twig', [
                'cart_items' => [],
                'total' => 0,
                'error' => $e->getMessage()
            ]);
        }
    }

    #[Route('/add/{id}', name: 'cart_add', methods: ['POST'])]
    public function add(
        int $id, 
        Request $request, 
        SessionInterface $session, 
        ProductRepository $productRepository,
        CartItemRepository $cartItemRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Vérifier si la requête est une requête AJAX
        $isAjax = $request->headers->get('X-Requested-With') === 'XMLHttpRequest';

        // Récupérer le produit
        $product = $productRepository->find($id);

        if (!$product) {
            if ($isAjax) {
                return new JsonResponse(['success' => false, 'message' => 'Produit non trouvé'], Response::HTTP_NOT_FOUND);
            }
            $this->addFlash('danger', 'Ce produit n\'existe pas');
            return $this->redirectToRoute('home');
        }

        // Récupérer la quantité si elle est passée en paramètre, sinon 1
        $quantity = $request->request->getInt('quantity', 1);

        // Récupérer les détails supplémentaires (taille, couleur)
        $size = $request->request->get('size');
        $color = $request->request->get('color');

        // Vérifier si le produit a des tailles ou des couleurs et si elles sont requises
        $productSizes = $product->getSizes();
        $productColors = $product->getColors();

        // Si le produit a des tailles mais qu'aucune taille n'a été sélectionnée
        if (!empty($productSizes) && empty($size)) {
            if ($isAjax) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Veuillez sélectionner une taille pour ce produit'
                ], Response::HTTP_BAD_REQUEST);
            }
            $this->addFlash('danger', 'Veuillez sélectionner une taille pour ce produit');
            return $this->redirectToRoute('product_show', ['id' => $product->getId()]);
        }

        // Si le produit a des couleurs mais qu'aucune couleur n'a été sélectionnée
        if (!empty($productColors) && empty($color)) {
            if ($isAjax) {
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Veuillez sélectionner une couleur pour ce produit'
                ], Response::HTTP_BAD_REQUEST);
            }
            $this->addFlash('danger', 'Veuillez sélectionner une couleur pour ce produit');
            return $this->redirectToRoute('product_show', ['id' => $product->getId()]);
        }

        // Si l'utilisateur est connecté, enregistrer en BDD
        /** @var User|null $user */
        $user = $this->getUser();
        $cartCount = 0;
        $total = 0;

        if ($user instanceof User) {
            // Protection contre les ajouts multiples rapides (debounce côté serveur)
            $sessionKey = 'last_cart_add_' . $product->getId() . '_' . ($size ?: 'no_size') . '_' . ($color ?: 'no_color');
            $lastAddTime = $session->get($sessionKey, 0);
            $currentTime = microtime(true);

            if ($currentTime - $lastAddTime < 0.5) { // 0.5 seconde de protection seulement
                return new JsonResponse([
                    'success' => false,
                    'message' => 'Ajout en cours, veuillez patienter...'
                ]);
            }

            $session->set($sessionKey, $currentTime);
            // Construire le critère de recherche dynamiquement
            $criteria = [
                'user' => $user,
                'product' => $product
            ];

            // Ajouter size et color seulement s'ils ne sont pas vides
            if (!empty($size)) {
                $criteria['size'] = $size;
            } else {
                $criteria['size'] = null;
            }

            if (!empty($color)) {
                $criteria['color'] = $color;
            } else {
                $criteria['color'] = null;
            }

            // Chercher si ce produit est déjà dans le panier de l'utilisateur
            $cartItem = $cartItemRepository->findOneBy($criteria);

            if ($cartItem) {
                // Mettre à jour la quantité
                $cartItem->setQuantity($cartItem->getQuantity() + $quantity);
            } else {
                // Créer un nouvel item
                $cartItem = new CartItem();
                $cartItem->setUser($user);
                $cartItem->setProduct($product);
                $cartItem->setQuantity($quantity);
                $cartItem->setSize($size ?: null);
                $cartItem->setColor($color ?: null);
            }

            $entityManager->persist($cartItem);
            $entityManager->flush();

            // Calculer le total et le nombre d'articles
            $cartItems = $cartItemRepository->findBy(['user' => $user]);
            foreach ($cartItems as $item) {
                $total += $item->getProduct()->getPrice() * $item->getQuantity();
                $cartCount += $item->getQuantity();
            }
        } else {
            // L'utilisateur n'est pas connecté, rediriger vers la page de connexion
            if ($isAjax) {
                return new JsonResponse([
                    'success' => false, 
                    'redirect' => $this->generateUrl('app_login'),
                    'message' => 'Veuillez vous connecter pour ajouter des produits au panier'
                ], Response::HTTP_UNAUTHORIZED);
            }

            $this->addFlash('error', 'Veuillez vous connecter pour ajouter des produits au panier');

            // Rediriger vers la page de connexion
            if ($isAjax) {
                return new JsonResponse([
                    'success' => false, 
                    'redirect' => $this->generateUrl('app_login')
                ]);
            } else {
                return $this->redirectToRoute('app_login');
            }
        }

        // Réponse en fonction du type de requête
        if ($isAjax) {
            return new JsonResponse([
                'success' => true, 
                'cart_count' => $cartCount,
                'total' => $total,
                'message' => 'Produit ajouté au panier'
            ]);
        }

        $this->addFlash('success', 'Produit ajouté au panier');
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/update/{id}', name: 'cart_update', methods: ['POST'])]
    public function update(
        int $id, 
        Request $request, 
        SessionInterface $session, 
        ProductRepository $productRepository,
        CartItemRepository $cartItemRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Vérifier si la requête est une requête AJAX
        $isAjax = $request->headers->get('X-Requested-With') === 'XMLHttpRequest';

        // Récupérer la nouvelle quantité
        $quantity = $request->request->getInt('quantity', 1);

        // Si l'utilisateur est connecté, mettre à jour en BDD
        /** @var User|null $user */
        $user = $this->getUser();
        $cartCount = 0;
        $total = 0;
        $itemTotal = 0;

        if ($user instanceof User) {
            $cartItem = null;

            // D'abord essayer de récupérer l'item par son ID CartItem
            $potentialCartItem = $cartItemRepository->find($id);
            if ($potentialCartItem && $potentialCartItem->getUser() === $user) {
                $cartItem = $potentialCartItem;
            } else {
                // Sinon, essayer par l'ID du produit
                $product = $productRepository->find($id);

                if (!$product) {
                    if ($isAjax) {
                        return new JsonResponse(['success' => false, 'message' => 'Produit non trouvé'], Response::HTTP_NOT_FOUND);
                    }
                    $this->addFlash('danger', 'Ce produit n\'existe pas');
                    return $this->redirectToRoute('cart_index');
                }

                // Récupérer le premier CartItem de ce produit pour cet utilisateur
                $cartItems = $cartItemRepository->findBy([
                    'user' => $user,
                    'product' => $product
                ]);

                if (!empty($cartItems)) {
                    $cartItem = $cartItems[0]; // Prendre le premier trouvé
                }
            }

            // Vérifier si l'article existe
            if (!$cartItem) {
                if ($isAjax) {
                    return new JsonResponse(['success' => false, 'message' => 'Produit non trouvé dans le panier'], Response::HTTP_BAD_REQUEST);
                }
                $this->addFlash('danger', 'Ce produit n\'est pas dans votre panier');
                return $this->redirectToRoute('cart_index');
            }

            // Mettre à jour ou supprimer l'article
            if ($quantity > 0) {
                $cartItem->setQuantity($quantity);
                $entityManager->persist($cartItem);
                $itemTotal = $cartItem->getProduct()->getPrice() * $quantity;
            } else {
                $entityManager->remove($cartItem);
            }

            $entityManager->flush();

            // Calculer le total et le nombre d'articles
            $cartItems = $cartItemRepository->findBy(['user' => $user]);
            foreach ($cartItems as $item) {
                $total += $item->getProduct()->getPrice() * $item->getQuantity();
                $cartCount += $item->getQuantity();
            }
        } else {
            // L'utilisateur n'est pas connecté, rediriger vers la page de connexion
            if ($isAjax) {
                return new JsonResponse([
                    'success' => false, 
                    'redirect' => $this->generateUrl('app_login'),
                    'message' => 'Veuillez vous connecter pour modifier votre panier'
                ], Response::HTTP_UNAUTHORIZED);
            }

            $this->addFlash('error', 'Veuillez vous connecter pour modifier votre panier');
            return $this->redirectToRoute('app_login');
        }

        // Réponse en fonction du type de requête
        if ($isAjax) {
            return new JsonResponse([
                'success' => true,
                'cart_count' => $cartCount,
                'subTotal' => $itemTotal,
                'total' => $total,
                'message' => 'Panier mis à jour'
            ]);
        }

        $this->addFlash('success', 'Panier mis à jour');
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/remove/{id}', name: 'cart_remove', methods: ['POST'])]
    public function remove(
        int $id, 
        Request $request, 
        SessionInterface $session, 
        ProductRepository $productRepository,
        CartItemRepository $cartItemRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Vérifier si la requête est une requête AJAX
        $isAjax = $request->headers->get('X-Requested-With') === 'XMLHttpRequest';

        // Si l'utilisateur est connecté, supprimer de la BDD
        /** @var User|null $user */
        $user = $this->getUser();
        $cartCount = 0;
        $total = 0;

        if ($user instanceof User) {
            $cartItem = null;

            // D'abord essayer de récupérer l'item par son ID CartItem
            $potentialCartItem = $cartItemRepository->find($id);
            if ($potentialCartItem && $potentialCartItem->getUser() === $user) {
                $cartItem = $potentialCartItem;
            } else {
                // Sinon, essayer par l'ID du produit
                $product = $productRepository->find($id);

                if ($product) {
                    // Récupérer le premier CartItem de ce produit pour cet utilisateur
                    $cartItems = $cartItemRepository->findBy([
                        'user' => $user,
                        'product' => $product
                    ]);

                    if (!empty($cartItems)) {
                        $cartItem = $cartItems[0]; // Prendre le premier trouvé
                    }
                }
            }

            // Vérifier si l'article existe
            if (!$cartItem) {
                if ($isAjax) {
                    return new JsonResponse(['success' => false, 'message' => 'Produit non trouvé dans le panier'], Response::HTTP_BAD_REQUEST);
                }
                $this->addFlash('danger', 'Ce produit n\'est pas dans votre panier');
                return $this->redirectToRoute('cart_index');
            }

            // Supprimer l'article
            $entityManager->remove($cartItem);
            $entityManager->flush();

            // Calculer le total et le nombre d'articles
            $cartItems = $cartItemRepository->findBy(['user' => $user]);
            foreach ($cartItems as $item) {
                $total += $item->getProduct()->getPrice() * $item->getQuantity();
                $cartCount += $item->getQuantity();
            }
        } else {
            // L'utilisateur n'est pas connecté, rediriger vers la page de connexion
            if ($isAjax) {
                return new JsonResponse([
                    'success' => false, 
                    'redirect' => $this->generateUrl('app_login'),
                    'message' => 'Veuillez vous connecter pour supprimer des produits du panier'
                ], Response::HTTP_UNAUTHORIZED);
            }

            $this->addFlash('error', 'Veuillez vous connecter pour supprimer des produits du panier');
            return $this->redirectToRoute('app_login');
        }

        // Réponse en fonction du type de requête
        if ($isAjax) {
            return new JsonResponse([
                'success' => true,
                'cart_count' => $cartCount,
                'total' => $total,
                'message' => 'Produit retiré du panier'
            ]);
        }

        $this->addFlash('success', 'Produit retiré du panier');
        return $this->redirectToRoute('cart_index');
    }

    #[Route('/clear', name: 'cart_clear', methods: ['POST'])]
    public function clear(
        Request $request, 
        SessionInterface $session,
        CartItemRepository $cartItemRepository,
        EntityManagerInterface $entityManager
    ): Response {
        // Vérifier si la requête est une requête AJAX
        $isAjax = $request->headers->get('X-Requested-With') === 'XMLHttpRequest';

        // Si l'utilisateur est connecté, vider son panier en BDD
        /** @var User|null $user */
        $user = $this->getUser();

        if ($user instanceof User) {
            // Récupérer tous les articles du panier de l'utilisateur
            $cartItems = $cartItemRepository->findBy(['user' => $user]);

            // Supprimer chaque article
            foreach ($cartItems as $cartItem) {
                $entityManager->remove($cartItem);
            }

            $entityManager->flush();
        } else {
            // L'utilisateur n'est pas connecté, rediriger vers la page de connexion
            if ($isAjax) {
                return new JsonResponse([
                    'success' => false, 
                    'redirect' => $this->generateUrl('app_login'),
                    'message' => 'Veuillez vous connecter pour vider votre panier'
                ], Response::HTTP_UNAUTHORIZED);
            }

            $this->addFlash('error', 'Veuillez vous connecter pour vider votre panier');
            return $this->redirectToRoute('app_login');
        }

        // Réponse en fonction du type de requête
        if ($isAjax) {
            return new JsonResponse([
                'success' => true,
                'cart_count' => 0,
                'total' => 0,
                'message' => 'Panier vidé'
            ]);
        }

        $this->addFlash('success', 'Votre panier a été vidé');
        return $this->redirectToRoute('cart_index');
    }

    public function __construct(
        private EntityManagerInterface $entityManager
    ) {}
}