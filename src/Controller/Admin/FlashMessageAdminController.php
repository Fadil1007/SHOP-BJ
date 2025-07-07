<?php

namespace App\Controller\Admin;

use App\Entity\FlashMessage;
use App\Form\FlashMessageType;
use App\Repository\FlashMessageRepository;
use Doctrine\ORM\EntityManagerInterface;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/flash-messages')]
class FlashMessageAdminController extends AbstractController
{
    private FlashMessageRepository $flashMessageRepository;
    private EntityManagerInterface $entityManager;

    public function __construct(
        FlashMessageRepository $flashMessageRepository,
        EntityManagerInterface $entityManager
    ) {
        $this->flashMessageRepository = $flashMessageRepository;
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'admin_flash_messages')]
    public function index(Request $request, PaginatorInterface $paginator): Response
    {
        $queryBuilder = $this->flashMessageRepository->createQueryBuilder('f')
            ->orderBy('f.createdAt', 'DESC');

        // Recherche
        $search = $request->query->get('search');
        if ($search) {
            $queryBuilder->andWhere('f.title LIKE :search OR f.message LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        $flashMessages = $paginator->paginate(
            $queryBuilder->getQuery(),
            $request->query->getInt('page', 1),
            10
        );

        return $this->render('admin/flash_messages.html.twig', [
            'flash_messages' => $flashMessages,
        ]);
    }

    #[Route('/new', name: 'admin_flash_message_new')]
    public function new(Request $request): Response
    {
        $flashMessage = new FlashMessage();
        $form = $this->createForm(FlashMessageType::class, $flashMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->persist($flashMessage);
            $this->entityManager->flush();

            $this->addFlash('success', 'Message flash créé avec succès !');
            return $this->redirectToRoute('admin_flash_messages');
        }

        return $this->render('admin/flash_message_form.html.twig', [
            'form' => $form->createView(),
            'flashMessage' => $flashMessage,
            'editMode' => false,
        ]);
    }

    #[Route('/{id}/edit', name: 'admin_flash_message_edit')]
    public function edit(Request $request, FlashMessage $flashMessage): Response
    {
        $form = $this->createForm(FlashMessageType::class, $flashMessage);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->entityManager->flush();

            $this->addFlash('success', 'Message flash modifié avec succès !');
            return $this->redirectToRoute('admin_flash_messages');
        }

        return $this->render('admin/flash_message_form.html.twig', [
            'form' => $form->createView(),
            'flashMessage' => $flashMessage,
            'editMode' => true,
        ]);
    }

    #[Route('/{id}/delete', name: 'admin_flash_message_delete')]
    public function delete(Request $request, FlashMessage $flashMessage): Response
    {
        if ($request->isMethod('POST')) {
            $this->entityManager->remove($flashMessage);
            $this->entityManager->flush();

            $this->addFlash('success', 'Message flash supprimé avec succès !');
            return $this->redirectToRoute('admin_flash_messages');
        }

        return $this->render('admin/flash_message_delete.html.twig', [
            'flash_message' => $flashMessage,
        ]);
    }

    #[Route('/{id}/toggle', name: 'admin_flash_message_toggle', methods: ['POST'])]
    public function toggle(Request $request, FlashMessage $flashMessage): Response
    {
        if ($this->isCsrfTokenValid('toggle' . $flashMessage->getId(), $request->request->get('_token'))) {
            $flashMessage->setIsActive(!$flashMessage->isActive());
            $this->entityManager->flush();

            $status = $flashMessage->isActive() ? 'activé' : 'désactivé';
            $this->addFlash('success', "Message flash {$status} avec succès !");
        }

        return $this->redirectToRoute('admin_flash_messages');
    }

    
}