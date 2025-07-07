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
 * Abonné d'événement pour fournir la configuration du logo à Twig
 */
class LogoConfigSubscriber implements EventSubscriberInterface
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
     * Ajoute la configuration du logo aux variables globales de Twig
     */
    public function onKernelController(ControllerEvent $event): void
    {
        $logoPath = $this->getLogoPath();
        
        // Ajoute les variables globales
        $this->twig->addGlobal('site_logo', $logoPath);
    }
    
    /**
     * Récupère le chemin du logo depuis la configuration
     */
    private function getLogoPath(): string
    {
        $configPath = $this->projectDir . '/config/app_config.yaml';
        
        try {
            if (file_exists($configPath)) {
                $config = Yaml::parseFile($configPath);
                if (isset($config['site']['logo'])) {
                    return $config['site']['logo'];
                }
            }
        } catch (ParseException $e) {
            // En cas d'erreur, utilise le logo par défaut
        }
        
        // Logo par défaut si la configuration n'existe pas
        return 'uploads/logo/logo-geometric.svg';
    }
}