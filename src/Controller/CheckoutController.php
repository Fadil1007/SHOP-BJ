<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderItem;
use App\Entity\User;
use App\Form\CheckoutFormType;
use App\Repository\CartItemRepository;
use App\Repository\CategoryRepository;
use App\Repository\OrderRepository;
use App\Form\ProductSearchType;
use App\Service\EmailService;
use App\Service\FedaPayService;
use App\Service\SmsService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class CheckoutController extends AbstractController
{
    #[Route('/checkout', name: 'checkout_index')]
    public function index(
        CartItemRepository $cartItemRepository,
        CategoryRepository $categoryRepository,
        Request $request,
        EntityManagerInterface $entityManager,
        EmailService $emailService
    ): Response {
        /** @var User|null $user */
        $user = $this->getUser();
        if (!$user) {
            $this->addFlash('error', 'Vous devez être connecté pour passer à la caisse.');
            return $this->redirectToRoute('user_login');
        }

        $cartItems = $cartItemRepository->findBy(['user' => $user]);
        if (count($cartItems) === 0) {
            $this->addFlash('error', 'Votre panier est vide.');
            return $this->redirectToRoute('cart_index');
        }

        // Calculate total
        $total = 0;
        foreach ($cartItems as $item) {
            $total += $item->getProduct()->getPrice() * $item->getQuantity();
        }

        // Create checkout form
        $checkoutForm = $this->createForm(CheckoutFormType::class);
        $checkoutForm->handleRequest($request);

        if ($checkoutForm->isSubmitted() && $checkoutForm->isValid()) {
            $formData = $checkoutForm->getData();

            // Create order
            $order = new Order();
            $order->setUser($user);
            $order->setStatus('pending');
            $order->setFullName($formData['firstName'] . ' ' . $formData['lastName']);
            $order->setAddress('');  // Champ inutilisé dans le nouveau format
            $order->setCity($formData['city']);
            $order->setPostalCode('');  // Champ inutilisé dans le nouveau format
            $order->setCountry('Bénin');  // Pays fixé à Bénin

            // Ajouter le préfixe +229 au numéro de téléphone
            $phone = $formData['phone'];
            if (!empty($phone) && !str_starts_with($phone, '+229')) {
                $phone = '+229' . $phone;
            }
            $order->setPhone($phone);

            // Récupérer l'email de l'utilisateur
            $order->setEmail($user instanceof User ? $user->getEmail() : '');
            $order->setTotal($total);
            $order->setCreatedAt(new \DateTimeImmutable());

            // Récupération de la méthode de paiement sélectionnée
            $paymentMethod = $request->request->get('selected_payment_method', 'CinetPay');
            $order->setPaymentMethod($paymentMethod);
            $order->setPaymentStatus('pending');

            // Create order items from cart items
            foreach ($cartItems as $cartItem) {
                $orderItem = new OrderItem();
                $orderItem->setOrder($order);
                $orderItem->setProduct($cartItem->getProduct());
                $orderItem->setQuantity($cartItem->getQuantity());
                $orderItem->setSize($cartItem->getSize());
                $orderItem->setColor($cartItem->getColor());
                $orderItem->setPrice($cartItem->getProduct()->getPrice());

                $entityManager->persist($orderItem);
                $order->addOrderItem($orderItem);
            }

            $entityManager->persist($order);

            // Remove cart items
            foreach ($cartItems as $cartItem) {
                $entityManager->remove($cartItem);
            }

            $entityManager->flush();

            // Envoyer seulement une notification simple de création de commande (pas de détails)
            // Les détails complets seront envoyés seulement après validation du paiement
            $this->addFlash('success', 'Votre commande a été créée avec succès. Veuillez procéder au paiement.');

            return $this->redirectToRoute('checkout_confirmation', ['id' => $order->getId()]);
        }

        // Get categories for menu
        $categories = $categoryRepository->findAll();

        // Create search form
        $searchForm = $this->createForm(ProductSearchType::class);

        // Générer l'URL de callback pour CinetPay
        $callbackUrl = $this->generateUrl('checkout_fedapay_callback', [], UrlGeneratorInterface::ABSOLUTE_URL);

        return $this->render('checkout/index.html.twig', [
            'checkout_form' => $checkoutForm->createView(),
            'cart_items' => $cartItems,
            'total' => $total,
            'categories' => $categories,
            'search_form' => $searchForm->createView(),
            'callback_url' => $callbackUrl,
        ]);
    }

    #[Route('/checkout/confirmation/{id}', name: 'checkout_confirmation')]
    public function confirmation(
        Order $order,
        CategoryRepository $categoryRepository,
        FedaPayService $fedaPayService
    ): Response {
        /** @var User|null $user */
        $user = $this->getUser();
        if (!$user || $order->getUser() !== $user) {
            $this->addFlash('error', 'Non autorisé.');
            return $this->redirectToRoute('app_home');
        }

        // Get categories for menu
        $categories = $categoryRepository->findAll();

        // Create search form
        $searchForm = $this->createForm(ProductSearchType::class);

        // Générer l'URL de callback pour CinetPay
        $callbackUrl = $this->generateUrl('checkout_fedapay_callback', [], UrlGeneratorInterface::ABSOLUTE_URL);

        // Récupération des données de paiement KKiaPay
        $fullName = $order->getFullName();
        $phone = $order->getPhone();
        $email = $order->getEmail();
        $orderId = $order->getId();
        $amount = $order->getTotal();

        // Attributs pour le bouton de paiement KKiaPay
        $paymentButtonData = [
            'amount' => $amount,
            'orderId' => $orderId,
            'fullName' => $fullName,
            'phone' => $phone,
            'email' => $email,
            'callbackUrl' => $callbackUrl,
        ];

        // Préparer les données pour FedaPay
        $fedaPayData = [
            'amount' => $order->getTotal(),
            'orderId' => $order->getId(),
            'fullName' => $order->getFullName() ?: 'Client Test',
            'phone' => $order->getPhone() ?: '+22900000000',
            'email' => $order->getEmail() ?: 'test@example.com',
            'callbackUrl' => $this->generateUrl('checkout_fedapay_callback', [], UrlGeneratorInterface::ABSOLUTE_URL),
            'sandbox' => $fedaPayService->isSandbox(),
            'publicKey' => $fedaPayService->getPublicKey(),
        ];

        return $this->render('checkout/confirmation.html.twig', [
            'order' => $order,
            'fedapay_script' => $fedaPayService->generateIntegrationScript(),
            'fedapay_data' => $fedaPayData
        ]);
    }

    #[Route('/checkout/fedapay/create-transaction', name: 'checkout_fedapay_create_transaction', methods: ['POST'])]
    public function createFedaPayTransaction(
        Request $request,
        OrderRepository $orderRepository,
        FedaPayService $fedaPayService
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);

        $orderId = $data['orderId'] ?? null;
        $amount = $data['amount'] ?? null;
        $customerName = $data['customerName'] ?? '';
        $customerPhone = $data['customerPhone'] ?? '';
        $customerEmail = $data['customerEmail'] ?? '';
        $callbackUrl = $data['callbackUrl'] ?? '';

        if (!$orderId || !$amount) {
            return new JsonResponse(['success' => false, 'message' => 'Données manquantes'], 400);
        }

        $order = $orderRepository->find($orderId);
        if (!$order) {
            return new JsonResponse(['success' => false, 'message' => 'Commande introuvable'], 404);
        }

        // Séparer le prénom et nom
        $nameParts = explode(' ', $customerName, 2);
        $firstname = $nameParts[0] ?? '';
        $lastname = $nameParts[1] ?? '';

        $transactionData = [
            'description' => "Commande #{$orderId} - SHOP BJ",
            'amount' => $amount,
            'callback_url' => $callbackUrl,
            'customer_firstname' => $firstname,
            'customer_lastname' => $lastname,
            'customer_email' => $customerEmail,
            'customer_phone' => $customerPhone
        ];

        $result = $fedaPayService->createTransaction($transactionData);

        if ($result['success']) {
            return new JsonResponse([
                'success' => true,
                'transaction_id' => $result['transaction_id'],
                'checkout_url' => $result['checkout_url'] ?? null
            ]);
        }

        return new JsonResponse([
            'success' => false,
            'message' => $result['message'] ?? 'Erreur lors de la création de la transaction'
        ]);
    }

    #[Route('/checkout/fedapay/verify/{id}', name: 'checkout_fedapay_verify', methods: ['POST'])]
    public function verifyFedaPayPayment(
        Order $order,
        Request $request,
        EntityManagerInterface $entityManager,
        EmailService $emailService,
        FedaPayService $fedaPayService
    ): JsonResponse {
        $data = json_decode($request->getContent(), true);
        $transactionId = $data['transactionId'] ?? null;

        error_log("Verifying FedaPay payment for order {$order->getId()}, transaction: {$transactionId}");

        if (!$transactionId) {
            return new JsonResponse(['success' => false, 'message' => 'Identifiant de transaction manquant'], 400);
        }

        // Vérifier si le paiement n'est pas déjà traité
        if ($order->getPaymentStatus() === 'paid') {
            return new JsonResponse([
                'success' => true, 
                'status' => 'paid',
                'message' => 'Paiement déjà traité'
            ]);
        }

        // Détection du mode sandbox
        if (str_starts_with($transactionId, 'sandbox_')) {
            error_log("Processing sandbox payment for order {$order->getId()}");

            $order->setPaymentMethod('FedaPay');
            $order->setTransactionId($transactionId);
            $order->setPaymentStatus('paid');
            $order->setStatus('processing');
            $entityManager->flush();

            try {
                $emailService->sendPaymentConfirmation($order);
                $emailService->sendAdminPaymentNotification($order);
            } catch (\Exception $e) {
                error_log('Erreur email: ' . $e->getMessage());
            }

            return new JsonResponse([
                'success' => true, 
                'status' => 'paid',
                'message' => 'Paiement sandbox approuvé automatiquement'
            ]);
        }

        // Vérification de la transaction FedaPay
        $transaction = $fedaPayService->verifyTransaction($transactionId);

        if (!$transaction) {
            return new JsonResponse(['success' => false, 'message' => 'Transaction non validée'], 400);
        }

        // Mise à jour de la commande
        $order->setPaymentMethod('FedaPay');
        $order->setTransactionId($transactionId);

        if ($transaction['status'] === 'approved') {
            $order->setPaymentStatus('paid');
            $order->setStatus('processing');
            $result = ['success' => true, 'status' => 'paid'];

            $emailService->sendPaymentConfirmation($order);
            $emailService->sendAdminPaymentNotification($order);
        } else {
            $order->setPaymentStatus($transaction['status']);
            $result = ['success' => true, 'status' => strtolower($transaction['status'])];
        }

        $entityManager->flush();

        return new JsonResponse($result);
    }

    #[Route('/checkout/fedapay/callback', name: 'checkout_fedapay_callback', methods: ['GET', 'POST'])]
    public function fedaPayCallback(
        Request $request,
        OrderRepository $orderRepository,
        EntityManagerInterface $entityManager,
        EmailService $emailService,
        FedaPayService $fedaPayService
    ): Response {
        $data = $request->query->all();

        error_log("FedaPay Callback received: " . json_encode($data));

        $transactionId = $data['id'] ?? null;
        $status = $data['status'] ?? null;

        if (!$transactionId) {
            error_log("FedaPay Callback: Transaction ID manquant dans les paramètres");
            $this->addFlash('error', 'Erreur dans la réponse de paiement');
            return $this->redirectToRoute('app_home');
        }

        error_log("FedaPay Callback: Transaction ID = {$transactionId}, Status = {$status}");

        // Vérifier la transaction auprès de FedaPay
        $transaction = $fedaPayService->verifyTransaction($transactionId);

        if (!$transaction) {
            error_log("FedaPay Callback: Impossible de vérifier la transaction {$transactionId}");
            $this->addFlash('error', 'Impossible de vérifier la transaction');
            return $this->redirectToRoute('app_home');
        }

        error_log("FedaPay Callback: Transaction vérifiée - Status: " . ($transaction['status'] ?? 'unknown'));

        // Trouver la commande correspondante en cherchant dans toutes les commandes récentes
        $orders = $orderRepository->findBy([], ['createdAt' => 'DESC'], 50);
        $order = null;

        foreach ($orders as $orderItem) {
            if ($orderItem->getPaymentStatus() === 'pending') {
                // Assumer que c'est la bonne commande si elle est en attente
                $order = $orderItem;
                break;
            }
        }

        if (!$order) {
            error_log("FedaPay Callback: Aucune commande en attente trouvée");
            $this->addFlash('warning', 'Paiement reçu mais commande non trouvée. Contactez le support.');
            return $this->redirectToRoute('app_home');
        }

        // Mettre à jour la commande si le paiement est approuvé
        if ($status === 'approved' || $transaction['status'] === 'approved') {
            error_log("FedaPay Callback: Paiement approuvé pour transaction {$transactionId}");

            $order->setPaymentMethod('FedaPay');
            $order->setTransactionId($transactionId);
            $order->setPaymentStatus('paid');
            $order->setStatus('processing');
            $entityManager->flush();

            try {
                $emailService->sendPaymentConfirmation($order);
                $emailService->sendAdminPaymentNotification($order);
            } catch (\Exception $e) {
                error_log('Erreur email: ' . $e->getMessage());
            }

            $this->addFlash('success', 'Paiement réussi ! Votre commande a été confirmée.');
            return $this->redirectToRoute('checkout_payment_success', ['id' => $order->getId()]);
        } else {
            error_log("FedaPay Callback: Paiement non approuvé - Status: {$status}");
            $this->addFlash('error', 'Le paiement n\'a pas été approuvé');
            return $this->redirectToRoute('checkout_confirmation', ['id' => $order->getId()]);
        }
    }

    /**
     * Page de succès après paiement réussi
     */
    #[Route('/checkout/payment-success/{id}', name: 'checkout_payment_success')]
    public function paymentSuccess(
        Order $order,
        Request $request,
        EntityManagerInterface $entityManager,
        EmailService $emailService,
        CategoryRepository $categoryRepository
    ): Response {
        // Log pour débogage
        error_log("Payment Success Handler - Order ID: " . $order->getId() . ", Current Status: " . $order->getPaymentStatus());
        error_log("Payment Success Handler - URL params: " . $request->getQueryString());

        /** @var User|null $user */
        $user = $this->getUser();
        if (!$user || $order->getUser() !== $user) {
            $this->addFlash('error', 'Non autorisé.');
            return $this->redirectToRoute('app_home');
        }



        // Si la commande est déjà payée, afficher la page de succès
        if ($order->getPaymentStatus() === 'paid') {
            error_log("Payment Success Handler - Order is paid, showing success page");

            // Get categories for menu
            $categories = $categoryRepository->findAll();

            // Create search form
            $searchForm = $this->createForm(ProductSearchType::class);

            return $this->render('checkout/payment_success.html.twig', [
                'order' => $order,
                'categories' => $categories,
                'search_form' => $searchForm->createView(),
            ]);
        }

        // Si on arrive ici, la commande n'est pas payée
        error_log("Payment Success Handler - Order not paid, redirecting to confirmation page");
        $this->addFlash('warning', 'Cette commande n\'a pas encore été payée.');
        return $this->redirectToRoute('checkout_confirmation', ['id' => $order->getId()]);
    }
}