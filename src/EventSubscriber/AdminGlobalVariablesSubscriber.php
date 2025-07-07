<?php

namespace App\EventSubscriber;

use App\Controller\Admin\ContactAdminController;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class AdminGlobalVariablesSubscriber implements EventSubscriberInterface
{
    private TokenStorageInterface $tokenStorage;
    private AuthorizationCheckerInterface $authChecker;
    private RequestStack $requestStack;
    private ?ContactAdminController $contactController;

    public function __construct(
        TokenStorageInterface $tokenStorage,
        AuthorizationCheckerInterface $authChecker,
        RequestStack $requestStack,
        ?ContactAdminController $contactController = null
    ) {
        $this->tokenStorage = $tokenStorage;
        $this->authChecker = $authChecker;
        $this->requestStack = $requestStack;
        $this->contactController = $contactController;
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }

    public function onKernelController(ControllerEvent $event): void
    {
        $request = $event->getRequest();
        
        // Vérifier si l'utilisateur est un administrateur
        if ($this->tokenStorage->getToken() && 
            $this->authChecker->isGranted('ROLE_ADMIN')) {
            
            // Charger le compteur de messages non lus si le service est disponible
            if ($this->contactController) {
                $unreadCount = $this->contactController->getUnreadCount();
                
                // Stocker le compteur dans la session pour l'utiliser dans les templates
                $session = $this->requestStack->getSession();
                $session->set('unread_contact_count', $unreadCount);
            }
        }
    }
}