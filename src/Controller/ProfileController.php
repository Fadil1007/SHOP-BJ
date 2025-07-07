<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\ChangePasswordFormType;
use App\Form\ProfileFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[Route('/profile')]
class ProfileController extends AbstractController
{
    #[Route('/', name: 'app_profile')]
    public function index(): Response
    {
        return $this->render('profile/index.html.twig');
    }
    
    #[Route('/edit', name: 'app_profile_edit')]
    public function edit(Request $request, EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }
        
        $form = $this->createForm(ProfileFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Pas besoin de persist() car l'entité est déjà gérée par Doctrine
            $entityManager->flush();
            
            $this->addFlash('success', 'Vos informations personnelles ont été mises à jour avec succès.');
            
            return $this->redirectToRoute('app_profile');
        }

        return $this->render('profile/edit.html.twig', [
            'profileForm' => $form->createView(),
        ]);
    }
    
    #[Route('/orders', name: 'app_profile_orders')]
    public function orders(): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }
        $orders = $user->getOrders();
        
        return $this->render('profile/orders.html.twig', [
            'orders' => $orders,
        ]);
    }
    
    #[Route('/orders/{id}', name: 'app_profile_order_show')]
    public function showOrder(int $id): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        if (!$user instanceof User) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }
        $order = null;
        
        // Récupérer la commande parmi les commandes de l'utilisateur
        foreach ($user->getOrders() as $userOrder) {
            if ($userOrder->getId() == $id) {
                $order = $userOrder;
                break;
            }
        }
        
        // Si la commande n'existe pas ou n'appartient pas à l'utilisateur
        if (!$order) {
            $this->addFlash('error', 'La commande demandée n\'existe pas ou ne vous appartient pas.');
            return $this->redirectToRoute('app_profile_orders');
        }
        
        return $this->render('profile/order_show.html.twig', [
            'order' => $order,
        ]);
    }
    
    #[Route('/password', name: 'app_profile_change_password')]
    public function changePassword(Request $request, UserPasswordHasherInterface $passwordHasher, EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        if (!$user) {
            throw $this->createAccessDeniedException('Vous devez être connecté pour accéder à cette page.');
        }
        
        $form = $this->createForm(ChangePasswordFormType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier que le mot de passe actuel est correct
            $currentPassword = $form->get('currentPassword')->getData();
            if (!$passwordHasher->isPasswordValid($user, $currentPassword)) {
                $this->addFlash('error', 'Le mot de passe actuel est incorrect.');
                return $this->redirectToRoute('app_profile_change_password');
            }
            
            // Hacher le nouveau mot de passe
            $newPassword = $form->get('newPassword')->getData();
            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($hashedPassword);
            
            $entityManager->flush();
            
            $this->addFlash('success', 'Votre mot de passe a été modifié avec succès.');
            return $this->redirectToRoute('app_profile');
        }
        
        return $this->render('profile/change_password.html.twig', [
            'changePasswordForm' => $form->createView(),
        ]);
    }
}