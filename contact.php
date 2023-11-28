<?php
require_once __DIR__ . '../layout/header.php';

 ?>

<div class="page-title heading-page">
    <h1>contact</h1>
    <hr>
</div>

<div class="contact-container">
    <h3>Nos <span>Informations</span></h3>

    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem rerum minima perferendis voluptatem soluta. Nulla ea cumque sit. Est aut enim, molestias voluptatem nostrum perspiciatis repudiandae tempore laborum magnam tenetur!</p>

    <div class="contact-info">

        <div class="contact-info-item">
            <img src="/OPC/assets/IMG/Icons/contactIcons/telephone.png" alt="">
            <a href="tel:+">01 23 45 67 89</a>
        </div>

        <div class="contact-info-item">
            <img src="/OPC/assets/IMG/Icons/contactIcons/enveloppe.png" alt="">
            <a href="mailto:">opc-contact@gmail.com</a>
        </div>

        <div class="contact-info-item">
            <img src="/OPC/assets/IMG/Icons/contactIcons/enveloppe.png" alt="">
            <p>addresse 12 rue Martin <br> 2454 Paris, FR</p>
        </div>
    </div>

    <div class="socials-info">
        <div class="contact-info-item">
            <img src="/OPC/assets/IMG/Icons/contactIcons/telephone.png" alt="">
            <a href="https://www.arrimages.org/contact/contact.html">Instagram</a>
        </div>

        <div class="contact-info-item">
            <img src="/OPC/assets/IMG/Icons/contactIcons/enveloppe.png" alt="">
            <a href="#">LinkedIn</a>
        </div>

        <div class="contact-info-item">
            <img src="/OPC/assets/IMG/Icons/contactIcons/enveloppe.png" alt="">
            <a href="#">Youtube</a>
        </div>
    </div>

</div>

<div class="contact-container">
    <h3>Envoyer un <span>Message</span></h3>
</div>

<div class="form-container">

    <form action="/votre-page-de-traitement.php" method="post">


        <div class="inputs-view" id="contact-form-step-1">
            <div class="inputs">
                <div class="input-label-container">
                    <label for="nom">Nom <span>*</span></label>
                    <input type="text" id="nom" name="nom" placeholder="Nom" required>
                </div>
                
                <div class="input-label-container">
                    <label for="prenom">Prénom <span>*</span></label>
                    <input type="text" id="prenom" name="prenom" placeholder="Prénom" required>
                </div>
                
            </div>

            <button id="to-step-2">Suivant</button>
        </div>


        <div class="inputs-view" id="contact-form-step-2">
            <div class="inputs">
                <div class="input-label-container">
                    <label for="email">Email <span>*</span></label>
                    <input type="email" id="email" name="email" placeholder="Email" required>
                </div>
                
                <div class="input-label-container">
                <label for="telephone">Téléphone <span>*</span></label>
                <input type="tel" id="telephone" name="telephone" placeholder="Téléphone" required>
                </div>
                
            </div>
            
            <button id="to-step-3">Suivant</button>
        </div>

        <div class="inputs-view" id="contact-form-step-3">
            <div class="inputs">
                <div class="input-label-container">
                    <label for="entreprise">Nom de l'entreprise (facultatif)</label>
                    <input type="text" id="entreprise" name="entreprise" placeholder="Nom de l'entreprise">
                </div>
            
                <div class="input-label-container">
                    <label for="service">Service (facultatif)</label>
                    <select id="service" name="service">
                        <option value="web">Création de sites web</option>
                        <option value="audiovisuel">Création de contenu audio visuel</option>
                        <option value="googleAds">Google Ads</option>
                        <option value="socialAds">Social Ads</option>
                    </select>
                </div>
            </div>
            
            <button id="to-step-4">Suivant</button>
        </div>

        <div class="inputs-view" id="contact-form-step-4">
            <div class="inputs">
                <div class="input-label-container">
                    <label for="message">Message <span>*</span></label>
                    <textarea id="message" name="message" rows="4" required placeholder="Entrez votre messege ici..."></textarea>
                </div>
            </div>
            
            <button type="submit">Envoyer</button>
        </div>


    </form>
</div>

<script src="/OPC/assets/JS/script.js"></script>
<script src="/OPC/assets/JS/contact.js"></script>