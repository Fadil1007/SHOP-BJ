<?php

namespace App\Controller\Admin;

use App\Entity\Contact;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/admin/contact')]
class ContactAdminController extends AbstractController
{
    private ContactRepository $contactRepository;
    private RequestStack $requestStack;

    public function __construct(ContactRepository $contactRepository, RequestStack $requestStack)
    {
        $this->contactRepository = $contactRepository;
        $this->requestStack = $requestStack;
    }

    /**
     * Retourne le nombre de messages non lus
     * Utilisé pour l'affichage d'un compteur dans le menu
     */
    public function getUnreadCount(): int
    {
        return $this->contactRepository->count(['isRead' => false]);
    }

    #[Route('/', name: 'app_admin_contact_index')]
    public function index(): Response
    {
        // Récupérer tous les messages de contact, triés par date décroissante
        $contacts = $this->contactRepository->findBy([], ['createdAt' => 'DESC']);

        // Compter les messages non lus
        $unreadCount = $this->contactRepository->count(['isRead' => false]);

        // Initialiser le compteur pour les notifications JavaScript
        $session = $this->requestStack->getSession();
        $session->set('unread_contact_count', $unreadCount);
        $session->set('last_known_unread_count', $unreadCount);

        return $this->render('admin/contact/index.html.twig', [
            'contacts' => $contacts,
            'unreadCount' => $unreadCount
        ]);
    }

    #[Route('/check-new-messages', name: 'app_admin_contact_check_new', methods: ['GET'])]
    public function checkNewMessages(): Response
    {
        // Cette route est appelée périodiquement par JavaScript pour vérifier les nouveaux messages
        $unreadCount = $this->contactRepository->count(['isRead' => false]);

        // On récupère le dernier message stocké dans la session
        $session = $this->requestStack->getSession();
        $lastKnownCount = $session->get('last_known_unread_count', 0);

        // On détermine s'il y a de nouveaux messages
        $hasNewMessages = $unreadCount > $lastKnownCount;

        // On met à jour le compteur en session
        $session->set('unread_contact_count', $unreadCount);
        $session->set('last_known_unread_count', $unreadCount);

        // On renvoie une réponse JSON
        return $this->json([
            'unreadCount' => $unreadCount,
            'hasNewMessages' => $hasNewMessages
        ]);
    }

    #[Route('/{id}', name: 'app_admin_contact_show', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function show(Contact $contact): Response
    {
        // Marquer le message comme lu s'il ne l'est pas déjà
        if (!$contact->isRead()) {
            $contact->setIsRead(true);
            $this->contactRepository->save($contact, true);
        }

        return $this->render('admin/contact/show.html.twig', [
            'contact' => $contact
        ]);
    }

    #[Route('/{id}/delete', name: 'app_admin_contact_delete', methods: ['POST'])]
    public function delete(Request $request, Contact $contact): Response
    {
        // Vérifier le token CSRF
        if ($this->isCsrfTokenValid('delete'.$contact->getId(), $request->request->get('_token'))) {
            $this->contactRepository->remove($contact, true);
            $this->addFlash('success', 'Le message a été supprimé avec succès.');
        }

        return $this->redirectToRoute('app_admin_contact_index');
    }

    #[Route('/{id}/mark-as-read', name: 'app_admin_contact_mark_read', methods: ['POST'])]
    public function markAsRead(Request $request, Contact $contact): Response
    {
        // Vérifier le token CSRF
        if ($this->isCsrfTokenValid('mark_read'.$contact->getId(), $request->request->get('_token'))) {
            $contact->setIsRead(true);
            $this->contactRepository->save($contact, true);
            $this->addFlash('success', 'Le message a été marqué comme lu.');
        }

        return $this->redirectToRoute('app_admin_contact_index');
    }

    #[Route('/{id}/mark-as-unread', name: 'app_admin_contact_mark_unread', methods: ['POST'])]
    public function markAsUnread(Request $request, Contact $contact): Response
    {
        // Vérifier le token CSRF
        if ($this->isCsrfTokenValid('mark_unread'.$contact->getId(), $request->request->get('_token'))) {
            $contact->setIsRead(false);
            $this->contactRepository->save($contact, true);
            $this->addFlash('success', 'Le message a été marqué comme non lu.');
        }

        return $this->redirectToRoute('app_admin_contact_index');
    }
}