<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use App\Security\LoginFormAuthenticator;
use App\Service\EmailService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request, 
        UserPasswordHasherInterface $userPasswordHasher, 
        EntityManagerInterface $entityManager,
        UserAuthenticatorInterface $userAuthenticator,
        LoginFormAuthenticator $loginFormAuthenticator,
        EmailService $emailService,
        UserRepository $userRepository
    ): Response
    {
        // Redirect if user is already logged in
        if ($this->getUser()) {
            return $this->redirectToRoute('app_home');
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Vérifier si l'utilisateur ou l'email existe déjà
            $existingUser = $userRepository->findExistingUser(
                $user->getUsername(),
                $user->getEmail()
            );

            if ($existingUser) {
                // Déterminer quel champ est en conflit
                if ($existingUser->getUsername() === $user->getUsername()) {
                    $this->addFlash('error', 'Ce nom d\'utilisateur est déjà utilisé. Veuillez en choisir un autre.');
                    return $this->render('security/register.html.twig', [
                        'registrationForm' => $form->createView(),
                    ]);
                } else {
                    $this->addFlash('error', 'Cette adresse email est déjà associée à un compte. Vous pouvez vous connecter ou utiliser la fonction "Mot de passe oublié".');
                    return $this->render('security/register.html.twig', [
                        'registrationForm' => $form->createView(),
                    ]);
                }
            }

            // Encode the plain password
            $user->setPassword(
                $userPasswordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            // Set user role
            $user->setRoles(['ROLE_USER']);
            
            // Set registration date
            $user->setCreatedAt(new \DateTimeImmutable());

            try {
                $entityManager->persist($user);
                $entityManager->flush();
                
                // Envoyer l'email de bienvenue
                $emailSent = $emailService->sendWelcomeEmail($user);
                
                // Log le résultat de l'envoi d'email
                if ($emailSent) {
                    error_log("Email de bienvenue envoyé avec succès à " . $user->getEmail());
                } else {
                    error_log("Échec de l'envoi de l'email de bienvenue à " . $user->getEmail());
                }
    
                // Add success flash message
                $this->addFlash('success', 'Votre compte a été créé avec succès! Vous êtes maintenant connecté.');
                
                // Authentifier l'utilisateur et rediriger vers la page d'accueil
                return $userAuthenticator->authenticateUser(
                    $user,
                    $loginFormAuthenticator,
                    $request
                );
            } catch (\Exception $e) {
                // Log détaillé de l'erreur
                error_log("Erreur lors de l'inscription: " . $e->getMessage());
                error_log("Trace: " . $e->getTraceAsString());
                
                // En cas d'erreur inattendue, afficher un message d'erreur générique
                $this->addFlash('error', 'Une erreur est survenue lors de la création de votre compte. Veuillez réessayer.');
                return $this->render('security/register.html.twig', [
                    'registrationForm' => $form->createView(),
                ]);
            }
        }

        return $this->render('security/register.html.twig', [
            'registrationForm' => $form->createView(),
        ]);
    }
}