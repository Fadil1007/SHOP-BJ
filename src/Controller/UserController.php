<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Form\LoginFormType;
use App\Form\ProductSearchType;
use App\Repository\CategoryRepository;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class UserController extends AbstractController
{
    #[Route('/register', name: 'user_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $passwordHasher,
        EntityManagerInterface $entityManager,
        CategoryRepository $categoryRepository
    ): Response {
        if ($this->getUser()) {
            return $this->redirectToRoute('home');
        }

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Encode the plain password
            $user->setPassword(
                $passwordHasher->hashPassword(
                    $user,
                    $form->get('plainPassword')->getData()
                )
            );

            $user->setRoles(['ROLE_USER']);
            $user->setCreatedAt(new \DateTimeImmutable());

            $entityManager->persist($user);
            $entityManager->flush();

            $this->addFlash('success', 'Votre compte a été créé avec succès! Vous pouvez maintenant vous connecter.');

            return $this->redirectToRoute('user_login');
        }

        // Get categories for menu
        $categories = $categoryRepository->findAll();

        // Create search form
        $searchForm = $this->createForm(ProductSearchType::class);

        return $this->render('user/register.html.twig', [
            'registration_form' => $form->createView(),
            'categories' => $categories,
            'search_form' => $searchForm->createView(),
        ]);
    }

    #[Route('/user-login', name: 'user_login')]
    public function login(
        AuthenticationUtils $authenticationUtils,
        CategoryRepository $categoryRepository
    ): Response {
        // Redirection vers la route principale de connexion pour éviter les duplications
        return $this->redirectToRoute('app_login');
    }

    #[Route('/logout', name: 'user_logout')]
    public function logout(): void
    {
        // This method can be empty - it will be intercepted by the logout key on your firewall
        throw new \LogicException('This method should never be reached!');
    }

    #[Route('/profile', name: 'user_profile')]
    public function profile(
        CategoryRepository $categoryRepository,
        OrderRepository $orderRepository
    ): Response {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('user_login');
        }

        // Get user's orders
        $orders = $orderRepository->findBy(
            ['user' => $user],
            ['createdAt' => 'DESC']
        );

        // Get categories for menu
        $categories = $categoryRepository->findAll();

        // Create search form
        $searchForm = $this->createForm(ProductSearchType::class);

        return $this->render('user/profile.html.twig', [
            'user' => $user,
            'orders' => $orders,
            'categories' => $categories,
            'search_form' => $searchForm->createView(),
        ]);
    }
}
