<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\LoginFormAuthenticator;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class SecurityController extends AbstractController
{
    #[Route('/mot-de-passe-oublie', name: 'app_forgot_password')]
    public function forgotPassword(): Response
    {
        // Rediriger vers la nouvelle route de réinitialisation de mot de passe
        return $this->redirectToRoute('app_forgot_password_request');
    }
    
    #[Route('/inscription', name: 'app_register')]
    public function register(
        Request $request, 
        UserPasswordHasherInterface $userPasswordHasher, 
        EntityManagerInterface $entityManager,
        EmailService $emailService,
        UserAuthenticatorInterface $userAuthenticator,
        LoginFormAuthenticator $loginFormAuthenticator
    ): Response
    {
        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $entityManager->persist($user);
            $entityManager->flush();
            
            // Journal de débogage avant l'envoi
            error_log("Tentative d'envoi d'email de bienvenue à : " . $user->getEmail());
            
            try {
                // Envoyer l'email de bienvenue
                $emailSent = $emailService->sendWelcomeEmail($user);
                
                // Journal de débogage après l'envoi
                error_log("Résultat de l'envoi d'email de bienvenue : " . ($emailSent ? "Succès" : "Échec"));
                
                if ($emailSent) {
                    $this->addFlash('success', 'Votre compte a bien été créé. Un email de bienvenue vous a été envoyé.');
                } else {
                    $this->addFlash('warning', 'Votre compte a bien été créé, mais l\'email de bienvenue n\'a pas pu être envoyé.');
                }
            } catch (\Exception $e) {
                // Journaliser l'exception
                error_log("Exception lors de l'envoi de l'email de bienvenue : " . $e->getMessage());
                $this->addFlash('success', 'Votre compte a bien été créé, vous êtes maintenant connecté.');
            }
            
            // Authentifier l'utilisateur et rediriger vers la page d'accueil
            return $userAuthenticator->authenticateUser(
                $user,
                $loginFormAuthenticator,
                $request
            );
        }

        return $this->render('security/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }

    #[Route('/connexion', name: 'app_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {
        // Si l'utilisateur est déjà connecté, vérifier ses rôles
        if ($this->getUser()) {
            // Permettre d'accéder à la page admin si c'est un administrateur
            if ($this->isGranted('ROLE_ADMIN')) {
                return $this->redirectToRoute('admin_index');
            }
            
            // Sinon, rediriger vers la page d'accueil
            return $this->redirectToRoute('app_home');
        }

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('security/login.html.twig', [
            'last_username' => $lastUsername, 
            'error' => $error
        ]);
    }

    #[Route('/deconnexion', name: 'app_logout')]
    public function logout(): void
    {
        throw new \LogicException('This method can be blank - it will be intercepted by the logout key on your firewall.');
    }
}