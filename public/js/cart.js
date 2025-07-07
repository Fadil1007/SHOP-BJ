/**
 * RACHA-NOVA - Cart JavaScript File
 *
 * Gestion des interactions du panier côté client
 */

// Variables globales pour éviter les conflits
let isCartOperationInProgress = false;
let cartHandlersInitialized = false;

/**
 * Fonction globale pour ajouter un produit au panier
 */
function addToCart(productId, quantity = 1, size = null, color = null) {
    // Éviter les opérations multiples simultanées
    if (isCartOperationInProgress) {
        console.log('Opération de panier en cours, veuillez patienter...');
        return;
    }

    isCartOperationInProgress = true;

    // Préparer les données pour la requête
    const data = new URLSearchParams();
    data.append('quantity', quantity);

    if (size) {
        data.append('size', size);
    }

    if (color) {
        data.append('color', color);
    }

    // Effectuer la requête AJAX
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
            updateCartCounter(data.cart_count);

            // Met à jour le total du panier flottant si la fonction existe
            if (typeof updateFloatingCartTotal === 'function' && data.total !== undefined) {
                updateFloatingCartTotal(data.total);
            }

            // Affiche un message de succès
            showNotification('success', data.message || 'Produit ajouté au panier');
        } else {
            if (data.redirect) {
                // Rediriger vers la page de connexion si l'utilisateur n'est pas connecté
                showNotification('error', data.message || 'Veuillez vous connecter pour ajouter des produits au panier');
                setTimeout(() => {
                    window.location.href = data.redirect;
                }, 2000);
            } else {
                showNotification('error', data.message || 'Erreur lors de l\'ajout au panier');
            }
        }
    })
    .catch(error => {
        console.error('Erreur lors de l\'ajout au panier:', error);
        showNotification('error', 'Une erreur est survenue lors de l\'ajout au panier');
    })
    .finally(() => {
        isCartOperationInProgress = false;
        window.cartOperationInProgress = false;
        window.cartOperationId = null;
    });
}

/**
 * Met à jour le compteur d'articles dans le panier
 */
function updateCartCounter(count) {
    console.log('Mise à jour du compteur de panier avec la valeur:', count);

    // Met à jour tous les compteurs de panier sur la page avec la classe .cart-count
    const cartCountElements = document.querySelectorAll('.cart-count');
    if (cartCountElements.length > 0) {
        cartCountElements.forEach(element => {
            if (count > 0) {
                element.textContent = count;
                element.classList.remove('d-none');
            } else {
                element.classList.add('d-none');
            }
        });
        console.log(`${cartCountElements.length} compteurs de panier mis à jour: ${count} article(s)`);
    }

    // Met à jour également le compteur du panier flottant
    const floatCartCountElements = document.querySelectorAll('.cart-count-float');
    if (floatCartCountElements.length > 0) {
        floatCartCountElements.forEach(element => {
            if (count > 0) {
                element.textContent = count;
                element.classList.remove('d-none');
            } else {
                element.classList.add('d-none');
            }
        });
        console.log(`${floatCartCountElements.length} compteurs flottants mis à jour`);
    }
}

/**
 * Affiche une notification
 */
function showNotification(type, message) {
    // Vérifie si l'élément de notification existe déjà
    let notificationContainer = document.getElementById('notification-container');

    // Crée le conteneur s'il n'existe pas
    if (!notificationContainer) {
        notificationContainer = document.createElement('div');
        notificationContainer.id = 'notification-container';
        notificationContainer.style.position = 'fixed';
        notificationContainer.style.top = '20px';
        notificationContainer.style.right = '20px';
        notificationContainer.style.zIndex = '9999';
        document.body.appendChild(notificationContainer);
    }

    // Crée la notification
    const notification = document.createElement('div');
    notification.className = `alert alert-${type === 'success' ? 'success' : 'danger'} alert-dismissible fade show`;
    notification.style.minWidth = '250px';
    notification.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    `;

    // Ajoute la notification au conteneur
    notificationContainer.appendChild(notification);

    // Auto-fermeture après 5 secondes
    setTimeout(() => {
        notification.classList.remove('show');
        setTimeout(() => {
            if (notificationContainer.contains(notification)) {
                notificationContainer.removeChild(notification);
            }
        }, 500);
    }, 5000);
}

/**
 * Ajoute un produit aux favoris
 */
function addToWishlist(productId) {
    fetch(`/favoris/basculer/${productId}`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    })
    .then(response => {
        if (response.redirected) {
            window.location.href = '/connexion';
            return;
        }
        return response.json();
    })
    .then(data => {
        if (data && data.success) {
            const wishlistButtons = document.querySelectorAll(`.add-to-wishlist[data-product-id="${productId}"]`);

            wishlistButtons.forEach(button => {
                if (data.in_wishlist) {
                    button.classList.add('active');
                    button.setAttribute('title', 'Retirer des favoris');
                } else {
                    button.classList.remove('active');
                    button.setAttribute('title', 'Ajouter aux favoris');
                }
            });

            showNotification('success', data.message);

            const wishlistCounters = document.querySelectorAll('.wishlist-counter');
            if (wishlistCounters.length > 0 && data.wishlist_count !== undefined) {
                wishlistCounters.forEach(counter => {
                    counter.textContent = data.wishlist_count;

                    if (data.wishlist_count > 0) {
                        counter.classList.remove('d-none');
                    } else {
                        counter.classList.add('d-none');
                    }
                });
            }
        } else if (data) {
            showNotification('info', data.message || 'Une erreur est survenue');
        }
    })
    .catch(error => {
        console.error('Erreur lors de l\'ajout aux favoris:', error);
        showNotification('danger', 'Une erreur est survenue');
    });
}

/**
 * Met à jour la quantité d'un article via AJAX
 */
function updateCartItemQuantity(itemId, quantity) {
    // Éviter les opérations multiples simultanées
    if (isCartOperationInProgress) {
        console.log('Opération de panier en cours, veuillez patienter...');
        return;
    }

    // Vérifier que la quantité est positive
    if (quantity < 1) {
        quantity = 1;
    }

    isCartOperationInProgress = true;

    fetch(`/cart/update/${itemId}`, {
        method: 'POST',
        body: new URLSearchParams({
            'quantity': quantity
        }),
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/x-www-form-urlencoded'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Met à jour le sous-total pour cet article
            const cartItem = document.querySelector(`.cart-item[data-product-id="${itemId}"], .cart-item[data-item-id="${itemId}"]`);
            if (cartItem) {
                const subtotalElement = cartItem.querySelector('.subtotal');
                if (subtotalElement && data.subTotal !== undefined) {
                    subtotalElement.textContent = formatPrice(data.subTotal);
                }
            }

            // Met à jour les totaux du panier
            updateCartTotals(data.total);

            // Met à jour le compteur du panier
            updateCartCounter(data.cart_count);

            showNotification('success', 'Quantité mise à jour');
        } else if (data.redirect) {
            showNotification('error', data.message || 'Veuillez vous connecter pour modifier votre panier');
            setTimeout(() => {
                window.location.href = data.redirect;
            }, 2000);
        } else {
            showNotification('error', data.message || 'Une erreur est survenue lors de la mise à jour');
        }
    })
    .catch(error => {
        console.error('Erreur lors de la mise à jour du panier:', error);
        showNotification('error', 'Une erreur est survenue lors de la mise à jour');
    })
    .finally(() => {
        isCartOperationInProgress = false;
        window.cartOperationInProgress = false;
        window.cartOperationId = null;
    });
}

/**
 * Supprime un article du panier via AJAX
 */
function removeCartItem(itemId, cartItemElement) {
    // Éviter les opérations multiples simultanées
    if (isCartOperationInProgress) {
        console.log('Opération de panier en cours, veuillez patienter...');
        return;
    }

    isCartOperationInProgress = true;

    fetch(`/cart/remove/${itemId}`, {
        method: 'POST',
        headers: {
            'X-Requested-With': 'XMLHttpRequest'
        }
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Supprime l'élément du DOM
            if (cartItemElement) {
                cartItemElement.remove();
            }

            // Met à jour les totaux du panier
            updateCartTotals(data.total);

            // Met à jour le compteur du panier
            updateCartCounter(data.cart_count);

            // Si le panier est vide, recharger la page
            if (data.cart_count === 0) {
                setTimeout(() => {
                    window.location.reload();
                }, 1000);
            }

            showNotification('success', 'Produit retiré du panier');
        } else if (data.redirect) {
            showNotification('error', data.message || 'Veuillez vous connecter pour supprimer des produits du panier');
            setTimeout(() => {
                window.location.href = data.redirect;
            }, 2000);
        } else {
            showNotification('error', data.message || 'Une erreur est survenue');
        }
    })
    .catch(error => {
        console.error('Erreur lors de la suppression de l\'article:', error);
        showNotification('error', 'Une erreur est survenue lors de la suppression');
    })
    .finally(() => {
        isCartOperationInProgress = false;
        window.cartOperationInProgress = false;
        window.cartOperationId = null;
    });
}

/**
 * Mise à jour des totaux du panier
 */
function updateCartTotals(total) {
    const cartSubtotalElement = document.getElementById('cartSubtotal');
    const cartTotalElement = document.getElementById('cartTotal');

    if (cartSubtotalElement) {
        cartSubtotalElement.textContent = formatPrice(total);
    }

    if (cartTotalElement) {
        cartTotalElement.textContent = formatPrice(total);
    }

    // Met à jour le total du panier flottant si la fonction existe
    if (typeof updateFloatingCartTotal === 'function') {
        updateFloatingCartTotal(total);
    }
}

/**
 * Formate un prix
 */
function formatPrice(price) {
    if (typeof price !== 'number' || isNaN(price)) {
        console.warn('Prix invalide pour le formatage:', price);
        return '0 FCFA';
    }
    return price.toLocaleString('fr-FR', { minimumFractionDigits: 0, maximumFractionDigits: 0 }) + ' FCFA';
}

/**
 * Supprime tous les gestionnaires d'événements du panier
 */
function removeCartEventListeners() {
    // Supprimer tous les gestionnaires existants en clonant les éléments
    const elementsWithEvents = document.querySelectorAll(
        '.increment, .decrement, .quantity-input, .cart-quantity-input, .remove-item, .cart-remove-item, .add-to-wishlist, .increase-quantity, .decrease-quantity'
    );

    elementsWithEvents.forEach(element => {
        const newElement = element.cloneNode(true);
        element.parentNode.replaceChild(newElement, element);
    });
}

/**
 * Gestionnaire d'événement unique pour éviter les doublons
 */
function handleCartClick(event) {
    const target = event.target;

    // Vérifier si l'élément cliqué ou son parent correspond à nos sélecteurs
    const button = target.closest('.increment, .decrement, .increase-quantity, .decrease-quantity, .remove-item, .cart-remove-item, .add-to-wishlist');

    if (!button) return;

    event.preventDefault();
    event.stopImmediatePropagation();

    const itemId = button.dataset.itemId || button.dataset.productId;

    if (button.classList.contains('increment') || button.classList.contains('increase-quantity')) {
        const input = button.parentElement.querySelector('.quantity-input, .cart-quantity-input') || 
                    button.previousElementSibling;

        if (input && itemId) {
            const currentValue = parseInt(input.value) || 1;
            const newValue = currentValue + 1;
            input.value = newValue;
            updateCartItemQuantity(itemId, newValue);
        }
    }
    else if (button.classList.contains('decrement') || button.classList.contains('decrease-quantity')) {
        const input = button.parentElement.querySelector('.quantity-input, .cart-quantity-input') || 
                    button.nextElementSibling;

        if (input && itemId) {
            const currentValue = parseInt(input.value) || 1;
            const newValue = Math.max(1, currentValue - 1);
            input.value = newValue;
            updateCartItemQuantity(itemId, newValue);
        }
    }
    else if (button.classList.contains('remove-item') || button.classList.contains('cart-remove-item')) {
        const cartItemElement = button.closest('.cart-item');

        if (itemId && confirm('Êtes-vous sûr de vouloir supprimer cet article ?')) {
            removeCartItem(itemId, cartItemElement);
        }
    }
    else if (button.classList.contains('add-to-wishlist')) {
        const productId = button.getAttribute('data-product-id');
        if (productId) {
            addToWishlist(productId);
        }
    }
}

/**
 * Gestionnaire pour les changements de quantité dans les inputs
 */
function handleQuantityChange(event) {
    const input = event.target;

    if (!input.classList.contains('quantity-input') && !input.classList.contains('cart-quantity-input')) {
        return;
    }

    event.stopImmediatePropagation();

    const itemId = input.dataset.itemId || input.dataset.productId;
    const newValue = Math.max(1, parseInt(input.value) || 1);
    input.value = newValue;

    if (itemId) {
        updateCartItemQuantity(itemId, newValue);
    }
}

/**
 * Initialisation des gestionnaires d'événements pour la page panier
 */
function initCartHandlers() {
    // Éviter la double initialisation
    if (cartHandlersInitialized) {
        console.log('Gestionnaires de panier déjà initialisés');
        return;
    }

    console.log('Initialisation des gestionnaires de panier...');

    // Supprimer tous les anciens gestionnaires
    removeCartEventListeners();

    // Ajouter un seul gestionnaire d'événement sur le document pour tous les clics
    document.addEventListener('click', handleCartClick);

    // Ajouter un gestionnaire pour les changements dans les inputs de quantité
    document.addEventListener('change', handleQuantityChange);

    cartHandlersInitialized = true;
    console.log('Gestionnaires de panier initialisés avec succès');
}

// Fonction pour réinitialiser complètement les gestionnaires
function resetCartHandlers() {
    cartHandlersInitialized = false;
    document.removeEventListener('click', handleCartClick);
    document.removeEventListener('change', handleQuantityChange);
    initCartHandlers();
}

// Initialisation lors du chargement du document
document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM chargé - Initialisation des gestionnaires de panier');
    initCartHandlers();
});

// Exposer la fonction de réinitialisation globalement pour les cas particuliers
window.resetCartHandlers = resetCartHandlers;