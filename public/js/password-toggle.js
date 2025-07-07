/**
 * SHOP BJ - Password Toggle JavaScript
 * 
 * Permet de basculer entre l'affichage et le masquage des mots de passe
 */
document.addEventListener('DOMContentLoaded', function() {
    console.log("Initialisation du script password-toggle.js");
    
    /**
     * Fonction qui gère le basculement de l'affichage du mot de passe
     * @param {HTMLElement} button - Le bouton de bascule
     */
    function setupTogglePasswordButton(button) {
        if (button.hasAttribute('data-password-toggle-initialized')) {
            return; // Éviter la double initialisation
        }
        
        button.setAttribute('data-password-toggle-initialized', 'true');
        
        button.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Récupérer l'ID du champ de mot de passe cible
            const targetId = this.getAttribute('data-target');
            console.log("Toggle password pour:", targetId);
            
            // Trouver le champ de mot de passe associé
            const passwordField = document.getElementById(targetId);
            if (!passwordField) {
                console.error("Champ de mot de passe non trouvé pour ID:", targetId);
                return;
            }
            
            // Basculer le type du champ - forcer la modification directe de l'attribut
            if (passwordField.getAttribute('type') === 'password') {
                // Changer en texte visible
                passwordField.setAttribute('type', 'text');
                this.innerHTML = '<i class="fas fa-eye-slash"></i>';
                console.log("Mot de passe visible pour:", targetId);
            } else {
                // Revenir en mode masqué
                passwordField.setAttribute('type', 'password');
                this.innerHTML = '<i class="fas fa-eye"></i>';
                console.log("Mot de passe masqué pour:", targetId);
            }
        });
    }
    
    // Initialiser tous les boutons de bascule existants
    document.querySelectorAll('.togglePassword').forEach(function(button) {
        setupTogglePasswordButton(button);
    });
    
    // Observer les mutations du DOM pour initialiser les boutons ajoutés dynamiquement
    const observer = new MutationObserver(function(mutations) {
        mutations.forEach(function(mutation) {
            if (mutation.addedNodes && mutation.addedNodes.length > 0) {
                mutation.addedNodes.forEach(function(node) {
                    // Vérifier si le nœud est un élément
                    if (node.nodeType === 1) {
                        // Rechercher les boutons de bascule dans le nœud ajouté
                        if (node.classList && node.classList.contains('togglePassword')) {
                            setupTogglePasswordButton(node);
                        } else if (node.querySelectorAll) {
                            node.querySelectorAll('.togglePassword').forEach(setupTogglePasswordButton);
                        }
                    }
                });
            }
        });
    });
    
    // Observer tout le document pour les changements
    observer.observe(document.body, {
        childList: true,
        subtree: true
    });
    
    console.log("Script password-toggle.js initialisé avec succès");
});