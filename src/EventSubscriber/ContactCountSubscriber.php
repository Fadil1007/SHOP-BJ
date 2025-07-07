<?php

namespace App\EventSubscriber;

use App\Repository\ContactRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Security;

class ContactCountSubscriber implements EventSubscriberInterface
{
    private $contactRepository;
    private $security;

    public function __construct(ContactRepository $contactRepository, Security $security)
    {
        $this->contactRepository = $contactRepository;
        $this->security = $security;
    }

    public function onKernelRequest(RequestEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        $session = $request->getSession();
        
        // On vérifie d'abord si l'utilisateur est connecté
        if (!$this->security->getUser()) {
            return;
        }
        
        // Seulement pour les utilisateurs authentifiés avec le rôle ADMIN
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            return;
        }

        // Routes de l'admin pour lesquelles on ne veut pas recalculer le compteur
        // (pour éviter de surcharger la base de données avec des requêtes inutiles)
        $adminRoutes = ['admin_contact_index', 'admin_contact_show', 'admin_contact_delete', 'admin_contact_mark_all_read'];
        $currentRoute = $request->attributes->get('_route');
        
        // Si on n'est pas sur une route qui met à jour les contacts ou si on est sur la page index des contacts
        if (!in_array($currentRoute, $adminRoutes) || $currentRoute === 'admin_contact_index') {
            try {
                // Récupérer le nombre de messages non lus
                $unreadCount = $this->contactRepository->countUnread();
                // Stocker en session
                $session->set('unread_contact_count', $unreadCount);
            } catch (\Exception $e) {
                // Si une erreur se produit, on ne fait rien
                // Initialiser à 0 si c'est la première fois
                if (!$session->has('unread_contact_count')) {
                    $session->set('unread_contact_count', 0);
                }
            }
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::REQUEST => ['onKernelRequest', 0],
        ];
    }
}