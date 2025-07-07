<?php

namespace App\Controller\Admin;

use App\Repository\SiteConfigRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/config', name: 'admin_config_')]
class ConfigController extends AbstractController
{
    private const ENV_LOCAL_PATH = '.env.local';
    private $siteConfigRepository;

    public function __construct(SiteConfigRepository $siteConfigRepository)
    {
        $this->siteConfigRepository = $siteConfigRepository;
    }

    #[Route('/', name: 'index')]
    public function index(Request $request): Response
    {
        $maintenanceMode = $this->siteConfigRepository->getConfigValue('maintenance_mode') === 'true';
        $privacyPolicy = $this->siteConfigRepository->getConfigValue('privacy_policy');
        $legalNotice = $this->siteConfigRepository->getConfigValue('legal_notice');
        $termsOfService = $this->siteConfigRepository->getConfigValue('terms_of_service');
        
        // Traitement du formulaire de politique de confidentialité
        if ($request->isMethod('POST') && $request->request->has('privacy_policy_form')) {
            if ($this->isCsrfTokenValid('privacy_policy_update', $request->request->get('_token'))) {
                $this->siteConfigRepository->setConfigValue('privacy_policy', $request->request->get('privacy_policy'));
                $this->addFlash('success', 'La politique de confidentialité a été mise à jour');
                return $this->redirectToRoute('admin_config_index');
            }
        }
        
        // Traitement du formulaire de mentions légales
        if ($request->isMethod('POST') && $request->request->has('legal_notice_form')) {
            if ($this->isCsrfTokenValid('legal_notice_update', $request->request->get('_token'))) {
                $this->siteConfigRepository->setConfigValue('legal_notice', $request->request->get('legal_notice'));
                $this->addFlash('success', 'Les mentions légales ont été mises à jour');
                return $this->redirectToRoute('admin_config_index');
            }
        }
        
        // Traitement du formulaire de conditions générales de vente
        if ($request->isMethod('POST') && $request->request->has('terms_of_service_form')) {
            if ($this->isCsrfTokenValid('terms_of_service_update', $request->request->get('_token'))) {
                $this->siteConfigRepository->setConfigValue('terms_of_service', $request->request->get('terms_of_service'));
                $this->addFlash('success', 'Les conditions générales de vente ont été mises à jour');
                return $this->redirectToRoute('admin_config_index');
            }
        }

        // Lire l'adresse email admin actuelle
        $adminEmail = $_ENV['ADMIN_EMAIL'] ?? 'non configurée';
        
        // Traitement du formulaire de mise à jour de l'email admin
        if ($request->isMethod('POST') && $request->request->has('admin_email_form')) {
            if ($this->isCsrfTokenValid('admin_email_update', $request->request->get('_token'))) {
                $newAdminEmail = $request->request->get('admin_email');
                $this->updateEnvFile('ADMIN_EMAIL', $newAdminEmail);
                $this->addFlash('success', 'L\'adresse email de l\'administrateur a été mise à jour');
                return $this->redirectToRoute('admin_config_index');
            }
        }
        
        return $this->render('admin/config/index.html.twig', [
            'maintenance_mode' => $maintenanceMode,
            'privacy_policy' => $privacyPolicy,
            'legal_notice' => $legalNotice,
            'terms_of_service' => $termsOfService,
            'admin_email' => $adminEmail
        ]);
    }

    #[Route('/maintenance/toggle', name: 'maintenance_toggle', methods: ['POST'])]
    public function toggleMaintenanceMode(Request $request): Response
    {
        if ($this->isCsrfTokenValid('maintenance_toggle', $request->request->get('_token'))) {
            $currentValue = $this->siteConfigRepository->getConfigValue('maintenance_mode');
            $newValue = ($currentValue === 'true') ? 'false' : 'true';
            
            $this->siteConfigRepository->setConfigValue('maintenance_mode', $newValue);
            
            $status = $newValue === 'true' ? 'activé' : 'désactivé';
            $this->addFlash('success', 'Le mode maintenance a été ' . $status);
        } else {
            $this->addFlash('error', 'Token CSRF invalide');
        }
        
        return $this->redirectToRoute('admin_config_index');
    }
    
    /**
     * Met à jour une variable d'environnement dans le fichier .env.local
     */
    private function updateEnvFile(string $key, string $value): bool
    {
        // Chemin vers le fichier .env.local
        $envFilePath = $this->getParameter('kernel.project_dir') . '/' . self::ENV_LOCAL_PATH;
        
        // Si le fichier n'existe pas, on ne fait rien
        if (!file_exists($envFilePath)) {
            return false;
        }
        
        // Lire le contenu actuel du fichier
        $content = file_get_contents($envFilePath);
        
        // Encodage de la valeur pour respecter le format .env
        $value = str_replace('"', '\\"', $value);
        $value = '"' . $value . '"';
        
        // Mettre à jour ou ajouter la variable
        $pattern = '/^' . preg_quote($key) . '=.*/m';
        $newLine = $key . '=' . $value;
        
        if (preg_match($pattern, $content)) {
            // Remplacer la variable existante
            $newContent = preg_replace($pattern, $newLine, $content);
        } else {
            // Ajouter la variable à la fin du fichier
            $newContent = $content . PHP_EOL . $newLine . PHP_EOL;
        }
        
        // Écrire le contenu modifié dans le fichier
        file_put_contents($envFilePath, $newContent);
        
        // Mise à jour de la variable d'environnement pour la session en cours
        $_ENV[$key] = $value;
        
        return true;
    }
}