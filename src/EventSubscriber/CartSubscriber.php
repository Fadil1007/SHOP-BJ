<?php

namespace App\EventSubscriber;

use App\Entity\User;
use App\Repository\CartItemRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Security\Core\Security;
use Twig\Environment;

class CartSubscriber implements EventSubscriberInterface
{
    private $security;
    private $cartItemRepository;
    private $twig;

    public function __construct(
        Security $security,
        CartItemRepository $cartItemRepository,
        Environment $twig
    ) {
        $this->security = $security;
        $this->cartItemRepository = $cartItemRepository;
        $this->twig = $twig;
    }

    public function onKernelController(ControllerEvent $event)
    {
        if (!$event->isMainRequest()) {
            return;
        }
        
        $cartCount = 0;
        
        // Si l'utilisateur est connecté, utilisez les éléments du panier de la base de données
        $user = $this->security->getUser();
        if ($user instanceof User) {
            $cartItems = $this->cartItemRepository->findBy(['user' => $user]);
            foreach ($cartItems as $item) {
                $cartCount += $item->getQuantity();
            }
        } else {
            // Si l'utilisateur n'est pas connecté, utilisez les éléments du panier de la session
            $session = $event->getRequest()->getSession();
            $cart = $session->get('cart', []);
            foreach ($cart as $quantity) {
                $cartCount += $quantity;
            }
        }
        
        // Ajoute le nombre d'éléments du panier comme variable globale à Twig
        $this->twig->addGlobal('cart_count', $cartCount);
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}