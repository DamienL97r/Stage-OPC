


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