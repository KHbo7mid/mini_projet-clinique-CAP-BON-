<?php 
$pageTitle="Accueil";
$pageStyle='index.css';
$content ='
 <section id="hero">
       <div class="hero_text">
        <h2>Votre santé, notre priorité</h2>
        <p>La Clinique Le CapBon, vous offre un accueil personnalisé et des soins de qualité.</p>
        <button ><a href="../views/inscription.php">Inscription</a></button>
        <button><a href="../views/login.php">Login</a></button>
       </div>
       
        <img src="../public/images/hero_image.jpeg" alt="hero" id="hero_image">
    </section>
  
    <section id="services">
        <h1>Bienvenue à la Clinique Le <span>Cap Bon</span></h1>
        <p>La clinique vous offre des soins de qualité adaptés à vos besoins. Découvrez nos services :</p>
      <ul>
        <li>
            <a href="../views/polyclinique.php">
              <div class="service">
                  <p>Polyclinique</p>
                <img src="../public/images/prod1-ind.jpg" alt="polyclinique" >
              </div>
            </a>
        </li>
        <li>
            <a href="../views/centre_medical.php">
<div class="service">
    <p>Centre Medical</p>
    <img src="../public/images/prod2-ind1.jpg" alt="centre_medical">
</div>
            </a>
        </li>
        <li>
            <a href="../views/maison_repos.php">
                <div class="service">
                    <p>Maison du repos</p>
                <img src="../public/images/prod3-ind1.jpg" alt="maison_repos">

                </div>
            </a>
        </li>
      </ul>

    </section>
    <section id="contact">
        <h1>Contactez-nous</h1>
        <p>Pour toute prise de rendez-vous ou information supplémentaire, veuillez nous contacter au numéro suivant :</p>
        <p><strong>Téléphone : </strong>+216 71 123 456</p>
        <p><strong>Email : </strong><a href="mailto:info@cliniquecapbon.tn">info@cliniquecapbon.tn</a></p>
    </section>';
    include('layout.php');
    ?>