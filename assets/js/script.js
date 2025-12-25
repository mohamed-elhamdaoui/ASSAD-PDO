// Animation simple au défilement
document.addEventListener('DOMContentLoaded', function() {
    console.log("ASSAD Zoo - Site chargé !");
    
    // Animation d'apparition des cartes
    const cards = document.querySelectorAll('.card');
    cards.forEach((card, index) => {
        card.style.opacity = "0";
        card.style.transition = "opacity 0.5s ease " + (index * 0.1) + "s";
        setTimeout(() => {
            card.style.opacity = "1";
        }, 100);
    });
});