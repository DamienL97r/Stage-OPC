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
const carouselCounterItems = document.querySelectorAll('.carousel-counter-item input[type="radio"]');
let autoSlideInterval;
let timerBarIntervals = [];

function changeVideoSlide(newIndex) {
    if (newIndex >= 0 && newIndex < videoSlides.length) {
        videoSlideIndex = newIndex;
        videoSlides.forEach((slide, index) => {
            slide.style.transform = `translateX(-${100 * videoSlideIndex}%)`;
        });
        updateCarouselCounter();
        startTimerAnimation();
    }
}

function startAutoSlide() {
    clearInterval(autoSlideInterval);
    autoSlideInterval = setInterval(() => {
        changeVideoSlide((videoSlideIndex + 1) % videoSlides.length);
    }, 4000);
}

function updateCarouselCounter() {
    carouselCounterItems.forEach((input, index) => {
        input.checked = index === videoSlideIndex;
    });
}

function startTimerAnimation() {
    // Arrêtez toutes les minuteries existantes
    timerBarIntervals.forEach(interval => clearInterval(interval));
    timerBarIntervals = [];

    const timerBar = document.querySelector(`#timer-bar-${videoSlideIndex}`);
    timerBar.style.animation = 'none';
    void timerBar.offsetWidth;
    timerBar.style.animation = null;

    let timeRemaining = 4;
    const timerInterval = 100;

    const timerBarUpdate = setInterval(() => {
        timeRemaining -= timerInterval / 1000;
        const percentageRemaining = (timeRemaining / 4) * 100;
        timerBar.style.transform = `scaleX(${percentageRemaining / 100})`;

        if (timeRemaining <= 0) {
            clearInterval(timerBarUpdate);
            timerBar.style.transform = 'scaleX(1)';
        }
    }, timerInterval);

    // Ajoutez l'ID de l'intervalle actuel à la liste
    timerBarIntervals.push(timerBarUpdate);

    // Masquer les minuteurs non sollicités
    document.querySelectorAll('.timer-bar').forEach((bar, index) => {
        if (index === videoSlideIndex) {
            bar.style.display = 'block';
        } else {
            bar.style.display = 'none';
        }
    });

    // Masquer les points du slider non sollicités
    document.querySelectorAll('.dot-slider').forEach((bar, index) => {
        if (index === videoSlideIndex) {
            bar.style.backgroundColor = 'rgba(255, 255, 255, 0.6)';
        } else {
            bar.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
        }
    });
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

// Clic sur les inputs du compteur
carouselCounterItems.forEach((input, index) => {
    input.addEventListener('click', () => {
        changeVideoSlide(index);
        startAutoSlide();
    });
});

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.timer-bar').forEach((bar, index) => {
        if (index === 0) {
            bar.style.display = 'block';
        } else {
            bar.style.display = 'none';
        }
    });

    document.querySelectorAll('.dot-slider').forEach((bar, index) => {
        if (index === 0) {
            bar.style.backgroundColor = 'rgba(255, 255, 255, 0.6)';
        } else {
            bar.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
        }
    });
});

// Masquer les points du slider non sollicités
document.querySelectorAll('.dot-slider').forEach((bar, index) => {
    if (index === 0) {
        bar.style.backgroundColor = 'rgba(255, 255, 255, 0.6)';
    } else {
        bar.style.backgroundColor = 'rgba(255, 255, 255, 0.1)';
    }
});