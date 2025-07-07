<?php

namespace App\Service;

use App\Entity\Order;
use Symfony\Component\HttpClient\HttpClient;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class SmsService
{
    private $client;
    private $kkiapayPublicKey;
    private $kkiapayPrivateKey;
    private $kkiapaySecret;
    private $senderName;

    public function __construct(
        ParameterBagInterface $params,
        ?HttpClientInterface $client = null
    ) {
        $this->client = $client ?? HttpClient::create();
        // Nous réutilisons les clés KKiaPay qui possède une API SMS intégrée
        $this->kkiapayPublicKey = $_ENV['KKIAPAY_PUBLIC_KEY'] ?? '';
        $this->kkiapayPrivateKey = $_ENV['KKIAPAY_PRIVATE_KEY'] ?? '';
        $this->kkiapaySecret = $_ENV['KKIAPAY_SECRET'] ?? '';
        $this->senderName = 'SHOP BJ';
    }

    /**
     * Envoie un SMS de confirmation de commande au client
     */
    public function sendOrderConfirmationSms(Order $order): bool
    {
        $phone = $this->formatPhoneNumber($order->getPhone());
        $message = "Bonjour {$order->getFullName()}, votre commande #{$order->getId()} d'un montant de {$order->getTotal()} FCFA a été enregistrée sur SHOP BJ. Merci de votre confiance!";
        
        return $this->sendSms($phone, $message);
    }

    /**
     * Envoie un SMS de confirmation de paiement au client
     */
    public function sendPaymentConfirmationSms(Order $order): bool
    {
        $phone = $this->formatPhoneNumber($order->getPhone());
        $message = "Bonjour {$order->getFullName()}, votre paiement pour la commande #{$order->getId()} a été confirmé. Nous préparons votre commande. Merci pour votre achat!";
        
        return $this->sendSms($phone, $message);
    }

    /**
     * Envoie un SMS de notification pour l'expédition
     */
    public function sendShippingNotificationSms(Order $order): bool
    {
        $phone = $this->formatPhoneNumber($order->getPhone());
        $message = "Votre commande #{$order->getId()} est en cours d'expédition. Vous serez contacté(e) pour la livraison. SHOP BJ vous remercie pour votre achat!";
        
        return $this->sendSms($phone, $message);
    }

    /**
     * Envoie un SMS à l'administrateur pour une nouvelle commande
     */
    public function sendAdminOrderNotificationSms(Order $order): bool
    {
        // Numéro de téléphone de l'administrateur
        $adminPhone = '+22990123456'; // À remplacer par le numéro réel
        
        $message = "ADMIN: Nouvelle commande #{$order->getId()} de {$order->getTotal()} FCFA par {$order->getFullName()}. Connectez-vous au tableau de bord pour plus de détails.";
        
        return $this->sendSms($adminPhone, $message);
    }

    /**
     * Méthode générique pour envoyer un SMS via l'API KKiaPay
     */
    private function sendSms(string $phoneNumber, string $message): bool
    {
        if (empty($this->kkiapayPublicKey) || empty($this->kkiapayPrivateKey) || empty($this->kkiapaySecret)) {
            error_log('Erreur: Clés KKiaPay manquantes pour l\'envoi de SMS');
            return false;
        }

        try {
            // Simulation d'envoi de SMS
            // Dans un environnement de production, vous intégreriez ici avec l'API SMS de KKiaPay ou un autre service
            error_log("SMS envoyé à {$phoneNumber}: {$message}");
            
            // Pour un environnement de production, décommentez le code ci-dessous et adaptez-le
            /*
            $response = $this->client->request('POST', 'https://api.kkiapay.me/v1/sms/send', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'X-API-KEY' => $this->kkiapayPrivateKey,
                ],
                'body' => json_encode([
                    'to' => $phoneNumber,
                    'message' => $message,
                    'sender' => $this->senderName,
                ]),
            ]);
            
            $statusCode = $response->getStatusCode();
            return $statusCode >= 200 && $statusCode < 300;
            */
            
            // Pour le moment, on retourne true pour simuler un envoi réussi
            return true;
        } catch (TransportExceptionInterface $e) {
            error_log('Erreur d\'envoi SMS: ' . $e->getMessage());
            return false;
        } catch (\Exception $e) {
            error_log('Erreur générale SMS: ' . $e->getMessage());
            return false;
        }
    }

    /**
     * Formate le numéro de téléphone pour l'envoi SMS
     */
    private function formatPhoneNumber(string $phoneNumber): string
    {
        // Nettoie le numéro de téléphone en supprimant les espaces et autres caractères non numériques
        $cleaned = preg_replace('/[^0-9+]/', '', $phoneNumber);
        
        // Assure-toi que le numéro commence par le format international +229 (Bénin)
        if (!str_starts_with($cleaned, '+')) {
            if (str_starts_with($cleaned, '229')) {
                $cleaned = '+' . $cleaned;
            } elseif (!str_starts_with($cleaned, '+229')) {
                $cleaned = '+229' . $cleaned;
            }
        }
        
        return $cleaned;
    }
}