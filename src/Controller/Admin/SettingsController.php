<?php

namespace App\Controller\Admin;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_ADMIN')]
#[Route('/admin/settings', name: 'admin_settings')]
class SettingsController extends AbstractController
{
    #[Route('/', name: '')]
    public function index(): Response
    {
        // Redirection vers la page de configuration
        return $this->redirectToRoute('admin_config_index');
    }
}