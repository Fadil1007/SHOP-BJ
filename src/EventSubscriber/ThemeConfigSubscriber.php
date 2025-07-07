<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ControllerEvent;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Twig\Environment;

/**
 * Abonné d'événement pour fournir la configuration du site à Twig
 */
class ThemeConfigSubscriber implements EventSubscriberInterface
{
    private $twig;
    private $projectDir;
    
    /**
     * Constructeur avec dépendances
     */
    public function __construct(Environment $twig, ParameterBagInterface $parameterBag)
    {
        $this->twig = $twig;
        $this->projectDir = $parameterBag->get('kernel.project_dir');
    }
    
    /**
     * Événements auxquels s'abonner
     */
    public static function getSubscribedEvents(): array
    {
        return [
            KernelEvents::CONTROLLER => 'onKernelController',
        ];
    }
    
    /**
     * Ajoute la configuration du site aux variables globales de Twig
     */
    public function onKernelController(ControllerEvent $event): void
    {
        $siteConfig = $this->getSiteConfig();
        
        // Ajoute les variables globales
        $this->twig->addGlobal('site_name', $siteConfig['name'] ?? 'SHOP BJ');
        $this->twig->addGlobal('site_logo', $siteConfig['logo'] ?? 'uploads/logo/logo-shop-bj.svg');
        
        // On n'utilise plus les thèmes multiples, on garde uniquement le CSS de base
        $this->twig->addGlobal('theme_css_path', '');
    }
    
    /**
     * Récupère la configuration du site depuis le fichier
     */
    private function getSiteConfig(): array
    {
        $configPath = $this->projectDir . '/config/app_config.yaml';
        
        try {
            if (file_exists($configPath)) {
                $config = Yaml::parseFile($configPath);
                if (isset($config['site'])) {
                    return $config['site'];
                }
            }
        } catch (ParseException $e) {
            // En cas d'erreur, retourne une configuration par défaut
        }
        
        // Configuration par défaut si le fichier n'existe pas ou n'est pas valide
        return [
            'name' => 'SHOP BJ',
            'logo' => 'uploads/logo/logo-shop-bj.svg'
        ];
    }
}