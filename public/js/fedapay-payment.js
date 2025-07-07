console.log('Initialisation du script FedaPay...');

document.addEventListener('DOMContentLoaded', function() {
    const paymentButton = document.getElementById('fedapay-payment-button');

    if (!paymentButton) {
        console.log('Bouton de paiement FedaPay non trouvé');
        return;
    }

    console.log('FedaPay payment script loaded');
    console.log('FedaPay config:', window.fedaPayConfig);

    paymentButton.addEventListener('click', function(e) {
        e.preventDefault();

        const orderId = this.dataset.orderId;
        const amount = parseInt(this.dataset.amount);
        const customerName = this.dataset.name;
        const customerPhone = this.dataset.phone;
        const customerEmail = this.dataset.email;
        const callbackUrl = this.dataset.callback;

        console.log('Initiating FedaPay payment:', {
            orderId,
            amount,
            customerName,
            customerPhone,
            customerEmail,
            callbackUrl
        });

        // Affichage d'un message de chargement
        const originalText = this.innerHTML;
        this.innerHTML = '<i class="fas fa-spinner fa-spin me-2"></i>Initialisation du paiement...';
        this.disabled = true;

        // Créer la transaction FedaPay
        fetch('/checkout/fedapay/create-transaction', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({
                orderId: orderId,
                amount: amount,
                customerName: customerName,
                customerPhone: customerPhone,
                customerEmail: customerEmail,
                callbackUrl: callbackUrl
            })
        })
        .then(response => response.json())
        .then(data => {
            console.log('FedaPay transaction response:', data);

            if (data.success && data.transaction_id) {
                // Ouvrir la page de paiement FedaPay
                if (data.checkout_url) {
                    // Rediriger vers FedaPay avec gestion du retour
                    showPaymentSuccess('Redirection vers FedaPay...');
                    
                    // Créer un lien temporaire pour la redirection
                    const tempLink = document.createElement('a');
                    tempLink.href = data.checkout_url;
                    tempLink.target = '_self'; // Ouvrir dans la même fenêtre
                    tempLink.click();
                    
                    // Après un délai, commencer à vérifier le statut du paiement
                    setTimeout(() => {
                        checkPaymentStatusPeriodically(orderId, data.transaction_id);
                    }, 5000);
                } else {
                    // Utiliser l'API JavaScript FedaPay
                    FedaPay.transaction.create({
                        amount: amount,
                        currency: 'XOF',
                        description: `Commande #${orderId}`,
                        customer: {
                            firstname: customerName.split(' ')[0] || '',
                            lastname: customerName.split(' ').slice(1).join(' ') || '',
                            email: customerEmail,
                            phone_number: {
                                number: customerPhone,
                                country: 'bj'
                            }
                        },
                        callback_url: callbackUrl
                    }, function(response) {
                        console.log('FedaPay checkout response:', response);
                        if (response.reason === 'success') {
                            // Vérifier le paiement
                            checkPaymentStatus(orderId, response.transaction.id);
                        } else {
                            showPaymentError('Paiement annulé ou échoué');
                            resetButton();
                        }
                    });
                }
            } else {
                showPaymentError(data.message || 'Erreur lors de la création de la transaction');
                resetButton();
            }
        })
        .catch(error => {
            console.error('Erreur FedaPay:', error);
            showPaymentError('Une erreur est survenue lors du paiement');
            resetButton();
        });

        function resetButton() {
            paymentButton.innerHTML = originalText;
            paymentButton.disabled = false;
        }

        function checkPaymentStatus(orderId, transactionId) {
            fetch(`/checkout/fedapay/verify/${orderId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest'
                },
                body: JSON.stringify({
                    transactionId: transactionId
                })
            })
            .then(response => response.json())
            .then(data => {
                console.log('Payment verification response:', data);

                if (data.success && data.status === 'paid') {
                    showPaymentSuccess();
                    // Redirection vers la page de succès
                    setTimeout(() => {
                        window.location.href = `/checkout/payment-success/${orderId}`;
                    }, 2000);
                } else {
                    showPaymentError('Le paiement n\'a pas pu être validé');
                    resetButton();
                }
            })
            .catch(error => {
                console.error('Erreur de vérification:', error);
                showPaymentError('Erreur lors de la vérification du paiement');
                resetButton();
            });
        }

        function checkPaymentStatusPeriodically(orderId, transactionId) {
            let attempts = 0;
            const maxAttempts = 12; // 2 minutes maximum (12 x 10 secondes)
            
            const checkInterval = setInterval(() => {
                attempts++;
                console.log(`Vérification du paiement - Tentative ${attempts}/${maxAttempts}`);
                
                fetch(`/checkout/fedapay/verify/${orderId}`, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({
                        transactionId: transactionId
                    })
                })
                .then(response => response.json())
                .then(data => {
                    console.log('Vérification périodique:', data);
                    
                    if (data.success && data.status === 'paid') {
                        clearInterval(checkInterval);
                        showPaymentSuccess('Paiement confirmé ! Redirection...');
                        setTimeout(() => {
                            window.location.href = `/checkout/payment-success/${orderId}`;
                        }, 1500);
                    } else if (attempts >= maxAttempts) {
                        clearInterval(checkInterval);
                        showPaymentError('Délai de vérification dépassé. Actualisez la page.');
                        resetButton();
                    }
                })
                .catch(error => {
                    console.error('Erreur vérification périodique:', error);
                    if (attempts >= maxAttempts) {
                        clearInterval(checkInterval);
                        showPaymentError('Erreur lors de la vérification');
                        resetButton();
                    }
                });
            }, 10000); // Vérifier toutes les 10 secondes
        }
    });

    function showPaymentError(message) {
        const alertDiv = document.getElementById('payment-result');
        if (alertDiv) {
            alertDiv.className = 'alert alert-danger';
            alertDiv.innerHTML = '<i class="fas fa-exclamation-triangle me-2"></i>' + message;
            alertDiv.style.display = 'block';
        }
    }

    function showPaymentSuccess() {
        const alertDiv = document.getElementById('payment-result');
        if (alertDiv) {
            alertDiv.className = 'alert alert-success';
            alertDiv.innerHTML = '<i class="fas fa-check-circle me-2"></i>Paiement réussi ! Redirection en cours...';
            alertDiv.style.display = 'block';
        }
    }
});
// Après le succès de FedaPay, vérifier le paiement côté serveur
        function verifyFedaPayPayment(transactionId) {
            if (!orderId) {
                console.error('Order ID not found');
                showPaymentResult(false, "Erreur: Identifiant de commande manquant");
                return;
            }

            console.log('Verifying FedaPay payment - Transaction ID:', transactionId, 'Order ID:', orderId);
            showPaymentResult(true, "🔄 Vérification du paiement en cours...");

            fetch(`/checkout/fedapay/verify/${orderId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    transactionId: transactionId
                })
            })
            .then(response => {
                console.log('FedaPay verify response status:', response.status);
                return response.json();
            })
            .then(data => {
                console.log('FedaPay verify response data:', data);

                if (data.success && data.status === 'paid') {
                    showPaymentResult(true, "✅ Paiement confirmé ! Redirection en cours...");

                    // Rediriger vers la page de succès après 2 secondes
                    setTimeout(() => {
                        window.location.href = `/checkout/payment-success/${orderId}`;
                    }, 2000);
                } else if (data.success && data.status === 'pending') {
                    showPaymentResult(true, "⏳ Paiement en cours de traitement...");

                    // Revérifier après quelques secondes
                    setTimeout(() => {
                        verifyFedaPayPayment(transactionId);
                    }, 3000);
                } else {
                    showPaymentResult(false, `❌ ${data.message || 'Échec de la vérification du paiement'}`);
                }
            })
            .catch(error => {
                console.error('Error verifying payment:', error);
                showPaymentResult(false, "❌ Erreur lors de la vérification du paiement");
            });
        }