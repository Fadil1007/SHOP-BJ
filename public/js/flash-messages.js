// Flash Messages - Fermeture manuelle avec réapparition
(function() {
    'use strict';

    if (window.FlashMessagesHandler) {
        return;
    }
    window.FlashMessagesHandler = true;

    console.log('=== FLASH MESSAGES: Système de fermeture manuelle activé ===');

    function initializeFlashMessages() {
        // Recherche des messages flash
        const flashMessages = document.querySelectorAll('.flash-message-closable');
        console.log('Flash Messages: Messages trouvés:', flashMessages.length);

        // S'assurer que tous les messages sont visibles au chargement
        flashMessages.forEach(function(message) {
            message.classList.remove('flash-message-hidden');
            console.log('Message flash affiché:', message.getAttribute('data-flash-id'));
        });

        // Recherche des boutons de fermeture
        const closeButtons = document.querySelectorAll('.flash-message-closable .btn-close');
        console.log('Flash Messages: Boutons de fermeture trouvés:', closeButtons.length);

        // Configuration des boutons (si pas déjà fait via onclick)
        closeButtons.forEach(function(button) {
            if (!button.dataset.configured) {
                button.dataset.configured = 'true';
                console.log('Bouton de fermeture configuré');
            }
        });
    }

    // Initialisation au chargement
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initializeFlashMessages);
    } else {
        initializeFlashMessages();
    }

    console.log('=== FLASH MESSAGES: Initialisation terminée ===');
})();

// Fonction globale pour fermer un message (appelée par onclick)
window.closeFlashMessage = function(messageId) {
    const messageElement = document.querySelector(`[data-flash-id="${messageId}"]`);
    if (messageElement) {
        messageElement.classList.add('flash-message-hidden');
        console.log('Message flash fermé manuellement:', messageId);
    }
};