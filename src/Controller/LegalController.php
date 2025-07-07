<?php

namespace App\Controller;

use App\Repository\SiteConfigRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LegalController extends AbstractController
{
    private $siteConfigRepository;

    public function __construct(SiteConfigRepository $siteConfigRepository)
    {
        $this->siteConfigRepository = $siteConfigRepository;
    }

    #[Route('/politique-de-confidentialite', name: 'privacy_policy')]
    public function privacyPolicy(): Response
    {
        $content = $this->siteConfigRepository->getConfigValue('privacy_policy');
        
        return $this->render('legal/privacy_policy.html.twig', [
            'content' => $content,
        ]);
    }

    #[Route('/mentions-legales', name: 'legal_notice')]
    public function legalNotice(): Response
    {
        $content = $this->siteConfigRepository->getConfigValue('legal_notice');
        
        return $this->render('legal/legal_notice.html.twig', [
            'content' => $content,
        ]);
    }

    #[Route('/conditions-generales-de-vente', name: 'terms_of_service')]
    public function termsOfService(): Response
    {
        $content = $this->siteConfigRepository->getConfigValue('terms_of_service');
        
        return $this->render('legal/terms_of_service.html.twig', [
            'content' => $content,
        ]);
    }
}