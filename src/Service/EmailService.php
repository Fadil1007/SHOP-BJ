<?php

namespace App\Service;

use App\Entity\Order;
use App\Entity\ResetPassword;
use App\Entity\User;
use Twig\Environment;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class EmailService
{
    private MailerInterface $mailer;
    private Environment $twig;
    private string $fromEmail;
    private string $fromName;
    private UrlGeneratorInterface $urlGenerator;
    private string $baseUrl;

    public function __construct(
        MailerInterface $mailer,
        Environment $twig,
        UrlGeneratorInterface $urlGenerator
    ) {
        error_log("### INITIALISATION DU SERVICE EMAIL (GMAIL) ###");

        $this->mailer = $mailer;
        $this->twig = $twig;
        $this->urlGenerator = $urlGenerator;

        // Configurer l'adresse email expéditrice - utiliser getenv en premier
        $adminEmail = getenv('ADMIN_EMAIL');
        if (!$adminEmail && isset($_ENV['ADMIN_EMAIL'])) {
            $adminEmail = $_ENV['ADMIN_EMAIL'];
        }
        $this->fromEmail = $adminEmail ?: 'shopbj04@gmail.com';
        $this->fromName = 'SHOP BJ';
        
        // Définir l'URL de base pour les images
        $this->baseUrl = getenv('SITE_BASE_URL') ?: 'https://myshopbj.com';

        error_log("From Email définie comme: " . $this->fromEmail);
        error_log("Base URL définie comme: " . $this->baseUrl);
        error_log("### FIN INITIALISATION DU SERVICE EMAIL ###");
    }

    /**
     * Envoie un email de réinitialisation de mot de passe
     */
    public function sendPasswordResetEmail(User $user, ResetPassword $resetPassword): bool
    {
        $resetUrl = $this->urlGenerator->generate(
            'app_reset_password',
            ['token' => $resetPassword->getToken()],
            UrlGeneratorInterface::ABSOLUTE_URL
        );

        $htmlContent = $this->twig->render('emails/reset_password.html.twig', [
            'resetUrl' => $resetUrl,
            'user' => $user,
            'expirationDate' => $resetPassword->getExpiresAt(),
            'logoUrl' => $this->baseUrl . '/uploads/logo/logo-shop-bj.svg'
        ]);

        return $this->sendEmail(
            $user->getEmail(),
            $user->getFullName(),
            'Réinitialisation de votre mot de passe',
            $htmlContent
        );
    }

    /**
     * Envoie un email de bienvenue après inscription
     */
    public function sendWelcomeEmail(User $user): bool
    {
        try {
            $loginUrl = $this->urlGenerator->generate(
                'app_login',
                [],
                UrlGeneratorInterface::ABSOLUTE_URL
            );

            error_log("Génération URL de connexion: " . $loginUrl);
            error_log("Email utilisateur: " . $user->getEmail());
            error_log("Nom utilisateur: " . $user->getFullName());

            $htmlContent = $this->twig->render('emails/welcome.html.twig', [
                'user' => $user,
                'loginUrl' => $loginUrl,
                'logoUrl' => $this->baseUrl . '/uploads/logo/logo-shop-bj.svg'
            ]);

            error_log("Taille du contenu HTML: " . strlen($htmlContent) . " caractères");
            error_log("From Email: " . $this->fromEmail);

            return $this->sendEmail(
                $user->getEmail(),
                $user->getFullName(),
                'Bienvenue sur SHOP BJ !',
                $htmlContent
            );
        } catch (\Exception $e) {
            error_log("Exception dans sendWelcomeEmail: " . $e->getMessage());
            error_log("Trace: " . $e->getTraceAsString());
            return false;
        }
    }

    /**
     * Envoie un email de confirmation après un paiement réussi
     */
    public function sendOrderConfirmation(Order $order, bool $paymentValidated = false): bool
    {
        if (!$paymentValidated && $order->getPaymentStatus() !== 'paid') {
            return true;
        }

        $htmlContent = $this->twig->render('emails/order_confirmation.html.twig', [
            'order' => $order,
            'paymentValidated' => $paymentValidated,
            'logoUrl' => $this->baseUrl . '/uploads/logo/logo-shop-bj.svg'
        ]);

        $subject = $paymentValidated 
            ? 'Confirmation de paiement de votre commande #' . $order->getId()
            : 'Confirmation de votre commande #' . $order->getId();

        return $this->sendEmail(
            $order->getEmail(), 
            $order->getFullName(), 
            $subject, 
            $htmlContent
        );
    }

    /**
     * Envoie une notification de paiement réussi
     */
    public function sendPaymentConfirmation(Order $order): bool
    {
        // Envoyer uniquement l'email détaillé avec paiement validé
        return $this->sendOrderConfirmation($order, true);
    }

    /**
     * Envoie une notification à l'administrateur lors d'une nouvelle commande
     */
    public function sendAdminOrderNotification(Order $order): bool
    {
        // Email réel uniquement
        $adminEmail = 'shopbj04@gmail.com';
        $adminName = 'Administrateur SHOP BJ';

        $htmlContent = $this->twig->render('emails/admin_order_notification.html.twig', [
            'order' => $order,
            'logoUrl' => $this->baseUrl . '/uploads/logo/logo-shop-bj.svg'
        ]);

        return $this->sendEmail(
            $adminEmail, 
            $adminName, 
            'Nouvelle commande #' . $order->getId(), 
            $htmlContent
        );
    }

    /**
     * Envoie une notification à l'administrateur lors d'un paiement réussi
     */
    public function sendAdminPaymentNotification(Order $order): bool
    {
        // Email réel uniquement
        $adminEmail = 'shopbj04@gmail.com';
        $adminName = 'Administrateur SHOP BJ';

        $htmlContent = $this->twig->render('emails/admin_payment_notification.html.twig', [
            'order' => $order,
            'logoUrl' => $this->baseUrl . '/uploads/logo/logo-shop-bj.svg'
        ]);

        return $this->sendEmail(
            $adminEmail, 
            $adminName, 
            'Paiement confirmé pour la commande #' . $order->getId(), 
            $htmlContent
        );
    }

    /**
     * Envoie un message de contact à l'administrateur
     */
    public function sendContactMessage(string $name, string $email, string $subject, string $message): bool
    {
        try {
            $adminEmail = 'shopbj04@gmail.com';
            $adminName = 'SHOP BJ';

            error_log("Tentative d'envoi d'un message de contact à: " . $adminEmail);

            $htmlContent = $this->twig->render('emails/contact.html.twig', [
                'nom' => $name,
                'email' => $email,
                'sujet' => $subject,
                'message' => $message,
                'date' => new \DateTime(),
                'logoUrl' => $this->baseUrl . '/uploads/logo/logo-shop-bj.svg'
            ]);

            $textContent = "Message de contact de: " . $name . " (" . $email . ")\n\n" .
                           "Sujet: " . $subject . "\n\n" . 
                           "Message:\n" . $message . "\n\n" .
                           "Date: " . (new \DateTime())->format('d/m/Y H:i:s');

            return $this->sendEmail(
                $adminEmail,
                $adminName,
                "Nouveau message de contact: " . $subject,
                $htmlContent,
                $textContent,
                $email // Reply-to
            );
        } catch (\Exception $e) {
            error_log('ERREUR lors de l\'envoi du message de contact: ' . $e->getMessage());
            error_log('TRACE: ' . $e->getTraceAsString());
            return false;
        }
    }

    /**
     * Envoie une notification lorsqu'un nouveau message de contact est reçu
     */
    public function sendNewContactNotification(string $contactName, string $contactEmail, string $subject, string $message): bool
    {
        try {
            $adminEmail = 'shopbj04@gmail.com';
            $adminName = 'Administrateur SHOP BJ';

            error_log("Envoi d'une notification de nouveau message de contact à: " . $adminEmail);

            $htmlContent = $this->twig->render('emails/new_contact_notification.html.twig', [
                'nom' => $contactName,
                'email' => $contactEmail,
                'sujet' => $subject,
                'message' => $message,
                'date' => new \DateTime(),
                'adminUrl' => $this->urlGenerator->generate('app_admin_contact_index', [], UrlGeneratorInterface::ABSOLUTE_URL),
                'logoUrl' => $this->baseUrl . '/uploads/logo/logo-shop-bj.svg'
            ]);

            $textContent = "💬 NOUVEAU MESSAGE DE CONTACT\n\n" .
                           "Un nouveau message de contact a été reçu sur SHOP BJ.\n\n" .
                           "De: " . $contactName . " (" . $contactEmail . ")\n" .
                           "Sujet: " . $subject . "\n" .
                           "Date: " . (new \DateTime())->format('d/m/Y H:i:s') . "\n\n" .
                           "Message:\n" . $message;

            return $this->sendEmail(
                $adminEmail,
                $adminName,
                "🔔 NOUVEAU MESSAGE: " . $subject,
                $htmlContent,
                $textContent
            );
        } catch (\Exception $e) {
            error_log('ERREUR lors de l\'envoi de la notification: ' . $e->getMessage());
            error_log('TRACE: ' . $e->getTraceAsString());
            return false;
        }
    }

    /**
     * Méthode générique pour envoyer un email via Symfony Mailer (Gmail)
     */
    private function sendEmail(string $toEmail, string $toName, string $subject, string $htmlContent, string $textContent = null, string $replyTo = null): bool
    {
        try {
            error_log("Tentative d'envoi d'email à : " . $toEmail);
            error_log("De : " . $this->fromEmail);
            error_log("Sujet : " . $subject);

            $email = (new Email())
                ->from($this->fromEmail)
                ->to($toEmail)
                ->subject($subject)
                ->html($htmlContent);

            // Ajouter le contenu texte si fourni
            if ($textContent) {
                $email->text($textContent);
            }

            // Ajouter l'adresse de réponse si fournie
            if ($replyTo) {
                $email->replyTo($replyTo);
            }

            $this->mailer->send($email);

            error_log("Envoi d'email RÉUSSI à " . $toEmail);
            return true;

        } catch (\Exception $e) {
            error_log('ERREUR Gmail: ' . $e->getMessage());
            error_log('Erreur Type: ' . get_class($e));
            error_log('Trace: ' . $e->getTraceAsString());
            return false;
        }
    }
}