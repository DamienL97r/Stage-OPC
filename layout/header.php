<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Punch Com</title>
    
    <link rel="stylesheet" href="assets/CSS/style.css">
    <script src="assets/JS/script.js"></script>
</head>
<body class="">

<div class="navbar">

    <img src="assets/IMG/Logo/ONE_PUNCH_LOGO-removebg-preview.png" alt="logo">

    <button id="menu-toggle-btn" onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
        <svg width="50" height="50" viewBox="0 0 100 100">
            <path class="line line1" d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
            <path class="line line2" d="M 20,50 H 80" />
            <path class="line line3" d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
        </svg>
    </button>
</div>

<nav id="menu">
    <a class="onglet" href="accueil">Accueil</a>
    <a class="onglet" href="nos-services">Nos services</a>
    <a class="onglet" href="a-propos">A propos</a>
    <a class="onglet" href="nos-creations">Nos créations</a>
    <a class="onglet" href="contact">Contact</a>

    <div class="information-menu-footer">
        <div class="item-information-menu-footer">
            <img src="assets/IMG/Icons/contactIcons/enveloppe.png" alt="icon-mail">
            <a href="mailto:">onepunchcom@contact.com</a>
        </div>
        <div class="item-information-menu-footer">
            <img src="assets/IMG/Icons/contactIcons/telephone.png" alt="icon-phone">
            <a href="tel:+">01 23 45 67 89</a>
        </div>
    </div>
</nav>