<?php

namespace App\Controller;
use App\Entity\Contact;


use App\Entity\Order;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Knp\Component\Pager\PaginatorInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Security\Http\Attribute\IsGranted;
use App\Repository\UserRepository;

#[Route('/admin', name: 'admin_')]
#[IsGranted('ROLE_ADMIN')]
class AdminController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->redirectToRoute('admin_users');
    }

    #[Route('/utilisateurs', name: 'admin_users')]
    public function users(UserRepository $userRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $query = $userRepository->createQueryBuilder('u')
            ->orderBy('u.id', 'DESC')
            ->getQuery();

        $users = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10 // nombre d'éléments par page
        );

        return $this->render('admin/users.html.twig', [
            'users' => $users,
        ]);
    }

    #[Route('/commandes', name: 'admin_orders')]
    public function orders(OrderRepository $orderRepository, PaginatorInterface $paginator, Request $request): Response
    {
        $query = $orderRepository->createQueryBuilder('o')
            ->orderBy('o.id', 'DESC')
            ->getQuery();

        $orders = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1),
            10 // nombre d'éléments par page
        );

        return $this->render('admin/orders.html.twig', [
            'orders' => $orders,
        ]);
    }

    #[Route('/commandes/export', name: 'order_export')]
    public function exportOrders(OrderRepository $orderRepository): Response
    {
        $orders = $orderRepository->findAll();
        $csv = "ID;Client;Email;Total;Date;Statut\n";

        foreach ($orders as $order) {
            $csv .= sprintf(
                "%s;%s %s;%s;%.2f;%s;%s\n",
                $order->getId(),
                $order->getUser()->getFirstName(),
                $order->getUser()->getLastName(),
                $order->getUser()->getEmail(),
                $order->getTotal(),
                $order->getCreatedAt()->format('d/m/Y H:i'),
                $order->getStatus()
            );
        }

        return new Response($csv, 200, [
            'Content-Type' => 'text/csv; charset=utf-8',
            'Content-Disposition' => 'attachment; filename="commandes-export.csv"',
        ]);
    }

    #[Route('/commandes/{id}', name: 'order_view')]
    public function viewOrder(Order $order): Response
    {
        return $this->render('admin/order_view.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/commandes/{id}/modifier', name: 'order_edit')]
    public function editOrder(Request $request, Order $order, EntityManagerInterface $entityManager): Response
    {
        if ($request->isMethod('POST')) {
            $status = $request->request->get('status');
            
            if ($status && in_array($status, ['new', 'processing', 'shipped', 'delivered', 'cancelled'])) {
                $order->setStatus($status);
                $order->setUpdatedAt(new \DateTimeImmutable());
                
                $entityManager->flush();
                
                $this->addFlash('success', 'Le statut de la commande a été mis à jour avec succès.');
                return $this->redirectToRoute('admin_order_view', ['id' => $order->getId()]);
            } else {
                $this->addFlash('error', 'Statut invalide.');
            }
        }
        
        return $this->render('admin/order_edit.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/commandes/{id}/facture', name: 'order_invoice')]
    public function orderInvoice(Order $order): Response
    {
        return $this->render('admin/order_invoice.html.twig', [
            'order' => $order,
        ]);
    }

    #[Route('/commandes/{id}/supprimer', name: 'order_delete')]
    public function deleteOrder(Order $order, EntityManagerInterface $entityManager): Response
    {
        $entityManager->remove($order);
        $entityManager->flush();
        $this->addFlash('success', 'Commande supprimée avec succès.');
        return $this->redirectToRoute('admin_orders');
    }

    public function newUser(Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user, [ 'is_edit' => false ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $hashedPassword = $passwordHasher->hashPassword($user, $form->get('plainPassword')->getData());
            $user->setPassword($hashedPassword);
            $user->setCreatedAt(new \DateTimeImmutable());
            $entityManager->persist($user);
            $entityManager->flush();
            $this->addFlash('success', "L'utilisateur a été créé avec succès.");
            return $this->redirectToRoute('admin_users');
        }

        return $this->render('admin/user_form.html.twig', [
            'form' => $form->createView(),
            'is_edit' => false,
            'user' => $user,
        ]);
    }

    public function editUser(User $user, Request $request, EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher): Response
    {
        $form = $this->createForm(UserType::class, $user, [ 'is_edit' => true ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newPassword = $form->get('newPassword')->getData();
            if ($newPassword) {
                $hashedPassword = $passwordHasher->hashPassword($user, $newPassword);
                $user->setPassword($hashedPassword);
            }
            $entityManager->flush();
            $this->addFlash('success', "L'utilisateur a été mis à jour avec succès.");
            return $this->redirectToRoute('admin_users');
        }

        return $this->render('admin/user_form.html.twig', [
            'form' => $form->createView(),
            'is_edit' => true,
            'user' => $user,
        ]);
    }

    public function deleteUser(User $user, EntityManagerInterface $entityManager): Response
    {
        if ($this->getUser() === $user) {
            $this->addFlash('error', 'Vous ne pouvez pas supprimer votre propre compte.');
            return $this->redirectToRoute('admin_users');
        }

        $entityManager->remove($user);
        $entityManager->flush();
        $this->addFlash('success', "L'utilisateur a été supprimé avec succès.");
        return $this->redirectToRoute('admin_users');
    }

    // ✅ Nouvelle route pour la page Contact
#[Route('/contact', name: 'contact')]
public function contact(EntityManagerInterface $entityManager): Response
{
    // Récupérer les contacts depuis la base de données
    $contacts = $entityManager->getRepository(Contact::class)->findAll();

    return $this->render('admin/contact/index.html.twig', ['contacts' => $contacts]);
}


}