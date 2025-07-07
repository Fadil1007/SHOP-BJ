<?php

namespace App\Controller\Admin;

use App\Entity\Category;
use App\Entity\Order;
use App\Entity\Product;
use App\Entity\User;
use App\Form\CategoryType;
use App\Form\ProductType;
use App\Repository\CategoryRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use App\Repository\UserRepository;
use App\Form\ProductSearchType;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use Symfony\Component\String\Slugger\SluggerInterface;

#[Route('/admin-fix', name: 'admin_fix_')]
#[IsGranted('ROLE_ADMIN')]
class AdminControllerUploadFix extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private PaginatorInterface $paginator;
    
    public function __construct(EntityManagerInterface $entityManager, PaginatorInterface $paginator)
    {
        $this->entityManager = $entityManager;
        $this->paginator = $paginator;
    }
    
    #[Route('/', name: 'index')]
    public function index(EntityManagerInterface $entityManager): Response
    {
        // Récupérer les statistiques de base pour le tableau de bord
        $orderCount = $entityManager->createQueryBuilder()
            ->select('COUNT(o.id)')
            ->from('App\Entity\Order', 'o')
            ->getQuery()
            ->getSingleScalarResult();
            
        $productCount = $entityManager->createQueryBuilder()
            ->select('COUNT(p.id)')
            ->from('App\Entity\Product', 'p')
            ->getQuery()
            ->getSingleScalarResult();
            
        $userCount = $entityManager->createQueryBuilder()
            ->select('COUNT(u.id)')
            ->from('App\Entity\User', 'u')
            ->getQuery()
            ->getSingleScalarResult();
            
        $categoryCount = $entityManager->createQueryBuilder()
            ->select('COUNT(c.id)')
            ->from('App\Entity\Category', 'c')
            ->getQuery()
            ->getSingleScalarResult();
            
        // Récupérer les commandes récentes
        $recentOrders = $entityManager->getRepository('App\Entity\Order')
            ->findBy([], ['createdAt' => 'DESC'], 5);
            
        // Récupérer les utilisateurs récents
        $recentUsers = $entityManager->getRepository('App\Entity\User')
            ->findBy([], ['createdAt' => 'DESC'], 5);
            
        return $this->render('admin/index.html.twig', [
            'orderCount' => $orderCount,
            'productCount' => $productCount,
            'userCount' => $userCount,
            'categoryCount' => $categoryCount,
            'recentOrders' => $recentOrders,
            'recentUsers' => $recentUsers,
        ]);
    }
    
    #[Route('/produits', name: 'products')]
    public function products(Request $request, EntityManagerInterface $entityManager, PaginatorInterface $paginator): Response
    {
        $queryBuilder = $entityManager->createQueryBuilder()
            ->select('p')
            ->from('App\Entity\Product', 'p')
            ->orderBy('p.createdAt', 'DESC');
            
        // Filtrer par catégorie si demandé
        if ($categoryId = $request->query->get('category')) {
            $queryBuilder->andWhere('p.category = :categoryId')
                ->setParameter('categoryId', $categoryId);
        }
        
        // Recherche si demandée
        if ($search = $request->query->get('search')) {
            $queryBuilder->andWhere('p.name LIKE :search OR p.description LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }
        
        // Créer la pagination
        $products = $paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            10
        );
        
        // Récupérer les catégories pour le filtre
        $categories = $entityManager->getRepository(Category::class)->findAll();
        
        return $this->render('admin/products.html.twig', [
            'products' => $products,
            'categories' => $categories,
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
            // Gestion de l'image
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                // Génération d'un nom de fichier unique
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
                
                // Déplacer le fichier dans le répertoire des uploads
                try {
                    $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/products';
                    // Créer le répertoire s'il n'existe pas
                    if (!file_exists($uploadsDirectory)) {
                        mkdir($uploadsDirectory, 0777, true);
                    }
                    
                    $imageFile->move(
                        $uploadsDirectory,
                        $newFilename
                    );
                    
                    // Enregistrer le nom du fichier dans l'entité avec le slash au début
                    $product->setImageFilename('/uploads/products/' . $newFilename);
                    $product->setImageName($originalFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image : ' . $e->getMessage());
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
            'product' => $product,
            'editMode' => false,
        ]);
    }
    
    #[Route('/product/{id}/edit', name: 'product_edit')]
    public function editProduct(Request $request, Product $product): Response
    {
        $form = $this->createForm(ProductType::class, $product);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Gestion de l'image
            $imageFile = $form->get('imageFile')->getData();
            if ($imageFile) {
                // Génération d'un nom de fichier unique
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename . '-' . uniqid() . '.' . $imageFile->guessExtension();
                
                // Déplacer le fichier dans le répertoire des uploads
                try {
                    $uploadsDirectory = $this->getParameter('kernel.project_dir') . '/public/uploads/products';
                    // Créer le répertoire s'il n'existe pas
                    if (!file_exists($uploadsDirectory)) {
                        mkdir($uploadsDirectory, 0777, true);
                    }
                    
                    $imageFile->move(
                        $uploadsDirectory,
                        $newFilename
                    );
                    
                    // Enregistrer le nom du fichier dans l'entité avec le slash au début
                    $product->setImageFilename('/uploads/products/' . $newFilename);
                    $product->setImageName($originalFilename);
                } catch (\Exception $e) {
                    $this->addFlash('error', 'Une erreur est survenue lors du téléchargement de l\'image : ' . $e->getMessage());
                    return $this->redirectToRoute('admin_product_edit', ['id' => $product->getId()]);
                }
            }
            
            // Si un ancien prix est défini, calculer le pourcentage de réduction
            if ($product->getOldPrice() && $product->getOldPrice() > $product->getPrice()) {
                $product->calculateDiscountPercentage();
            } else {
                $product->setDiscountPercentage(0);
            }
            
            // Mettre à jour la date de modification
            $product->setUpdatedAt(new \DateTimeImmutable());
            
            // Enregistrer le produit
            $this->entityManager->flush();
            
            $this->addFlash('success', 'Le produit a été mis à jour avec succès.');
            return $this->redirectToRoute('admin_products');
        }
        
        return $this->render('admin/product_form.html.twig', [
            'form' => $form->createView(),
            'product' => $product,
            'editMode' => true,
        ]);
    }
}