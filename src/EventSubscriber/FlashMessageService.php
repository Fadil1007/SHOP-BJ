<?php

namespace App\EventSubscriber;

use App\Repository\FlashMessageRepository;

class FlashMessageService
{
    private FlashMessageRepository $flashMessageRepository;

    public function __construct(FlashMessageRepository $flashMessageRepository)
    {
        $this->flashMessageRepository = $flashMessageRepository;
    }

    /**
     * Récupère les messages flash actifs pour une page donnée
     */
    public function getActiveMessages(?string $currentPage = null): array
    {
        $messages = $this->flashMessageRepository->findActiveMessages($currentPage);
        
        // Filtrer les messages selon leur période d'affichage
        return array_filter($messages, function($message) {
            return $message->shouldDisplay();
        });
    }

    /**
     * Détermine la page actuelle basée sur la route
     */
    public function getCurrentPageFromRoute(string $routeName): string
    {
        $pageMapping = [
            'app_home' => 'home',
            'app_product_index' => 'products',
            'app_product_show' => 'products',
            'app_category_show' => 'categories',
            'app_cart_index' => 'cart',
            'app_checkout_index' => 'checkout',
        ];

        return $pageMapping[$routeName] ?? 'all';
    }
}
