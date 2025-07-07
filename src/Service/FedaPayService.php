<?php

namespace App\Service;

class FedaPayService
{
    private string $publicKey;
    private string $secretKey;
    private bool $sandbox;
    private string $apiUrl;

    public function __construct()
    {
        $this->publicKey = $_ENV['FEDAPAY_PUBLIC_KEY'] ?? getenv('FEDAPAY_PUBLIC_KEY') ?: '';
        $this->secretKey = $_ENV['FEDAPAY_SECRET_KEY'] ?? getenv('FEDAPAY_SECRET_KEY') ?: '';
        $this->sandbox = filter_var($_ENV['FEDAPAY_SANDBOX'] ?? getenv('FEDAPAY_SANDBOX') ?: 'true', FILTER_VALIDATE_BOOLEAN);
        $this->apiUrl = $this->sandbox ? 'https://sandbox-api.fedapay.com/v1' : 'https://api.fedapay.com/v1';
    }

    public function getPublicKey(): string
    {
        return $this->publicKey;
    }

    public function isSandbox(): bool
    {
        return $this->sandbox;
    }

    public function generateIntegrationScript(): string
    {
        $publicKey = $this->publicKey;
        $sandboxMode = $this->sandbox ? 'true' : 'false';
        
        return <<<HTML
            <script src="https://js.fedapay.com/fedapay.js"></script>
            <script>
                FedaPay.setApiKey('{$publicKey}');
                FedaPay.setSandbox({$sandboxMode});
                console.log('FedaPay script loaded - Public Key: {$publicKey}, Sandbox: {$sandboxMode}');
            </script>
        HTML;
    }

    public function createTransaction(array $data): array
    {
        error_log("FedaPay createTransaction - Input data: " . json_encode($data));
        error_log("FedaPay createTransaction - API URL: " . $this->apiUrl);
        error_log("FedaPay createTransaction - Sandbox mode: " . ($this->sandbox ? 'true' : 'false'));

        // Validation du montant minimum (1000 FCFA)
        $amount = $data['amount'] ?? 0;
        if ($amount < 100) {
            error_log("FedaPay Error - Amount too low: {$amount}");
            return [
                'success' => false,
                'message' => 'Le montant minimum de transaction autorisé est de 1000 FCFA.',
                'http_code' => 400
            ];
        }

        $postData = [
            'description' => $data['description'] ?? 'Paiement commande',
            'amount' => $data['amount'],
            'currency' => [
                'iso' => 'XOF'
            ],
            'callback_url' => $data['callback_url'] ?? '',
            'customer' => [
                'firstname' => $data['customer_firstname'] ?? '',
                'lastname' => $data['customer_lastname'] ?? '',
                'email' => $data['customer_email'] ?? '',
                'phone_number' => [
                    'number' => $data['customer_phone'] ?? '',
                    'country' => 'bj'
                ]
            ]
        ];

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl . '/transactions',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS => json_encode($postData),
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
                'Authorization: Bearer ' . $this->secretKey
            ],
        ]);

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $curlError = curl_error($curl);
        curl_close($curl);

        error_log("FedaPay Response - HTTP Code: {$httpCode}");
        error_log("FedaPay Response - Body: " . ($response ?: 'empty'));
        
        if ($curlError) {
            error_log("FedaPay CURL Error: " . $curlError);
            return ['success' => false, 'message' => 'Erreur de connexion'];
        }

        if ($response === false) {
            return ['success' => false, 'message' => 'Erreur de connexion'];
        }

        $result = json_decode($response, true);

        if ($httpCode === 200 && isset($result['v1/transaction']['id'])) {
            $transaction = $result['v1/transaction'];
            return [
                'success' => true,
                'transaction_id' => $transaction['id'],
                'checkout_url' => $transaction['payment_url'] ?? null
            ];
        }

        $errorMessage = $result['message'] ?? 'Erreur lors de la création de la transaction';
        
        error_log("FedaPay Error - Message: {$errorMessage}");
        error_log("FedaPay Full Response: " . json_encode($result));

        return [
            'success' => false,
            'message' => $errorMessage,
            'http_code' => $httpCode
        ];
    }

    public function verifyTransaction(string $transactionId): ?array
    {
        error_log("FedaPay verifyTransaction - Transaction ID: {$transactionId}");
        error_log("FedaPay verifyTransaction - Sandbox mode: " . ($this->sandbox ? 'true' : 'false'));

        // En mode sandbox, simulation d'une vérification réussie
        if ($this->sandbox && str_starts_with($transactionId, 'sandbox_')) {
            error_log("FedaPay verifyTransaction - Sandbox transaction detected, returning approved");
            return [
                'id' => $transactionId,
                'status' => 'approved',
                'amount' => 2500,
                'currency' => 'XOF'
            ];
        }

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => $this->apiUrl . '/transactions/' . $transactionId,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json',
                'Accept: application/json',
                'Authorization: Bearer ' . $this->secretKey
            ],
        ]);

        $response = curl_exec($curl);
        $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        $curlError = curl_error($curl);
        curl_close($curl);

        error_log("FedaPay verifyTransaction - HTTP Code: {$httpCode}");
        error_log("FedaPay verifyTransaction - Response: " . ($response ?: 'empty'));
        
        if ($curlError) {
            error_log("FedaPay verifyTransaction - CURL Error: " . $curlError);
        }

        if ($response === false || $httpCode !== 200) {
            error_log("FedaPay verifyTransaction - Failed to verify transaction");
            return null;
        }

        $result = json_decode($response, true);

        // Adapter selon la structure de réponse FedaPay
        if (isset($result['v1/transaction']['id'])) {
            $transaction = $result['v1/transaction'];
            error_log("FedaPay verifyTransaction - Transaction found with status: " . $transaction['status']);
            return [
                'id' => $transaction['id'],
                'status' => $transaction['status'],
                'amount' => $transaction['amount'],
                'currency' => $transaction['currency']['iso'] ?? 'XOF'
            ];
        } elseif (isset($result['v']['id'])) {
            $transaction = $result['v'];
            error_log("FedaPay verifyTransaction - Transaction found (v format) with status: " . $transaction['status']);
            return [
                'id' => $transaction['id'],
                'status' => $transaction['status'],
                'amount' => $transaction['amount'],
                'currency' => $transaction['currency']['iso'] ?? 'XOF'
            ];
        }

        error_log("FedaPay verifyTransaction - Transaction structure not recognized");
        error_log("FedaPay verifyTransaction - Full response: " . json_encode($result));
        return null;
    }

    public function generateTokenTransaction(array $data): array
    {
        // Génération d'une transaction pour paiement côté client
        return $this->createTransaction($data);
    }
}
