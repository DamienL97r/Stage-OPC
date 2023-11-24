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

// CAROUSEL HOME 

let videoSlideIndex = 0;
const videoSlides = document.querySelectorAll('.carousel-container .home-slide, .carousel-container .home-first-slide');
let autoSlideInterval;

function changeVideoSlide(newIndex) {
  if (newIndex >= 0 && newIndex < videoSlides.length) {
    videoSlideIndex = newIndex;
    videoSlides.forEach((slide, index) => {
      slide.style.transform = `translateX(-${100 * videoSlideIndex}%)`;
    });
  }
}

function startAutoSlide() {
  clearInterval(autoSlideInterval);
  autoSlideInterval = setInterval(() => {
    changeVideoSlide((videoSlideIndex + 1) % videoSlides.length);
  }, 10000);
}

// Initialisation du carrousel
startAutoSlide();

// Boutons de navigation
document.querySelector('.carousel-container .prev').addEventListener('click', () => {
  changeVideoSlide(videoSlideIndex - 1);
  startAutoSlide();
});

document.querySelector('.carousel-container .next').addEventListener('click', () => {
  changeVideoSlide(videoSlideIndex + 1);
  startAutoSlide();
});




