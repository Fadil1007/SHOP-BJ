<?php

namespace App\EventSubscriber;

use App\Repository\ProductRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Twig\Environment;

class CartProductsSubscriber implements EventSubscriberInterface
{
    private $twig;
    private $requestStack;
    private $productRepository;

    public function __construct(
        Environment $twig,
        RequestStack $requestStack,
        ProductRepository $productRepository
    ) {
        $this->twig = $twig;
        $this->requestStack = $requestStack;
        $this->productRepository = $productRepository;
    }

    public function onKernelController(ControllerEvent $event)
    {
        // Récupérer la session
        $session = $this->requestStack->getSession();
        
        // Récupérer le panier de la session
        $cart = $session->get('cart', []);
        
        // Si le panier n'est pas vide, récupérer les produits
        if (!empty($cart)) {
            $products = [];
            foreach (array_keys($cart) as $id) {
                $product = $this->productRepository->find($id);
                if ($product) {
                    $products[$id] = $product;
                }
            }
            
            // Ajouter les produits aux variables globales de Twig
            $this->twig->addGlobal('products', $products);
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}