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
 * Contrôleur pour gérer les logos dans l'administration
 */
#[Route('/admin/custom')]
class LogoController extends AbstractController
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
     * Page pour sélectionner le logo
     */
    #[Route('/logo-selector', name: 'admin_logo_selector')]
    public function logoSelector(): Response
    {
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_home');
        }
        
        $currentLogo = $this->getCurrentLogoPath();
        
        return $this->render('admin/logo_selector.html.twig', [
            'current_logo' => $currentLogo
        ]);
    }
    
    /**
     * Mise à jour du logo
     */
    #[Route('/update-logo', name: 'admin_update_logo', methods: ['POST'])]
    public function updateLogo(Request $request): Response
    {
        if (!$this->security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_home');
        }
        
        $logoPath = $request->request->get('logo_path');
        
        // Valider le chemin du logo
        $validLogoPaths = [
            'uploads/logo/logo-geometric.svg',
            'uploads/logo/logo-new.svg', 
            'uploads/logo/logo-minimal.svg',
            'uploads/logo/logo-fashion.svg',
            'uploads/logo/logo-elegant.svg',
            'uploads/logo/logo-luxury.svg'
        ];
        
        if (!in_array($logoPath, $validLogoPaths)) {
            $this->addFlash('danger', 'Chemin de logo invalide');
            return $this->redirectToRoute('admin_logo_selector');
        }
        
        // Sauvegarder le nouveau logo
        $this->saveLogoPath($logoPath);
        
        $this->addFlash('success', 'Le logo a été mis à jour avec succès');
        return $this->redirectToRoute('admin_logo_selector');
    }
    
    /**
     * Obtient le chemin actuel du logo depuis le fichier de configuration
     */
    private function getCurrentLogoPath(): string
    {
        $filesystem = new Filesystem();
        
        if (!$filesystem->exists($this->configPath)) {
            // Créer le fichier s'il n'existe pas
            $config = ['site' => ['logo' => 'uploads/logo/logo-geometric.svg']];
            $yaml = Yaml::dump($config);
            $filesystem->dumpFile($this->configPath, $yaml);
            return 'uploads/logo/logo-geometric.svg';
        }
        
        $config = Yaml::parseFile($this->configPath);
        return $config['site']['logo'] ?? 'uploads/logo/logo-geometric.svg';
    }
    
    /**
     * Sauvegarde le chemin du logo dans le fichier de configuration
     */
    private function saveLogoPath(string $logoPath): void
    {
        $filesystem = new Filesystem();
        
        if (!$filesystem->exists($this->configPath)) {
            $config = ['site' => ['logo' => $logoPath]];
        } else {
            $config = Yaml::parseFile($this->configPath);
            if (!isset($config['site'])) {
                $config['site'] = [];
            }
            $config['site']['logo'] = $logoPath;
        }
        
        $yaml = Yaml::dump($config);
        $filesystem->dumpFile($this->configPath, $yaml);
    }
}