<?php 
$pageTitle="Centre Medical";
$pageStyle="services.css";
$pageScript="scriptDevice.js";
$content='
 <section id="title">
        <h1>Centre Medical</h1>
        <h5>DU CLINIQUE LE CAP BON</h5>
    <hr>

    </section>
    <section id="service">
     <h2>Nos services</h2>
     <ul>
        <li>Agence bancaire</li>
        <li>Agence Assurance</li>
        <li>Pharmacie de jour</li>
        <li>Pharmacie de nuit</li>
        <li>Consultations médicales généralistes</li>
        <li>Consultations spécialisées</li>
        <li>Centre de rééducation</li>
     </ul>
     <img src="../public/images/Bandeau-internet-9-1200x630.png" alt="img1">
     <img src="../public/images/centre_medical.jpg" alt="img2">
     <img src="../public/images/rdc-ctre.jpg" alt="img3">
    </section>
    <section  class="tableau">
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
                    <td>08:00 - 19:00</td>
                </tr>
                <tr>
                    <td>Samedi</td>
                    <td>08:00 - 14:00</td>
                </tr>
                <tr>
                    <td>Urgences</td>
                    <td>Disponible 24h/24</td>
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
                    <td>Consultation gynécologique</td>
                    <td class="prix" data-price="70">70 TND</td>
                </tr>
                <tr>
                    <td>Consultation orthopédique</td>
                    <td class="prix" data-price="90">90 TND</td>
                </tr>
                <tr>
                    <td>Consultation nutritionniste</td>
                    <td class="prix" data-price="60">60 TND</td>
                </tr>
                <tr>
                    <td>Centre de rééducation</td>
                    <td class="prix" data-price="100">100 TND</td>
                </tr>
                <tr>
                    <td>Pharmacie de jour</td>
                    <td>Variable selon médicament</td>
                </tr>
                <tr>
                    <td>Pharmacie de nuit</td>
                    <td>Variable selon médicament</td>
                </tr>
            </tbody>
        </table>
    </section>
    <section id="equipe">
        <h2>Notre Équipe Médicale</h2>
        <p>Notre équipe qualifiée est composée de médecins généralistes et spécialistes pour répondre à tous vos besoins médicaux.</p>
        <ul>
            <li><img src="../public/images/doctor1.jpg" alt="doctor5">Dr. Farid Ben Salah - Médecin généraliste</li>
            <li><img src="../public/images/doctor3.avif" alt="doctor6">Dr. Leila Amari - Gynécologue</li>
            <li><img src="../public/images/doctor2.jpeg" alt="doctor7">Dr. Amine Chahed - Orthopédiste</li>
            <li><img src="../public/images/doctor4.jpg" alt="doctor8">Dr. Mona Jlassi - Nutritionniste</li>
        </ul>
    </section>';
    include('layout.php');


?>
