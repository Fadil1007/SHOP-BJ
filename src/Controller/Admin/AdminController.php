<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Order;
use App\Entity\Product;
use App\Entity\User;

use App\Form\ProductType;
use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin', name: 'admin_')]
class AdminController extends AbstractController
{
    public function __construct(
        private readonly EntityManagerInterface $entityManager,
        private readonly PaginatorInterface $paginator,
        private readonly RequestStack $requestStack
    ) {
    }

    #[Route('/', name: 'simple')]
    public function index(): Response {
        // Utilisation d'une approche plus légère sans dépendances pour le dashboard
        return $this->render('admin/dashboard.html.twig');
    }

    #[Route('/produits', name: 'products')]
    public function products(Request $request, ProductRepository $productRepository): Response
    {
        $searchTerm = $request->query->get('search');
        $queryBuilder = $productRepository->createQueryBuilder('p')
            ->leftJoin('p.category', 'c')
            ->addSelect('c');

        if ($searchTerm) {
            // Recherche par produits commençant par le terme de recherche (pour les initiales)
            // OU contenant le terme de recherche mais uniquement s'il a plus de 2 caractères
            if (strlen($searchTerm) <= 2) {
                $queryBuilder->where('LOWER(p.name) LIKE LOWER(:search_start)')
                    ->setParameter('search_start', $searchTerm . '%');
            } else {
                $queryBuilder->where('LOWER(p.name) LIKE LOWER(:search) OR LOWER(p.description) LIKE LOWER(:search)')
                    ->setParameter('search', '%' . $searchTerm . '%');
            }
        }

        $pagination = $this->paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('admin/products.html.twig', [
            'products' => $pagination,
        ]);
    }

    #[Route('/categories', name: 'categories')]
    public function categories(Request $request, CategoryRepository $categoryRepository): Response
    {
        $searchTerm = $request->query->get('search');
        $queryBuilder = $categoryRepository->createQueryBuilder('c')
            ->leftJoin('c.products', 'p')
            ->addSelect('p');

        if ($searchTerm) {
            $queryBuilder->where('LOWER(c.name) LIKE LOWER(:search)')
                ->setParameter('search', '%' . $searchTerm . '%');
        }

        $pagination = $this->paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('admin/categories.html.twig', [
            'categories' => $pagination,
        ]);
    }

    #[Route('/orders', name: 'orders')]
    public function orders(Request $request, OrderRepository $orderRepository): Response
    {
        $searchTerm = $request->query->get('search');
        $status = $request->query->get('status');

        $queryBuilder = $orderRepository->createQueryBuilder('o')
            ->leftJoin('o.user', 'u')
            ->addSelect('u');

        if ($searchTerm) {
            $queryBuilder->where('LOWER(o.reference) LIKE LOWER(:search) OR LOWER(u.email) LIKE LOWER(:search)')
                ->setParameter('search', '%' . $searchTerm . '%');
        }

        if ($status) {
            if ($searchTerm) {
                $queryBuilder->andWhere('o.status = :status');
            } else {
                $queryBuilder->where('o.status = :status');
            }
            $queryBuilder->setParameter('status', $status);
        }

        $queryBuilder->orderBy('o.createdAt', 'DESC');

        $pagination = $this->paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('admin/orders.html.twig', [
            'orders' => $pagination,
        ]);
    }

    #[Route('/commandes/{id}', name: 'order_view')]
    public function viewOrder(Order $order): Response
    {
        return $this->render('admin/order_view.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/commandes/{id}/modifier', name: 'order_edit')]
    public function editOrder(Request $request, Order $order): Response
    {
        // Code pour éditer une commande
        // À compléter selon les besoins spécifiques

        return $this->render('admin/order_edit.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/commandes/{id}/facture', name: 'order_invoice')]
    public function orderInvoice(Order $order): Response
    {
        // Code pour générer la facture d'une commande
        // À compléter selon les besoins spécifiques

        return $this->render('admin/order_invoice.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/commandes/{id}/supprimer', name: 'order_delete', methods: ['POST'])]
    public function deleteOrder(Request $request, Order $order): Response
    {
        if ($this->isCsrfTokenValid('delete'.$order->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($order);
            $this->entityManager->flush();

            $this->addFlash('success', 'La commande a été supprimée avec succès.');
        }

        return $this->redirectToRoute('admin_orders');
    }

    #[Route('/commandes/exporter', name: 'order_export')]
    public function exportOrders(OrderRepository $orderRepository): Response
    {
        // Récupérer toutes les commandes
        $orders = $orderRepository->findAll();

        // Générer un CSV
        $csv = "ID;Client;Email;Total;Date;Statut\n";

        foreach ($orders as $order) {
            $csv .= sprintf(
                "%s;%s %s;%s;%.2f;%s;%s\n",
                $order->getId(),
                $order->getUser()->getFirstName(),
                $order->getUser()->getLastName(),
                $order->getUser()->getEmail(),
                $order->getTotal(),
                $order->getCreatedAt()->format('d/m/Y H:i'),
                $order->getStatus()
            );
        }

        // Créer une réponse avec le contenu CSV
        $response = new Response($csv);
        $response->headers->set('Content-Type', 'text/csv; charset=utf-8');
        $response->headers->set('Content-Disposition', 'attachment; filename="commandes-export.csv"');

        return $response;
    }

    #[Route('/users', name: 'users')]
    public function users(Request $request, UserRepository $userRepository): Response
    {
        $searchTerm = $request->query->get('search');
        $queryBuilder = $userRepository->createQueryBuilder('u');

        if ($searchTerm) {
            $queryBuilder->where('LOWER(u.email) LIKE LOWER(:search) OR LOWER(u.firstName) LIKE LOWER(:search) OR LOWER(u.lastName) LIKE LOWER(:search)')
                ->setParameter('search', '%' . $searchTerm . '%');
        }

        $pagination = $this->paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('admin/users.html.twig', [
            'users' => $pagination,
        ]);
    }

    #[Route('/product-create', name: 'product_new')]
    public function newProduct(Request $request): Response
    {
        $product = new Product();
        $product->setIsActive(true);

        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/products';

            // Gérer la suppression des images
            $request = $this->requestStack->getCurrentRequest();

            // Suppression image 1
            if ($request->request->get('delete_image1') && $product->getImageFilename()) {
                $oldImagePath = $this->getParameter('kernel.project_dir') . '/public' . $product->getImageFilename();
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $product->setImageFilename(null);
                $product->setImageName(null);
            }

            // Suppression image 2
            if ($request->request->get('delete_image2') && $product->getImageFilename2()) {
                $oldImagePath = $this->getParameter('kernel.project_dir') . '/public' . $product->getImageFilename2();
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $product->setImageFilename2(null);
                $product->setImageName2(null);
            }

            // Suppression image 3
            if ($request->request->get('delete_image3') && $product->getImageFilename3()) {
                $oldImagePath = $this->getParameter('kernel.project_dir') . '/public' . $product->getImageFilename3();
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $product->setImageFilename3(null);
                $product->setImageName3(null);
            }

            // Suppression image 4
            if ($request->request->get('delete_image4') && $product->getImageFilename4()) {
                $oldImagePath = $this->getParameter('kernel.project_dir') . '/public' . $product->getImageFilename4();
                if (file_exists($oldImagePath)) {
                    unlink($oldImagePath);
                }
                $product->setImageFilename4(null);
                $product->setImageName4(null);
            }

            // Créer le répertoire s'il n'existe pas
            if (!file_exists($uploadsDirectory)) {
                mkdir($uploadsDirectory, 0777, true);
            }

            // Gestion de l'upload de l'image principale
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                try {
                    $imageFile->move($uploadsDirectory, $newFilename);
                    $product->setImageFilename('/uploads/products/' . $newFilename);
                    $product->setImageName($originalFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image principale : ' . $e->getMessage());
                    return $this->redirectToRoute('admin_product_new');
                }
            }

            // Gestion de l'upload de l'image secondaire
            $imageFile2 = $form->get('imageFile2')->getData();
            if ($imageFile2) {
                $originalFilename2 = pathinfo($imageFile2->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename2 = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename2);
                $newFilename2 = $safeFilename2 . '-' . uniqid() . '.' . $imageFile2->guessExtension();

                try {
                    $imageFile2->move($uploadsDirectory, $newFilename2);
                    $product->setImageFilename2('/uploads/products/' . $newFilename2);
                    $product->setImageName2($originalFilename2);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image secondaire : ' . $e->getMessage());
                    return $this->redirectToRoute('admin_product_new');
                }
            }

            // Gestion de l'upload de l'image tertiaire
            $imageFile3 = $form->get('imageFile3')->getData();
            if ($imageFile3) {
                $originalFilename3 = pathinfo($imageFile3->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename3 = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename3);
                $newFilename3 = $safeFilename3 . '-' . uniqid() . '.' . $imageFile3->guessExtension();

                try {
                    $imageFile3->move($uploadsDirectory, $newFilename3);
                    $product->setImageFilename3('/uploads/products/' . $newFilename3);
                    $product->setImageName3($originalFilename3);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image tertiaire : ' . $e->getMessage());
                    return $this->redirectToRoute('admin_product_new');
                }
            }

            // Gestion de l'image quaternaire
            $imageFile4 = $form->get('imageFile4')->getData();
            if ($imageFile4) {
                $originalFilename4 = pathinfo($imageFile4->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename4 = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename4);
                $newFilename4 = $safeFilename4 . '-' . uniqid() . '.' . $imageFile4->guessExtension();

                try {
                    $imageFile4->move($uploadsDirectory, $newFilename4);
                    $product->setImageFilename4('/uploads/products/' . $newFilename4);
                    $product->setImageName4($originalFilename4);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image quaternaire : ' . $e->getMessage());
                    return $this->redirectToRoute('admin_product_new');
                }
            }

            // Si un ancien prix est défini, calculer le pourcentage de réduction
            if ($product->getOldPrice() && $product->getOldPrice() > $product->getPrice()) {
                $product->calculateDiscountPercentage();
            }

            // Enregistrer le produit
            $this->entityManager->persist($product);
            $this->entityManager->flush();

            $this->addFlash('success', 'Le produit a été ajouté avec succès.');
            return $this->redirectToRoute('admin_products');
        }

        return $this->render('admin/product_form.html.twig', [
            'form' => $form->createView(),
            'editMode' => false,
            'product' => $product,
        ]);
    }

    #[Route('/product/{id}/edit', name: 'product_edit')]
    public function editProduct(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'upload des images
            $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/products';

            // Créer le répertoire s'il n'existe pas
            if (!file_exists($uploadsDirectory)) {
                mkdir($uploadsDirectory, 0777, true);
            }

            // Traitement de l'image principale
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

                // Supprimer l'ancienne image si elle existe
                if ($product->getImageFilename()) {
                    $oldImagePath = $this->getParameter('kernel.project_dir') . '/public/' . $product->getImageFilename();
                    if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                        unlink($oldImagePath);
                    }
                }

                try {
                    $imageFile->move($uploadsDirectory, $newFilename);
                    $product->setImageFilename('/uploads/products/' . $newFilename);
                    $product->setImageName($originalFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image principale : ' . $e->getMessage());
                    return $this->redirectToRoute('admin_product_edit', ['id' => $product->getId()]);
                }
            }

            // Traitement de l'image secondaire
            $imageFile2 = $form->get('imageFile2')->getData();
            if ($imageFile2) {
                $originalFilename2 = pathinfo($imageFile2->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename2 = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename2);
                $newFilename2 = $safeFilename2 . '-' . uniqid() . '.' . $imageFile2->guessExtension();

                // Supprimer l'ancienne image 2 si elle existe
                if ($product->getImageFilename2()) {
                    $oldImagePath2 = $this->getParameter('kernel.project_dir') . '/public/' . $product->getImageFilename2();
                    if (file_exists($oldImagePath2) && is_file($oldImagePath2)) {
                        unlink($oldImagePath2);
                    }
                }

                try {
                    $imageFile2->move($uploadsDirectory, $newFilename2);
                    $product->setImageFilename2('/uploads/products/' . $newFilename2);
                    $product->setImageName2($originalFilename2);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image secondaire : ' . $e->getMessage());
                    return $this->redirectToRoute('admin_product_edit', ['id' => $product->getId()]);
                }
            }

            // Traitement de l'image tertiaire
            $imageFile3 = $form->get('imageFile3')->getData();
            if ($imageFile3) {
                $originalFilename3 = pathinfo($imageFile3->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename3 = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename3);
                $newFilename3 = $safeFilename3 . '-' . uniqid() . '.' . $imageFile3->guessExtension();

                // Supprimer l'ancienne image 3 si elle existe
                if ($product->getImageFilename3()) {
                    $oldImagePath3 = $this->getParameter('kernel.project_dir') . '/public/' . $product->getImageFilename3();
                    if (file_exists($oldImagePath3) && is_file($oldImagePath3)) {
                        unlink($oldImagePath3);
                    }
                }

                try {
                    $imageFile3->move($uploadsDirectory, $newFilename3);
                    $product->setImageFilename3('/uploads/products/' . $newFilename3);
                    $product->setImageName3($originalFilename3);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image tertiaire : ' . $e->getMessage());
                    return $this->redirectToRoute('admin_product_edit', ['id' => $product->getId()]);
                }
            }

            // Gestion de l'image quaternaire
            $imageFile4 = $form->get('imageFile4')->getData();
            if ($imageFile4) {
                $originalFilename4 = pathinfo($imageFile4->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename4 = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename4);
                $newFilename4 = $safeFilename4 . '-' . uniqid() . '.' . $imageFile4->guessExtension();

                // Supprimer l'ancienne image 4 si elle existe
                if ($product->getImageFilename4()) {
                    $oldImagePath4 = $this->getParameter('kernel.project_dir') . '/public/' . $product->getImageFilename4();
                    if (file_exists($oldImagePath4) && is_file($oldImagePath4)) {
                        unlink($oldImagePath4);
                    }
                }

                try {
                    $imageFile4->move($uploadsDirectory, $newFilename4);
                    $product->setImageFilename4('/uploads/products/' . $newFilename4);
                    $product->setImageName4($originalFilename4);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Erreur lors du téléchargement de l\'image quaternaire : ' . $e->getMessage());
                    return $this->redirectToRoute('admin_product_edit', ['id' => $product->getId()]);
                }
            }

            // Si un ancien prix est défini, calculer le pourcentage de réduction
            if ($product->getOldPrice() && $product->getOldPrice() > $product->getPrice()) {
                $product->calculateDiscountPercentage();
            } else {
                $product->setOnSale(false);
                $product->setDiscountPercentage(null);
            }

            // Mettre à jour le produit
            $this->entityManager->flush();

            $this->addFlash('success', 'Le produit a été modifié avec succès.');
            return $this->redirectToRoute('admin_products');
        }

        return $this->render('admin/product_form.html.twig', [
            'form' => $form->createView(),
            'editMode' => true,
            'product' => $product,
        ]);
    }

    #[Route('/product/{id}/delete-image/{imageNumber}', name: 'product_delete_image', methods: ['POST'])]
    public function deleteProductImage(Request $request, Product $product, int $imageNumber): Response
    {
        if (!$request->isXmlHttpRequest()) {
            throw $this->createAccessDeniedException('Cette route n\'est accessible qu\'en AJAX.');
        }

        try {
            $imagePath = null;

            switch ($imageNumber) {
                case 1:
                    $imagePath = $product->getImageFilename();
                    if ($imagePath) {
                        $product->setImageFilename(null);
                        $product->setImageName(null);
                    }
                    break;
                case 2:
                    $imagePath = $product->getImageFilename2();
                    if ($imagePath) {
                        $product->setImageFilename2(null);
                        $product->setImageName2(null);
                    }
                    break;
                case 3:
                    $imagePath = $product->getImageFilename3();
                    if ($imagePath) {
                        $product->setImageFilename3(null);
                        $product->setImageName3(null);
                    }
                    break;
                case 4:
                    $imagePath = $product->getImageFilename4();
                    if ($imagePath) {
                        $product->setImageFilename4(null);
                        $product->setImageName4(null);
                    }
                    break;
                default:
                    return $this->json(['success' => false, 'error' => 'Numéro d\'image invalide']);
            }

            if ($imagePath) {
                // Supprimer le fichier physique
                $fullPath = $this->getParameter('kernel.project_dir') . '/public' . $imagePath;
                if (file_exists($fullPath) && is_file($fullPath)) {
                    unlink($fullPath);
                }

                // Sauvegarder les changements en base
                $this->entityManager->flush();

                return $this->json(['success' => true, 'message' => 'Image supprimée avec succès']);
            } else {
                return $this->json(['success' => false, 'error' => 'Aucune image trouvée']);
            }
        } catch (\Exception $e) {
            return $this->json(['success' => false, 'error' => 'Erreur lors de la suppression: ' . $e->getMessage()]);
        }
    }

    #[Route('/product/{id}/delete', name: 'product_delete', methods: ['GET', 'POST'])]
    public function deleteProduct(Request $request, Product $product): Response
    {
        if ($request->isMethod('POST')) {
            // Vérifier le token CSRF
            if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
                // Supprimer l'image associée si elle existe
                if ($product->getImageFilename()) {
                    $imagePath = $this->getParameter('kernel.project_dir') . '/public/' . $product->getImageFilename();
                    if (file_exists($imagePath) && is_file($imagePath)) {
                        unlink($imagePath);
                    }
                }

                // Supprimer le produit
                $this->entityManager->remove($product);
                $this->entityManager->flush();

                $this->addFlash('success', 'Le produit a été supprimé avec succès.');
            } else {
                $this->addFlash('error', 'Token CSRF invalide.');
            }

            return $this->redirectToRoute('admin_products');
        }

        // Afficher la page de confirmation de suppression
        return $this->render('admin/product_delete.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/category/new', name: 'category_new')]
    public function newCategory(Request $request): Response
    {
        $category = new Category();

        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image (utilisée pour miniature et en-tête)
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                // Utilisation de la nouvelle méthode handleCategoryImage
                $imageUploaded = $this->handleCategoryImage($imageFile, $category);

                if (!$imageUploaded) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image. Veuillez réessayer avec une autre image.');
                    return $this->redirectToRoute('admin_category_new');
                } else {
                    // Utiliser la même image pour l'en-tête
                    $category->setHeaderImageFilename($category->getImageFilename());
                }
            }

            // Générer un slug si non fourni
            if (!$category->getSlug()) {
                $category->setSlugFromName();
            }

            // Enregistrer la catégorie
            $this->entityManager->persist($category);
            $this->entityManager->flush();

            // Vider le cache des images pour les catégories
            $this->clearImageCache('categories');

            $this->addFlash('success', 'La catégorie a été ajoutée avec succès.');
            return $this->redirectToRoute("admin_categories");
        }

        return $this->render('admin/category_form.html.twig', [
            'form' => $form->createView(),
            'editMode' => false,
            'category' => $category,
        ]);
    }

    #[Route('/category/{id}/edit', name: 'category_edit')]
    public function editCategory(Request $request, Category $category): Response
    {
        $form = $this->createForm(CategoryType::class, $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image (utilisée pour miniature et en-tête)
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                // Utilisation de la nouvelle méthode handleCategoryImage avec isUpdate=true
                $imageUploaded = $this->handleCategoryImage($imageFile, $category, true);

                if (!$imageUploaded) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image. Veuillez réessayer avec une autre image.');
                    return $this->redirectToRoute('admin_category_edit', ['id' => $category->getId()]);
                } else {
                    // Utiliser la même image pour l'en-tête
                    $category->setHeaderImageFilename($category->getImageFilename());
                }
            }

            // Générer un slug si non fourni
            if (!$category->getSlug()) {
                $category->setSlugFromName();
            }

            // Enregistrer la catégorie
            $this->entityManager->flush();

            // Vider le cache des images pour les catégories
            $this->clearImageCache('categories');

            $this->addFlash('success', 'La catégorie a été modifiée avec succès.');
            return $this->redirectToRoute('admin_categories');
        }

        return $this->render('admin/category_form.html.twig', [
            'form' => $form->createView(),
            'editMode' => true,
            'category' => $category,
        ]);
    }

    #[Route('/category/{id}/delete', name: 'category_delete', methods: ['GET', 'POST'])]
    public function deleteCategory(Request $request, Category $category): Response
    {
        // Vérifier si la catégorie a des produits associés
        if (count($category->getProducts()) > 0) {
            $this->addFlash('error', 'Cette catégorie ne peut pas être supprimée car elle contient des produits.');
            return $this->redirectToRoute('admin_categories');
        }

        if ($request->isMethod('POST')) {
            // Vérifier le token CSRF
            if ($this->isCsrfTokenValid('delete'.$category->getId(), $request->request->get('_token'))) {
                // Supprimer l'image principale si elle existe
                if ($category->getImageFilename()) {
                    $imagePath = $this->getParameter('kernel.project_dir') . '/public' . str_replace('/uploads', 'uploads', $category->getImageFilename());
                    if (file_exists($imagePath) && is_file($imagePath)) {
                        unlink($imagePath);
                    }
                }

                // Supprimer l'image d'en-tête si elle existe
                if ($category->getHeaderImageFilename()) {
                    $headerImagePath = $this->getParameter('kernel.project_dir') . '/public' . str_replace('/uploads', 'uploads', $category->getHeaderImageFilename());
                    if (file_exists($headerImagePath) && is_file($headerImagePath)) {
                        unlink($headerImagePath);
                    }
                }

                // Supprimer la catégorie
                $this->entityManager->remove($category);
                $this->entityManager->flush();

                $this->addFlash('success', 'La catégorie a été supprimée avec succès.');
            } else {
                $this->addFlash('error', 'Token CSRF invalide.');
            }

            return $this->redirectToRoute('admin_categories');
        }

        // Afficher la page de confirmation de suppression
        return $this->render('admin/category_delete.html.twig', [
            'category' => $category,
        ]);
    }

    // Plus d'actions d'administration peuvent être ajoutées ici...

    /**
     * Gère le téléchargement et l'enregistrement d'une image de catégorie
     * 
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $imageFile Le fichier d'image téléchargé
     * @param Category $category L'entité de catégorie à mettre à jour
     * @param bool $isUpdate Si true, supprime l'ancienne image
     * 
     * @return bool True si l'opération a réussi, false sinon
     */
    private function handleCategoryImage($imageFile, Category $category, bool $isUpdate = false): bool
    {
        // Vérifier si le fichier existe
        if (!$imageFile) {
            return false;
        }

        // Si c'est une mise à jour, on supprime l'ancienne image
        if ($isUpdate && $category->getImageFilename()) {
            $oldImagePath = $this->getParameter('kernel.project_dir') . '/public' . str_replace('/uploads', 'uploads', $category->getImageFilename());

            if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Génération d'un nom de fichier unique
        $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
        $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

        try {
            $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/categories';

            // Créer le répertoire s'il n'existe pas
            if (!file_exists($uploadsDirectory)) {
                mkdir($uploadsDirectory, 0777, true);
            }

            // Déplacer le fichier
            $imageFile->move($uploadsDirectory, $newFilename);

            // Vérifier que le fichier n'est pas vide (0 octets)
            $filePath = $uploadsDirectory . '/' . $newFilename;
            if (filesize($filePath) === 0) {
                // Le fichier est vide, on le supprime
                unlink($filePath);
                return false;
            }

            // Enregistrer le chemin complet dans l'entité
            $category->setImageFilename('/uploads/categories/' . $newFilename);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Gère le téléchargement et l'enregistrement d'une image d'en-tête de catégorie
     * 
     * @param \Symfony\Component\HttpFoundation\File\UploadedFile $imageFile Le fichier d'image téléchargé
     * @param Category $category L'entité de catégorie à mettre à jour
     * @param bool $isUpdate Si true, supprime l'ancienne image
     * 
     * @return bool True si l'opération a réussi, false sinon
     */
    private function handleCategoryHeaderImage($imageFile, Category $category, bool $isUpdate = false): bool
    {
        // Vérifier si le fichier existe
        if (!$imageFile) {
            return false;
        }

        // Si c'est une mise à jour, on supprime l'ancienne image
        if ($isUpdate && $category->getHeaderImageFilename()) {
            $oldImagePath = $this->getParameter('kernel.project_dir') . '/public' . str_replace('/uploads', 'uploads', $category->getHeaderImageFilename());

            if (file_exists($oldImagePath) && is_file($oldImagePath)) {
                unlink($oldImagePath);
            }
        }

        // Génération d'un nom de fichier unique
        $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
        $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
        $newFilename = 'header-' . $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();

        try {
            $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/categories';

            // Créer le répertoire s'il n'existe pas
            if (!file_exists($uploadsDirectory)) {
                mkdir($uploadsDirectory, 0777, true);
            }

            // Déplacer le fichier
            $imageFile->move($uploadsDirectory, $newFilename);

            // Vérifier que le fichier n'est pas vide (0 octets)
            $filePath = $uploadsDirectory . '/' . $newFilename;
            if (filesize($filePath) === 0) {
                // Le fichier est vide, on le supprime
                unlink($filePath);
                return false;
            }

            // Enregistrer le chemin complet dans l'entité
            $category->setHeaderImageFilename('/uploads/categories/' . $newFilename);

            return true;
        } catch (\Exception $e) {
            return false;
        }
    }

    /**
     * Vide le cache des images pour forcer leur actualisation
     * 
     * @param string|null $type Type optionnel de cache à vider (pas utilisé actuellement)
     */
    private function clearImageCache(?string $type = null): void
    {
        // Implémentation basique, à adapter selon la logique de cache
        // Par exemple : suppression des fichiers dans /public/cache/images
    }
}