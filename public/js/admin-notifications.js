/**
 * SHOP BJ - Admin Notifications JavaScript
 * 
 * Gère les notifications pour les nouveaux messages de contact
 */
document.addEventListener('DOMContentLoaded', function() {
    
    // Variable pour stocker le nombre de messages non lus précédent
    let previousUnreadCount = 0;
    
    // Récupère le compteur initial depuis le badge
    const badge = document.querySelector('.nav-link.admin-nav-link .badge.bg-danger');
    if (badge) {
        previousUnreadCount = parseInt(badge.textContent) || 0;
    }
    
    // Son de notification
    let notificationSound = new Audio('/sounds/notification.mp3');

    /**
     * Vérifie périodiquement les nouveaux messages
     */
    function checkForNewMessages() {
        fetch('/admin/contact/check-new-messages')
            .then(response => response.json())
            .then(data => {
                // Met à jour le compteur dans le menu
                updateBadge(data.unreadCount);
                
                // Si de nouveaux messages sont arrivés, on affiche une notification
                if (data.hasNewMessages && data.unreadCount > previousUnreadCount) {
                    showNotification(data.unreadCount);
                }
                
                previousUnreadCount = data.unreadCount;
            })
            .catch(error => console.error('Erreur lors de la vérification des nouveaux messages:', error));
    }
    
    /**
     * Met à jour le badge avec le nombre de messages non lus
     */
    function updateBadge(count) {
        // Sélectionne l'élément du menu "Messages de contact"
        const contactMenuItem = document.querySelector('.nav-link.admin-nav-link[href*="contact"]');
        if (!contactMenuItem) return;
        
        // Supprime l'ancien badge s'il existe
        const oldBadge = contactMenuItem.querySelector('.badge');
        if (oldBadge) {
            oldBadge.remove();
        }
        
        // Ajoute un nouveau badge si nécessaire
        if (count > 0) {
            const newBadge = document.createElement('span');
            newBadge.className = 'badge bg-danger rounded-pill ms-2';
            newBadge.textContent = count;
            contactMenuItem.appendChild(newBadge);
        }
    }
    
    /**
     * Affiche une notification visuelle et sonore pour les nouveaux messages
     */
    function showNotification(count) {
        // Joue le son de notification
        try {
            notificationSound.play().catch(e => console.log('Impossible de jouer le son:', e));
        } catch (error) {
            console.log('Erreur lors de la lecture du son:', error);
        }
        
        // Crée une notification visuelle
        const notification = document.createElement('div');
        notification.className = 'notification-popup';
        notification.innerHTML = `
            <div class="notification-content">
                <i class="fas fa-envelope-open-text notification-icon"></i>
                <div class="notification-message">
                    <h3>Nouveau message de contact</h3>
                    <p>Vous avez ${count} message${count > 1 ? 's' : ''} non lu${count > 1 ? 's' : ''}.</p>
                </div>
                <button class="notification-close"><i class="fas fa-times"></i></button>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Animation d'entrée
        setTimeout(() => {
            notification.classList.add('show');
        }, 10);
        
        // Ajoute un événement pour fermer la notification
        const closeButton = notification.querySelector('.notification-close');
        closeButton.addEventListener('click', function() {
            notification.classList.remove('show');
            setTimeout(() => {
                notification.remove();
            }, 300);
        });
        
        // Ferme automatiquement la notification après 5 secondes
        setTimeout(() => {
            if (document.body.contains(notification)) {
                notification.classList.remove('show');
                setTimeout(() => {
                    if (document.body.contains(notification)) {
                        notification.remove();
                    }
                }, 300);
            }
        }, 5000);
    }
    
    // Vérifie les nouveaux messages toutes les 30 secondes
    setInterval(checkForNewMessages, 30000);
    
    // Vérifie aussi au chargement de la page
    setTimeout(checkForNewMessages, 2000);
    
    // Style CSS pour les notifications
    const notificationStyles = document.createElement('style');
    notificationStyles.textContent = `
        .notification-popup {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            max-width: 350px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transform: translateX(120%);
            transition: transform 0.3s ease;
            overflow: hidden;
            border-left: 4px solid #dc3545;
        }
        
        .notification-popup.show {
            transform: translateX(0);
        }
        
        .notification-content {
            display: flex;
            align-items: center;
            padding: 15px;
        }
        
        .notification-icon {
            font-size: 25px;
            color: #dc3545;
            margin-right: 15px;
        }
        
        .notification-message {
            flex: 1;
        }
        
        .notification-message h3 {
            margin: 0 0 5px;
            font-size: 16px;
            font-weight: bold;
        }
        
        .notification-message p {
            margin: 0;
            font-size: 14px;
            color: #666;
        }
        
        .notification-close {
            background: none;
            border: none;
            color: #999;
            cursor: pointer;
            font-size: 16px;
            padding: 0;
            margin-left: 10px;
            transition: color 0.2s;
        }
        
        .notification-close:hover {
            color: #333;
        }
    `;
    document.head.appendChild(notificationStyles);
});