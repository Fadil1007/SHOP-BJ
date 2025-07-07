<?php

namespace App\Controller\Admin;

use App\Entity\Review;
use App\Repository\ReviewRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/admin/avis', name: 'admin_review_')]
#[IsGranted('ROLE_ADMIN')]
class ReviewController extends AbstractController
{
    private EntityManagerInterface $entityManager;
    private ReviewRepository $reviewRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        ReviewRepository $reviewRepository
    ) {
        $this->entityManager = $entityManager;
        $this->reviewRepository = $reviewRepository;
    }

    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $searchTerm = $request->query->get('search');
        $queryBuilder = $this->reviewRepository->createQueryBuilderWithSearch($searchTerm);

        $pagination = $paginator->paginate(
            $queryBuilder,
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('admin/reviews/index.html.twig', [
            'reviews' => $pagination,
        ]);
    }

    #[Route('/{id}/approuver', name: 'approve', methods: ['GET'])]
    public function approve(Review $review): Response
    {
        $review->setIsApproved(true);
        $this->entityManager->flush();

        $this->addFlash('success', 'L\'avis a été approuvé avec succès.');

        return $this->redirectToRoute('admin_review_index');
    }

    #[Route('/{id}/rejeter', name: 'reject', methods: ['GET'])]
    public function reject(Review $review): Response
    {
        $review->setIsApproved(false);
        $this->entityManager->flush();

        $this->addFlash('success', 'L\'avis a été rejeté avec succès.');

        return $this->redirectToRoute('admin_review_index');
    }

    #[Route('/{id}/supprimer', name: 'delete', methods: ['POST'])]
    public function delete(Request $request, Review $review): Response
    {
        if ($this->isCsrfTokenValid('delete' . $review->getId(), $request->request->get('_token'))) {
            $this->entityManager->remove($review);
            $this->entityManager->flush();
            $this->addFlash('success', 'L\'avis a été supprimé avec succès.');
        } else {
            $this->addFlash('error', 'Une erreur est survenue lors de la suppression de l\'avis.');
        }

        return $this->redirectToRoute('admin_review_index');
    }
}