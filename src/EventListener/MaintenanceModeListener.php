<?php

namespace App\EventListener;

use App\Repository\SiteConfigRepository;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Event\RequestEvent;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Twig\Environment;

/**
 * Écouteur d'événements pour gérer le mode maintenance du site
 */
class MaintenanceModeListener
{
    private $siteConfigRepository;
    private $twig;
    private $tokenStorage;
    private $logger;
    private $urlGenerator;

    /**
     * Liste des chemins toujours accessibles, même en mode maintenance
     */
    private const ALLOWED_PATHS = [
        '^/connexion',
        '^/login',
        '^/deconnexion',
        '^/logout',
        '^/admin'
    ];

    /**
     * Liste des patterns pour les ressources statiques
     */
    private const STATIC_RESOURCES = [
        '^/css',
        '^/js',
        '^/uploads',
        '^/bundles',
        '^/favicon',
        '^/images'
    ];

    public function __construct(
        SiteConfigRepository $siteConfigRepository,
        Environment $twig,
        TokenStorageInterface $tokenStorage,
        UrlGeneratorInterface $urlGenerator,
        LoggerInterface $logger = null
    ) {
        $this->siteConfigRepository = $siteConfigRepository;
        $this->twig = $twig;
        $this->tokenStorage = $tokenStorage;
        $this->urlGenerator = $urlGenerator;
        $this->logger = $logger;
    }

    /**
     * Méthode appelée sur chaque requête HTTP
     */
    public function onKernelRequest(RequestEvent $event): void
    {
        // Ne traiter que les requêtes principales
        if (!$event->isMainRequest()) {
            return;
        }

        // Ne rien faire si le mode maintenance n'est pas activé
        if (!$this->siteConfigRepository->isMaintenanceMode()) {
            return;
        }

        $request = $event->getRequest();
        $path = $request->getPathInfo();
        
        // ÉTAPE 1: Vérifier si l'URL fait partie des URLs toujours autorisées
        foreach (self::ALLOWED_PATHS as $pattern) {
            if (preg_match('#' . $pattern . '#', $path)) {
                // Accès autorisé pour cette URL
                return;
            }
        }
        
        // ÉTAPE 2: Vérifier si c'est une ressource statique
        foreach (self::STATIC_RESOURCES as $pattern) {
            if (preg_match('#' . $pattern . '#', $path)) {
                // Accès autorisé pour les ressources statiques
                return;
            }
        }

        // ÉTAPE 3: Vérifier si l'utilisateur est connecté et qu'il est admin
        $user = $this->getUser();
        if ($user && $this->isAdmin($user)) {
            // Si c'est un admin, tout autoriser
            if ($this->logger) {
                $this->logger->info('Admin access granted in maintenance mode: ' . $user->getUserIdentifier());
            }
            return;
        }

        // ÉTAPE 4: Si ce n'est pas une URL autorisée et que l'utilisateur n'est pas admin,
        // afficher la page de maintenance
        $content = $this->twig->render('maintenance.html.twig');
        $response = new Response($content, Response::HTTP_SERVICE_UNAVAILABLE);
        $event->setResponse($response);
    }

    /**
     * Récupère l'utilisateur actuellement connecté
     */
    private function getUser(): ?UserInterface
    {
        try {
            $token = $this->tokenStorage->getToken();
            if (!$token) {
                return null;
            }

            $user = $token->getUser();
            if (!$user instanceof UserInterface) {
                return null;
            }

            return $user;
        } catch (\Exception $e) {
            if ($this->logger) {
                $this->logger->error('Error getting user: ' . $e->getMessage());
            }
            return null;
        }
    }

    /**
     * Vérifie si l'utilisateur a le rôle ROLE_ADMIN
     */
    private function isAdmin(UserInterface $user): bool
    {
        try {
            if (method_exists($user, 'getRoles')) {
                return in_array('ROLE_ADMIN', $user->getRoles());
            }
        } catch (\Exception $e) {
            if ($this->logger) {
                $this->logger->error('Error checking admin role: ' . $e->getMessage());
            }
        }
        
        return false;
    }
}