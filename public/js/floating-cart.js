/**
 * RACHA-NOVA - Floating Cart JavaScript
 *
 * Gestion du panier flottant style Shein à droite de l'écran
 */

// Fonction pour mettre à jour le total affiché dans le panier flottant
function updateFloatingCartTotal(total) {
    const floatingCartTotal = document.getElementById('floating-cart-total');
    if (floatingCartTotal) {
        floatingCartTotal.textContent = formatPriceForFloatingCart(total);
    }
}

// Fonction pour formater un prix
function formatPriceForFloatingCart(price) {
    // Vérifier si price est un nombre valide
    if (typeof price !== 'number' || isNaN(price)) {
        console.warn('Prix invalide pour le formatage du panier flottant:', price);
        return '0 FCFA';
    }
    return price.toLocaleString('fr-FR', { minimumFractionDigits: 0, maximumFractionDigits: 0 }) + ' FCFA';
}

document.addEventListener('DOMContentLoaded', function() {
    // Éléments du panier flottant
    const floatingCart = document.getElementById('floating-cart');
    
    // Charge le montant total initial du panier
    function fetchCartTotal() {
        fetch('/cart', {
            headers: {
                'X-Requested-With': 'XMLHttpRequest'
            }
        })
        .then(response => response.json())
        .then(data => {
            if (data.success && data.total !== undefined) {
                updateFloatingCartTotal(data.total);
            }
        })
        .catch(error => {
            console.error('Erreur lors de la récupération du total du panier:', error);
        });
    }
    
    // Vérifie si le total du panier flottant est vide et tente de le charger
    const floatingCartTotal = document.getElementById('floating-cart-total');
    if (floatingCartTotal && floatingCartTotal.textContent.trim() === '') {
        fetchCartTotal();
    }
    
    // Animation au survol pour le panier flottant
    if (floatingCart) {
        floatingCart.addEventListener('mouseenter', function() {
            const tooltip = this.querySelector('.cart-tooltip');
            if (tooltip) {
                tooltip.style.opacity = '1';
            }
        });
        
        floatingCart.addEventListener('mouseleave', function() {
            const tooltip = this.querySelector('.cart-tooltip');
            if (tooltip) {
                tooltip.style.opacity = '0';
            }
        });
    }
    
    // Cette fonction n'est plus nécessaire car nous mettons à jour tous les compteurs directement
    // dans la fonction updateCartCounter dans cart.js
    // function syncCartCounters() { ... }
});