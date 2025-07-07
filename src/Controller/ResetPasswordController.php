<?php

namespace App\Controller;

use App\Entity\ResetPassword;
use App\Entity\User;
use App\Form\ResetPasswordFormType;
use App\Form\ResetPasswordRequestFormType;
use App\Repository\ResetPasswordRepository;
use App\Repository\UserRepository;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAuthenticationException;

#[Route('/reset-password')]
class ResetPasswordController extends AbstractController
{
    #[Route('', name: 'app_forgot_password_request')]
    public function request(
        Request $request, 
        EmailService $emailService, 
        UserRepository $userRepository,
        ResetPasswordRepository $resetPasswordRepository,
        EntityManagerInterface $entityManager
    ): Response
    {
        // Créer et gérer le formulaire
        $form = $this->createForm(ResetPasswordRequestFormType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $email = $form->get('email')->getData();
            
            // Vérifier si l'utilisateur existe
            $user = $userRepository->findOneBy(['email' => $email]);
            
            // Générer un token même si l'utilisateur n'existe pas
            // pour éviter de divulguer des informations sur les comptes existants
            if ($user) {
                // Invalider les anciens tokens
                $resetPasswordRepository->invalidateTokens($email);
                
                // Créer un nouveau token
                $resetPassword = new ResetPassword();
                $resetPassword->setEmail($email);
                
                // Générer un token aléatoire
                $token = bin2hex(random_bytes(32));
                $resetPassword->setToken($token);
                
                $entityManager->persist($resetPassword);
                $entityManager->flush();
                
                // Envoyer l'email
                // Générer l'URL complète de réinitialisation
                $resetUrl = $this->generateUrl(
                    'app_reset_password', 
                    ['token' => $token], 
                    \Symfony\Component\Routing\Generator\UrlGeneratorInterface::ABSOLUTE_URL
                );
                
                try {
                    $emailService->sendPasswordResetEmail($user, $resetPassword);
                } catch (\Exception $e) {
                    // Log l'erreur mais continuer le processus
                    error_log('Erreur lors de l\'envoi du mail de réinitialisation : ' . $e->getMessage());
                }
            }

            // Rediriger vers la page de confirmation (même si l'utilisateur n'existe pas)
            return $this->redirectToRoute('app_check_email');
        }

        return $this->render('reset_password/request.html.twig', [
            'requestForm' => $form->createView(),
        ]);
    }

    #[Route('/check-email', name: 'app_check_email')]
    public function checkEmail(Request $request): Response
    {
        // Nettoyer les anciens flashbags qui pourraient causer des problèmes d'affichage
        $flashBag = $this->container->get('request_stack')->getSession()->getFlashBag();
        $flashBag->get('has_reset_token'); // Consommer le flashbag au lieu de peek
        $flashBag->get('reset_token'); // Consommer le flashbag au lieu de peek
        
        return $this->render('reset_password/check_email.html.twig');
    }

    
    
    #[Route('/reset/{token}', name: 'app_reset_password', methods: ['GET', 'POST'])]
    public function reset(
        Request $request, 
        string $token,
        UserPasswordHasherInterface $passwordHasher,
        ResetPasswordRepository $resetPasswordRepository,
        UserRepository $userRepository,
        EntityManagerInterface $entityManager
    ): Response
    {
        // Vérifier si le token existe dans la base de données (qu'il soit valide ou non)
        $resetPassword = $entityManager->getRepository(ResetPassword::class)
            ->findOneBy(['token' => $token]);
        
        // Si le token n'existe pas du tout
        if (!$resetPassword) {
            return $this->redirectToRoute('app_reset_token_invalid', [
                'reason' => 'not_found'
            ]);
        }
        
        // Si le token a déjà été utilisé
        if ($resetPassword->isUsed()) {
            return $this->redirectToRoute('app_reset_token_invalid', [
                'reason' => 'already_used'
            ]);
        }
        
        // Si le token est expiré
        if ($resetPassword->isExpired()) {
            return $this->redirectToRoute('app_reset_token_invalid', [
                'reason' => 'expired'
            ]);
        }
        
        // Valider le token (cette méthode vérifie à la fois l'expiration et l'utilisation)
        $validResetPassword = $resetPasswordRepository->findValidToken($token);
        
        if (!$validResetPassword) {
            return $this->redirectToRoute('app_reset_token_invalid', [
                'reason' => 'invalid'
            ]);
        }
        
        // Trouver l'utilisateur associé
        $user = $userRepository->findOneBy(['email' => $validResetPassword->getEmail()]);
        
        if (!$user) {
            return $this->redirectToRoute('app_reset_token_invalid', [
                'reason' => 'user_not_found'
            ]);
        }
        
        // Formulaire de réinitialisation de mot de passe
        $form = $this->createForm(ResetPasswordFormType::class);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            // Marquer le token comme utilisé
            $validResetPassword->markAsUsed();
            $entityManager->flush();
            
            // Mettre à jour le mot de passe
            $newPassword = $form->get('newPassword')->getData();
            $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
            $user->setPassword($hashedPassword);
            
            $entityManager->flush();
            
            // Nettoyer la session
            $session = $request->getSession();
            $session->remove('reset_password_token');
            
            // Redirection vers la page de connexion
            $this->addFlash('success', 'Votre mot de passe a été mis à jour avec succès. Vous pouvez maintenant vous connecter.');
            return $this->redirectToRoute('app_login');
        }
        
        return $this->render('reset_password/reset.html.twig', [
            'resetForm' => $form->createView(),
        ]);
    }
    
    #[Route('/reset-invalide', name: 'app_reset_token_invalid')]
    public function tokenInvalid(Request $request): Response
    {
        $reason = $request->query->get('reason', 'invalid');
        
        $messages = [
            'not_found' => 'Ce lien de réinitialisation n\'existe pas.',
            'already_used' => 'Ce lien de réinitialisation a déjà été utilisé.',
            'expired' => 'Ce lien de réinitialisation a expiré.',
            'invalid' => 'Ce lien de réinitialisation n\'est pas valide.',
            'user_not_found' => 'Aucun utilisateur trouvé pour cette adresse email.'
        ];
        
        $messageTitle = 'Lien de réinitialisation invalide';
        $messageText = $messages[$reason] ?? $messages['invalid'];
        
        return $this->render('reset_password/token_invalid.html.twig', [
            'message_title' => $messageTitle,
            'message_text' => $messageText
        ]);
    }
}