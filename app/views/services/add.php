<?php 
 include '../../controllers/baseController.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Service</title>
    <link rel="stylesheet" href="../../public/css/formStyle.css">
</head>
<body>
    <div id="register">
    <h1>Ajouter un service</h1>
    <?php flash("admin");?>
<form action="../../controllers/serviceController.php" method="POST" id="registerForm">
<input type="hidden" name="type" value="adminAddService">
    <label for="name">Name</label>
    <input type="text" name="name" required>
    <label for="prix">Prix</label>
    <input type="number" name="prix" required>
    <label for="categorie">Categorie</label>
    <select name="categorie" >
        <option value="polyclinique">polyclinique</option>
        <option value="centre_medical">centre medicale</option>
        <option value="maison_repos">maison de repos</option>
    </select>
    <button type="submit">Add Service</button>
</form>
    </div>
</body>
</html>