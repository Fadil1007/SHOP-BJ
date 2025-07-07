<?php

namespace App\EventSubscriber;

use App\Service\FlashMessageService;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;

class FlashMessageSubscriber implements EventSubscriberInterface
{
    private FlashMessageService $flashMessageService;

    public function __construct(FlashMessageService $flashMessageService)
    {
        $this->flashMessageService = $flashMessageService;
    }

    public function onKernelController(ControllerEvent $event): void
    {
        if (!$event->isMainRequest()) {
            return;
        }

        $request = $event->getRequest();
        $routeName = $request->attributes->get('_route', '');

        // Ne rien injecter dans l’administration
        if (str_starts_with($routeName, 'admin_')) {
            return;
        }

        $currentPage = $this->flashMessageService->getCurrentPageFromRoute($routeName);
        $messages = $this->flashMessageService->getActiveMessages($currentPage);

        // On injecte dans les attributs de la requête pour le récupérer dans les templates
        $request->attributes->set('flashMessagesPublic', $messages);
    }

    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
}
