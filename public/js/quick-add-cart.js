/**
 * RACHA-NOVA - Quick Add to Cart JavaScript
 * 
 * Gestion de l'ajout rapide au panier depuis les cartes produits
 */

// Variables pour éviter les clics multiples et doublons
let isAddingToCart = false;
let quickAddHandlersInitialized = false;

// Verrouillage global pour éviter les conflits entre scripts
window.cartOperationInProgress = window.cartOperationInProgress || false;

/**
 * Gestion de l'ajout rapide au panier
 */
function handleQuickAddToCart(button) {
    // Vérifier le verrouillage global d'abord
    if (window.cartOperationInProgress || isAddingToCart || button.disabled) {
        console.log('Ajout en cours, veuillez patienter...');
        return;
    }

    // Vérifier si ce bouton n'a pas été cliqué récemment (debounce de 2 secondes)
    const lastClickTime = parseInt(button.dataset.lastClick || '0');
    const currentTime = Date.now();
    
    if (currentTime - lastClickTime < 2000) {
        console.log('Clic trop rapide, ignoré');
        return;
    }
    
    button.dataset.lastClick = currentTime.toString();
    
    // Activer les verrous
    isAddingToCart = true;
    window.cartOperationInProgress = true;

    const productId = button.getAttribute('data-product-id');
    const size = button.getAttribute('data-size') || null;
    const color = button.getAttribute('data-color') || null;

    console.log('Ajout rapide au panier - Produit:', productId, 'Taille:', size, 'Couleur:', color);

    // Désactiver temporairement le bouton
    const originalText = button.innerHTML;
    button.disabled = true;
    button.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Ajout...';

    // Appel direct à l'API
    const data = new URLSearchParams();
    data.append('quantity', 1);

    if (size) {
        data.append('size', size);
    }

    if (color) {
        data.append('color', color);
    }

    fetch(`/cart/add/${productId}`, {
        method: 'POST',
        body: data,
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Met à jour le compteur du panier
            if (typeof updateCartCounter === 'function') {
                updateCartCounter(data.cart_count);
                console.log('Mise à jour du compteur du panier depuis quick-add-cart.js avec la valeur:', data.cart_count);
            }

            // Met à jour le total du panier flottant si la fonction existe
            if (typeof updateFloatingCartTotal === 'function' && data.total !== undefined) {
                updateFloatingCartTotal(data.total);
            }

            // Affiche un message de succès
            if (typeof showNotification === 'function') {
                showNotification('success', data.message || 'Produit ajouté au panier');
            }
        } else {
            if (data.redirect) {
                if (typeof showNotification === 'function') {
                    showNotification('error', data.message || 'Veuillez vous connecter pour ajouter des produits au panier');
                }
                setTimeout(() => {
                    window.location.href = data.redirect;
                }, 2000);
            } else {
                if (typeof showNotification === 'function') {
                    showNotification('error', data.message || 'Erreur lors de l\'ajout au panier');
                }
            }
        }
    })
    .catch(error => {
        console.error('Erreur lors de l\'ajout au panier:', error);
        if (typeof showNotification === 'function') {
            showNotification('error', 'Une erreur est survenue lors de l\'ajout au panier');
        }
    })
    .finally(() => {
        // Réactiver le bouton
        button.disabled = false;
        button.innerHTML = originalText;
        isAddingToCart = false;
        window.cartOperationInProgress = false;
        
        // Retirer le marquage de traitement en cours
        button.removeAttribute('data-processing');
    });
}

/**
 * Gestionnaire d'événement unique pour l'ajout rapide
 */
function handleQuickAddClick(event) {
    const button = event.target.closest('.quick-add-to-cart, .btn-add-to-cart');

    if (!button) return;

    // Empêcher tout clic rapide ou en double
    if (
        button.dataset.processing === 'true' ||
        window.cartOperationInProgress ||
        isAddingToCart
    ) {
        console.log('Ajout déjà en cours, clic ignoré');
        event.preventDefault();
        event.stopImmediatePropagation();
        return;
    }

    // Vérifier que c'est bien un bouton d'ajout rapide et pas un autre type
    if (!button.classList.contains('quick-add-to-cart') && !button.classList.contains('btn-add-to-cart')) {
        return;
    }

    event.preventDefault();
    event.stopImmediatePropagation();

    // Marquer le bouton comme en cours
    button.dataset.processing = 'true';

    // Appeler la fonction principale
    handleQuickAddToCart(button);

    // Le reset du processing se fera dans .finally() de handleQuickAddToCart
}

/**
 * Initialisation des boutons d'ajout rapide
 */
function initQuickAddButtons() {
    // Éviter la double initialisation
    if (quickAddHandlersInitialized) {
        console.log('Gestionnaires d\'ajout rapide déjà initialisés');
        return;
    }

    // Supprimer les anciens gestionnaires
    document.removeEventListener('click', handleQuickAddClick);

    // Marquer les boutons existants comme non traités
    const existingButtons = document.querySelectorAll('.quick-add-to-cart, .btn-add-to-cart');
    existingButtons.forEach(button => {
        button.removeAttribute('data-quick-add-initialized');
        button.removeAttribute('data-last-click');
    });

    // Ajouter le gestionnaire unique
    document.addEventListener('click', handleQuickAddClick);

    quickAddHandlersInitialized = true;

    console.log(`${existingButtons.length} boutons d'ajout rapide initialisés`);
}

// Fonction pour réinitialiser les gestionnaires
function resetQuickAddHandlers() {
    quickAddHandlersInitialized = false;
    document.removeEventListener('click', handleQuickAddClick);
    initQuickAddButtons();
}

// Initialisation au chargement du DOM
document.addEventListener('DOMContentLoaded', function() {
    console.log('Initialisation du script quick-add-cart.js');
    initQuickAddButtons();
});

// Exposer la fonction de réinitialisation globalement
window.resetQuickAddHandlers = resetQuickAddHandlers;