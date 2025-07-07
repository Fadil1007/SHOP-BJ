<?php

namespace App\EventSubscriber;

use App\Repository\FlashMessageRepository;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Twig\Environment;

class AdminFlashMessageSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private readonly FlashMessageRepository $flashMessageRepository,
        private readonly Environment $twig
    ) {
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
        
        // Ne pas afficher les messages flash sur les pages d'administration
        if (str_starts_with($request->getPathInfo(), '/admin')) {
            return;
        }

        // Déterminer la page actuelle
        $currentPage = $this->determineCurrentPage($request->getPathInfo());
        
        // Récupérer les messages flash actifs pour cette page
        $adminFlashMessages = $this->flashMessageRepository->findActiveMessages($currentPage);
        
        // Ajouter les messages flash comme variable globale Twig
        $this->twig->addGlobal('admin_flash_messages', $adminFlashMessages);
    }

    private function determineCurrentPage(string $pathInfo): string
    {
        if ($pathInfo === '/' || $pathInfo === '/home') {
            return 'home';
        }
        
        if (str_starts_with($pathInfo, '/product')) {
            return 'products';
        }
        
        if (str_starts_with($pathInfo, '/category')) {
            return 'categories';
        }
        
        return 'all';
    }
}
