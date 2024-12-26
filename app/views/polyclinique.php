<?php 
$pageTitle="Polyclinique";
$pageStyle="services.css";
$pageScript="scriptDevice.js";
$content='<section id="title">
        <h1>POLYCLINIQUE</h1>
        <h5>DU CLINIQUE LE CAP BON</h5>
        <hr>
    </section>
    <section id="service">
        <h2>Nos services</h2>
        <ul>
            <li>Les spécialités chirurgicales</li>
            <li>Les spécialités médicales</li>
            <li>Imagerie médicale</li>
            <li>Laboratoire d\'analyses médicales</li>
            <li>Chirurgie ambulatoire</li>
            <li>Urgences médicales</li>
        </ul>
        <img src="../public/images/polyclinique1.jpg" alt="img1">
        <img src="../public/images/cap_bon_sante0.jpg" alt="img2">
        <img src="../public/images/hospital-3098683-1920.jpg" alt="img3">

    </section>
    <section class="tableau">
        <h2>Horaires </h2>
        <table>
            <thead>
                <tr>
                    <th>Jour</th>
                    <th>Horaires</th>
                   
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Lundi - Vendredi</td>
                    <td>08:00 - 18:00</td>
                   
                </tr>
                <tr>
                    <td>Samedi</td>
                    <td>08:00 - 14:00</td>
                   
                </tr>
                <tr>
                    <td>Urgences 24h/24</td>
                    <td>Disponible</td>
                    
                </tr>
            </tbody>
        </table>
    </section>
    <section class="tableau">
       
        <h2>Tarifs des Services</h2>
        <div id="device">
            <p> Selectionner le type de device:</p>
             <select name="selectDevice" id="selectDevice">
                 <option value="TND" >TND</option>
                 <option value="USD">USD</option>
                 <option value="EUR">EUR</option>
             </select>
           </div>
        <table>
            <thead>
                <tr>
                    <th>Service</th>
                    <th>Tarif</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Consultation générale</td>
                    <td class="prix" data-price="50">50 TND</td>
                </tr>
                <tr>
                    <td>Consultation spécialisée</td>
                    <td class="prix" data-price="80">80 TND</td>
                </tr>
                <tr>
                    <td>Imagerie médicale (Radio, Échographie)</td>
                    <td class="prix" data-price="100">100 TND</td>
                </tr>
                <tr>
                    <td>Laboratoire d\'analyses médicales</td>
                    <td class="prix" data-price="60">60 TND</td>
                </tr>
                <tr>
                    <td>Chirurgie ambulatoire</td>
                    <td class="prix" data-price="500">500 TND</td>
                </tr>
                <tr>
                    <td>Urgences médicales</td>
                    <td class="prix" data-price="100">100 TND</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section id="equipe">
        <h2>Notre Équipe Médicale</h2>
        <p>Nos médecins spécialisés vous assurent des soins de qualité dans différentes disciplines médicales.</p>
        <ul>
            <li><img src="../public/images/doctor1.jpg" alt="doctor1">Dr. Ahmed Ben Ali - Cardiologue</li>
            <li><img src="../public/images/doctor3.avif" alt="doctor3">Dr. Sara Toumi - Dermatologue</li>
            <li><img src="../public/images/doctor2.jpeg" alt="doctor2">Dr. Karim Youssef - Chirurgien</li>
            <li><img src="../public/images/doctor4.jpg" alt="doctor4">Dr. Amina Kallel - Neurologue</li>
        </ul>
    </section>';
    include("layout.php");
?>