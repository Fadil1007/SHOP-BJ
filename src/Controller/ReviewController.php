<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Review;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReviewController extends AbstractController
{
    /**
     * @Route("/produit/{productId}/avis/nouveau", name="app_review_new")
     */
    public function new(int $productId, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est connecté
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        // Récupérer le produit
        $product = $entityManager->getRepository(Product::class)->find($productId);
        
        if (!$product) {
            throw $this->createNotFoundException('Le produit demandé n\'existe pas');
        }
        
        if ($request->isMethod('POST')) {
            // Récupérer les données du formulaire
            $title = $request->request->get('title');
            $content = $request->request->get('content');
            $rating = (int)$request->request->get('rating');
            
            if (!$title || !$content || !$rating) {
                $this->addFlash('error', 'Tous les champs sont requis pour ajouter un avis.');
            } else {
                // Créer le nouvel avis
                $review = new Review();
                $review->setProduct($product);
                $review->setUser($this->getUser());
                $review->setTitle($title);
                $review->setComment($content);
                $review->setRating($rating);
                $review->setIsApproved(true); // Approuver automatiquement
                
                // Sauvegarder l'avis
                $entityManager->persist($review);
                $entityManager->flush();
                
                $this->addFlash('success', 'Votre avis a été ajouté avec succès.');
                
                return $this->redirectToRoute('product_show', ['id' => $productId]);
            }
        }
        
        return $this->render('review/new.html.twig', [
            'product' => $product
        ]);
    }
    
    /**
     * @Route("/product/{id}/review", name="review_add", methods={"POST"})
     */
    public function add(int $id, Request $request, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est connecté
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        // Récupérer le produit
        $product = $entityManager->getRepository(Product::class)->find($id);
        
        if (!$product) {
            throw $this->createNotFoundException('Le produit demandé n\'existe pas');
        }
        
        // Récupérer les données du formulaire
        $reviewData = $request->request->get('review');
        
        if (!$reviewData || !isset($reviewData['title']) || !isset($reviewData['content']) || !isset($reviewData['rating'])) {
            $this->addFlash('error', 'Tous les champs sont requis pour ajouter un avis.');
            return $this->redirectToRoute('product_show', ['id' => $id]);
        }
        
        // Créer le nouvel avis
        $review = new Review();
        $review->setProduct($product);
        $review->setUser($this->getUser());
        $review->setTitle($reviewData['title']);
        $review->setComment($reviewData['content']);
        $review->setRating((int)$reviewData['rating']);
        $review->setIsApproved(true);
        
        // Sauvegarder l'avis
        $entityManager->persist($review);
        $entityManager->flush();
        
        $this->addFlash('success', 'Votre avis a été ajouté avec succès.');
        
        return $this->redirectToRoute('product_show', ['id' => $id]);
    }
    
    /**
     * @Route("/avis/{id}/supprimer", name="app_review_delete")
     */
    public function delete(int $id, EntityManagerInterface $entityManager): Response
    {
        // Vérifier si l'utilisateur est connecté
        $this->denyAccessUnlessGranted('ROLE_USER');
        
        // Récupérer l'avis
        $review = $entityManager->getRepository(Review::class)->find($id);
        
        if (!$review) {
            throw $this->createNotFoundException('L\'avis demandé n\'existe pas');
        }
        
        // Vérifier si l'utilisateur est autorisé à supprimer cet avis
        if ($this->getUser() !== $review->getUser() && !$this->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException('Vous n\'êtes pas autorisé à supprimer cet avis');
        }
        
        // Récupérer l'ID du produit pour la redirection
        $productId = $review->getProduct()->getId();
        
        // Supprimer l'avis
        $entityManager->remove($review);
        $entityManager->flush();
        
        $this->addFlash('success', 'Votre avis a été supprimé avec succès');
        
        return $this->redirectToRoute('product_show', ['id' => $productId]);
    }
}