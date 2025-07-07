<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Filesystem\Filesystem;

/**
 * Contrôleur pour gérer les préférences du site dans l'administration
 */
#[Route('/admin/custom')]
class ThemeController extends AbstractController
{
    private $security;
    private $configPath;
    
    /**
     * Constructeur avec dépendance de sécurité
     */
    public function __construct(Security $security)
    {
        $this->security = $security;
        $this->configPath = __DIR__ . '/../../../config/app_config.yaml';
    }
    
    /**
     * Page pour afficher les options du thème
     */
    #[Route('/theme-selector', name: 'admin_theme_selector')]
    public function themeSelector(): Response
    {
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_home');
        }
        
        // Obtient les informations du fichier de configuration actuel
        $config = $this->getConfig();
        
        return $this->render('admin/theme_selector.html.twig', [
            'site_name' => $config['site']['name'] ?? 'SHOP BJ',
            'site_logo' => $config['site']['logo'] ?? 'uploads/logo/logo-geometric.svg'
        ]);
    }
    
    /**
     * Obtient la configuration depuis le fichier
     */
    private function getConfig(): array
    {
        $filesystem = new Filesystem();
        
        if (!$filesystem->exists($this->configPath)) {
            // Créer le fichier s'il n'existe pas
            $config = [
                'site' => [
                    'name' => 'SHOP BJ',
                    'logo' => 'uploads/logo/logo-geometric.svg',
                    'theme' => 'default'
                ]
            ];
            $yaml = Yaml::dump($config);
            $filesystem->dumpFile($this->configPath, $yaml);
            return $config;
        }
        
        return Yaml::parseFile($this->configPath);
    }
}