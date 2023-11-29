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
    let serviceNavItems = document.querySelectorAll('.service-nav-item-red');
    let FirsterviceNavItem = document.querySelector('#first-service-nav-item');

    // Ajoutez la classe "active-red" à l'élément au chargement de la page
    FirsterviceNavItem.classList.add('active-red');

    // Fonction pour gérer le clic sur un élément de la barre de navigation
    function handleNavItemClick(event) {
        // Retirez la classe "active-red" de tous les éléments
        serviceNavItems.forEach(function(item) {
            item.classList.remove('active-red');
        });

        // Ajoutez la classe "active-red" à l'élément cliqué
        event.currentTarget.classList.add('active-red');
    }

    // Ajoutez un écouteur de clic à chaque élément de la barre de navigation
    serviceNavItems.forEach(function(item) {
        item.addEventListener('click', handleNavItemClick);
    });
});