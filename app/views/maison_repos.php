<?php 
$pageTitle = "Maison de repos";
$pageStyle = "services.css";
$pageScript = "scriptDevice.js";
$content = '
<section id="title">
    <h1>Maison de Repos</h1>
    <h5>DU CLINIQUE LE CAP BON</h5>
    <hr>
</section>
<section id="service">
    <h2>Nos services</h2>
    <ul>
        <li>Séjours de convalescence</li>
        <li>Séjours de longue durée</li>
        <li>Service de physiothérapie</li>
        <li>Assistance médicale 24h/24</li>
        <li>Activités de loisirs et bien-être</li>
        <li>Nutrition personnalisée</li>
    </ul>
    <img src="../public/images/8p8a9559.jpg" alt="img1">
    <img src="../public/images/f4487c6be4_50192706_adobestock-259447988.jpg" alt="img2">
    <img src="../public/images/8p8a9598.jpg" alt="img3">
</section>
<section class="tableau">
    <h2>Tarifs</h2>
    <p>Voici nos tarifs pour les différents types de chambres dans la Maison de Repos :</p>
    <div id="device">
        <p>Selectionner le type de device:</p>
        <select name="selectDevice" id="selectDevice">
            <option value="TND">TND</option>
            <option value="USD">USD</option>
            <option value="EUR">EUR</option>
        </select>
    </div>
    <table>
        <thead>
            <tr>
                <th>Type de Chambre</th>
                <th>Tarif par Nuit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Chambres individuelles</td>
                <td class="prix" data-price="100">100 TND</td>
            </tr>
            <tr>
                <td>Chambres doubles</td>
                <td class="prix" data-price="80">80 TND</td>
            </tr>
            <tr>
                <td>Chambres VIP</td>
                <td class="prix" data-price="150">150 TND</td>
            </tr>
        </tbody>
    </table>
    <p>Les tarifs incluent l\'accès aux services médicaux, aux soins personnalisés et aux activités de loisirs.</p>
</section>
<section class="tableau">
    <h2>Nombre de chambres et de lits</h2>
    <table>
        <thead>
            <tr>
                <th>Type de Chambre</th>
                <th>Nombre de Chambres</th>
                <th>Nombre de Lits</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Chambres individuelles</td>
                <td>15</td>
                <td>15</td>
            </tr>
            <tr>
                <td>Chambres doubles</td>
                <td>10</td>
                <td>20</td>
            </tr>
            <tr>
                <td>Chambres VIP</td>
                <td>5</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
</section>
<section id="equipe">
    <h2>Notre Équipe Médicale</h2>
    <p>Notre maison de repos est gérée par une équipe de professionnels de la santé dévoués, assurant un confort optimal pour nos patients.</p>
    <ul>
        <li><img src="../public/images/doctor1.jpg" alt="doctor9">Dr. Amira Kacem - Gériatre</li>
        <li><img src="../public/images/doctor2.jpeg" alt="doctor10">Dr. Sami Messaoud - Physiothérapeute</li>
        <li><img src="../public/images/doctor3.avif" alt="doctor11">Dr. Nadia Trabelsi - Nutritionniste</li>
        <li><img src="../public/images/MonicaHiris-Headshot-3.jpg" alt="doctor12">Infirmière Chef - Mme. Fatma Ouerghi</li>
    </ul>
</section>';

include('layout.php');
?>
