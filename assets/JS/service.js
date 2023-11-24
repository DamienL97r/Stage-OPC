// CAROUSEL SERVICE


const slider = document.querySelector('.slider');

function moveItem() {
  const items = document.querySelectorAll('.slider .item');
  slider.append(items[0]); // Déplace la première carte à la fin
}

function activate(e) {
  if (e.target.closest('.item')) {
    clearInterval(autoScroll); // Arrête le défilement automatique précédent
    moveItem(); // Déclenche le défilement manuel
    autoScroll = setInterval(moveItem, 10000); // Redémarre le défilement automatique
  }
}

let autoScroll = setInterval(moveItem, 10000); // Défilement automatique initial

slider.addEventListener('click', activate, false);