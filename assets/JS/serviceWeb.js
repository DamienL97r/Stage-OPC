//  MENU BURGER


document.addEventListener('DOMContentLoaded', function() {
    // Récupère les éléments de bouton de menu et de menu
    let toggleBtn = document.querySelector('#menu-toggle-btn');
    let menu = document.querySelector('#menu');

    // Ajoute un écouteur d'événement click au bouton de menu
    toggleBtn.addEventListener('click', function() {
        // Inverse l'état de visibilité du menu
        menu.classList.toggle('visible');
    });
});



// NAV SERVICE

document.addEventListener("DOMContentLoaded", function() {
    var serviceNavItems = document.querySelectorAll('.service-nav-item-blue');

    // Fonction pour gérer le clic sur un élément de la barre de navigation
    function handleNavItemClick(event) {
        // Retirez la classe "active" de tous les éléments
        serviceNavItems.forEach(function(item) {
            item.classList.remove('active-blue');
        });

        // Ajoutez la classe "active" à l'élément cliqué
        event.currentTarget.classList.add('active-blue');
    }

    // Ajoutez un écouteur de clic à chaque élément de la barre de navigation
    serviceNavItems.forEach(function(item) {
        item.addEventListener('click', handleNavItemClick);
    });
});