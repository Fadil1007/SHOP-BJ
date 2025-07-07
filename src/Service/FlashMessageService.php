<?php

namespace App\Service;

use App\Entity\FlashMessage;
use App\Repository\FlashMessageRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

class FlashMessageService
{
    private FlashMessageRepository $flashMessageRepository;
    private LoggerInterface $logger;
    private RequestStack $requestStack;

    public function __construct(FlashMessageRepository $flashMessageRepository, LoggerInterface $logger, RequestStack $requestStack)
    {
        $this->flashMessageRepository = $flashMessageRepository;
        $this->logger = $logger;
        $this->requestStack = $requestStack;
    }

    /**
     * Récupère les messages flash actifs pour une page donnée
     */
    public function getActiveMessages(?string $targetPage = null): array
    {
        try {
            $messages = $this->flashMessageRepository->findActiveMessages($targetPage);
            $this->logger->info('FlashMessageService: Found ' . count($messages) . ' active messages for page: ' . ($targetPage ?? 'all'));
            return $messages;
        } catch (\Exception $e) {
            $this->logger->error('FlashMessageService: Error fetching messages: ' . $e->getMessage());
            return [];
        }
    }

    /**
     * Détermine la page actuelle à partir de la route
     */
    public function getCurrentPageFromRoute(string $routeName): string
    {
        $pageMapping = [
            'app_home' => 'app_home',
            'product_list' => 'product_list',
            'product_show' => 'product_show',
            'category_show' => 'category_show',
            'cart_index' => 'cart_index',
            'checkout_index' => 'checkout_index',
            'contact_index' => 'contact_index',
        ];

        $page = $pageMapping[$routeName] ?? 'all';
        $this->logger->info('FlashMessageService: Route "' . $routeName . '" mapped to page "' . $page . '"');
        return $page;
    }

    /**
     * Crée un nouveau message flash
     */
    public function createFlashMessage(
        string $title,
        string $message,
        string $type,
        string $targetPages = 'all',
        bool $isActive = true
    ): FlashMessage {
        $flashMessage = new FlashMessage();
        $flashMessage->setTitle($title);
        $flashMessage->setMessage($message);
        $flashMessage->setType($type);
        $flashMessage->setTargetPages($targetPages);
        $flashMessage->setIsActive($isActive);
        $flashMessage->setCreatedAt(new \DateTime());

        $this->flashMessageRepository->save($flashMessage, true);

        return $flashMessage;
    }

    /**
     * Active/désactive un message flash
     */
    public function toggleFlashMessage(FlashMessage $flashMessage): void
    {
        $flashMessage->setIsActive(!$flashMessage->isActive());
        $this->flashMessageRepository->save($flashMessage, true);
    }

    /**
     * Supprime un message flash
     */
    public function deleteFlashMessage(FlashMessage $flashMessage): void
    {
        $this->flashMessageRepository->remove($flashMessage, true);
    }
}