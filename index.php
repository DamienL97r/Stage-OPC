<?php
require_once __DIR__ . '../layout/header.php';
?>
<div class= "carousel-container" >
  <div class="home-first-slide">
        <video autoplay loop muted>
            <source src="./assets/IMG/Videos/numerique.mp4" type="video/mp4">
        </video>

    <div class="overlay">
        <div class="heading-first-slide">
            <h2><span>ONE </span>PUNCH COM</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nam dolore, aut a quasi ad officiis cum autem dolor culpa delectus reiciendis nobis dolorem optio beatae distinctio veritatis ullam illo.</p>
            <br>
            <p>Loremrecusandae harum temporibus, ducimus rem praesentium eveniet, tempore animi velit?</p>

            <div class="first-slide-heading-btn">
                <button class="main-btn-blue">Nos services</button>
                <button class="main-btn-red">Contactez nous</button>
            </div>
        </div>
    </div>
</div>


<div class="home-slide" >

        <video autoplay loop muted>
            <source src="./assets/IMG/Videos/numerique.mp4" type="video/mp4">
        </video>
    <div class="overlay-blue">
        <div class="heading-slide">
            <h4>Créations de sites web</h4>
            <hr class="heading-separator-blue">
            <h2>Web Design</h2>
            <div class="heading-btn">
                <button class="main-btn-blue">Nous découvrir</button>
            </div>
        </div>
    </div>
</div>

<div class="home-slide" >

        <video autoplay loop muted>
            <source src="./assets/IMG/Videos/numerique.mp4" type="video/mp4">
        </video>
    <div class="overlay-red">
        <div class="heading-slide">
            <h4>Créations de contenu audio visuel</h4>
            <hr class="heading-separator-red">
            <h2>Réalisation</h2>
            <div class="heading-btn">
                <button class="main-btn-red">Nous découvrir</button>
            </div>
        </div>
    </div>
</div>

<div class="home-slide" >

        <video autoplay loop muted>
            <source src="./assets/IMG/Videos/numerique.mp4" type="video/mp4">
        </video>
    <div class="overlay-blue">
        <div class="heading-slide">
            <h4>Créations de sites web</h4>
            <hr class="heading-separator-blue">
            <h2>Développement de sites</h2>
            <div class="heading-btn">
                <button class="main-btn-blue">Nous découvrir</button>
            </div>
        </div>
    </div>
</div>


<div class="home-slide" >

        <video autoplay loop muted>
            <source src="./assets/IMG/Videos/numerique.mp4" type="video/mp4">
        </video>
    <div class="overlay-red">
        <div class="heading-slide">
            <h4>Créations de contenu audio visuel</h4>
            <hr class="heading-separator-red">
            <h2>Montage</h2>
            <div class="heading-btn">
                <button class="main-btn-red">Nous découvrir</button>
            </div>
        </div>
    </div>
</div>
   <button class="carousel-control prev">⟨</button> <!-- Chevrons gauche -->
  <button class="carousel-control next">⟩</button> <!-- Chevrons droite -->

</div>

<?php 
require_once __DIR__ . '../layout/footer.php';
?>