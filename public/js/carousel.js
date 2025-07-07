/**
 * RACHA-NOVA - Carousel JavaScript
 * Gestion du carrousel d'images de la page d'accueil
 */

document.addEventListener('DOMContentLoaded', function() {
    // Initialiser le carrousel avec les options avancées
    const heroCarousel = document.getElementById('heroCarousel');
    
    if (heroCarousel) {
        // Créer l'objet carousel avec Bootstrap
        const carousel = new bootstrap.Carousel(heroCarousel, {
            interval: 5000,      // Changement d'image toutes les 5 secondes
            pause: 'hover',      // Pause au survol
            wrap: true,          // Défilement en boucle
            keyboard: true,      // Navigation au clavier
            touch: true          // Support tactile pour mobile
        });
        
        // Animation du texte à chaque changement de slide
        heroCarousel.addEventListener('slide.bs.carousel', function(event) {
            // Animer le texte de la slide active
            const activeCaption = event.relatedTarget.querySelector('.carousel-caption');
            if (activeCaption) {
                activeCaption.classList.add('animate__animated', 'animate__fadeInUp');
                
                // Retirer la classe d'animation après l'animation
                setTimeout(function() {
                    activeCaption.classList.remove('animate__animated', 'animate__fadeInUp');
                }, 1000);
            }
        });
        
        // Gestion du swipe sur mobile
        let touchstartX = 0;
        let touchendX = 0;
        
        heroCarousel.addEventListener('touchstart', function(event) {
            touchstartX = event.changedTouches[0].screenX;
        });
        
        heroCarousel.addEventListener('touchend', function(event) {
            touchendX = event.changedTouches[0].screenX;
            handleSwipe();
        });
        
        function handleSwipe() {
            const threshold = 50; // Distance minimale pour un swipe
            
            if (touchendX < touchstartX - threshold) {
                // Swipe gauche - slide suivante
                carousel.next();
            }
            
            if (touchendX > touchstartX + threshold) {
                // Swipe droite - slide précédente
                carousel.prev();
            }
        }
    }
});