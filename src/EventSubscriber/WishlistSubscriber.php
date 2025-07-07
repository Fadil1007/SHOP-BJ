<?php

namespace App\EventSubscriber;

use App\Entity\User;
use App\Repository\WishlistRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Security;
use Twig\Environment;

class WishlistSubscriber implements EventSubscriberInterface
{
    private $security;
    private $wishlistRepository;
    private $twig;

    public function __construct(
        Security $security,
        WishlistRepository $wishlistRepository,
        Environment $twig
    ) {
        $this->security = $security;
        $this->wishlistRepository = $wishlistRepository;
        $this->twig = $twig;
    }

    public function onKernelController(ControllerEvent $event)
    {
        if (!$event->isMainRequest()) {
            return;
        }
        
        $wishlistCount = 0;
        
        // Si l'utilisateur est connecté, récupérez le nombre d'éléments dans sa liste de favoris
        $user = $this->security->getUser();
        if ($user instanceof User) {
            $wishlistCount = $this->wishlistRepository->countByUser($user);
        }
        
        // Ajoute le nombre d'éléments des favoris comme variable globale à Twig
        $this->twig->addGlobal('wishlist_count', $wishlistCount);
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}