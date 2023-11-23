<?php
require_once __DIR__ . '../layout/header.php';

?>


<div class="carousel-container">
<main>
  <ul class='slider'>
    <li class='item' style="background-image: url('assets/IMG/Images/devweb-design.jpg')">
      <div class='content'>
        <h2 class='title'>Création de sites internet</h2>
        <p class='description'> Lorem ipsum, dolor sit amet consectetur
        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
        praesentium nisi. Id laboriosam ipsam enim.  </p>
        <button class="white-btn-blue">En savoir plus</button>
      </div>
    </li>
    <li class='item' style="background-image: url('assets/IMG/Images/audio-visuel_communication.jpg')">
      <div class='content'>
        <h2 class='title'>Création de contenu audio visuel</h2>
        <p class='description'> Lorem ipsum, dolor sit amet consectetur
        adipisicing elit. Tempore fuga voluptatum, iure corporis inventore
        praesentium nisi. Id laboriosam ipsam enim.  </p>
        <button class="white-btn-red">En savoir plus</button>
      </div>
    </li>
    <li class='item' style="background-image: url('assets/IMG/Images/digital-marketing-1725340_640.jpg')">
      <div class='content'>
        <h2 class='title'>Google Ads</h2>
        <p class='description'>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
        </p>
        <button class="white-btn-blue">En savoir plus</button>
      </div>
    </li>

    <li class='item' style="background-image: url('assets/IMG/Images/phone-reseaux.jpg')">
      <div class='content'>
        <h2 class='title'>Social Ads</h2>
        <p class='description'>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore fuga voluptatum, iure corporis inventore praesentium nisi. Id laboriosam ipsam enim.
        </p>
        <button class="white-btn-red">En savoir plus</button>
      </div>
    </li>

  </ul>
  <nav class='nav'>
    <ion-icon class='btn prev' name="arrow-back-outline"></ion-icon>
    <ion-icon class='btn next' name="arrow-forward-outline"></ion-icon>
  </nav>
</main>
</div>



<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

<?php 
require_once __DIR__ . '../layout/footer.php';
?>