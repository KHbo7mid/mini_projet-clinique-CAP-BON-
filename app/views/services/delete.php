<?php 
require_once '../../controllers/serviceController.php';
$serviceController=new ServiceController();
$services=$serviceController->getAllServices();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>list of Services</title>
    <link rel="stylesheet" href="../../public/css/styleDelete.css">
    <link rel="stylesheet" href="../../public/css/profileStyle.css">
</head>
<body>
<header class="header">
    <img src="../../public/images/Designer.jpeg" alt="logo" id="logo">
        <nav class="navbar">
            <div class="logo">
            Clinique Le CapBon
            </div>
            <ul class="nav-links">
                <li><a href="../profile.php">Profile</a></li>
                <li><a href="../../controllers/usersController.php?q=logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <div id="container">
<h1>Liste des Services</h1>
<button><a href='add.php'>Add Service</a></button>
<table >
    <thead>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Catégorie</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($services as $service): ?>
            <tr>
                <td><?= htmlspecialchars($service['name']) ?></td>
                <td><?= htmlspecialchars($service['prix']) ?> </td>
                <td><?= htmlspecialchars($service['categorie']) ?></td>
                <td>
     
                    <a href='deleteService.php?id=<?= $service['id'] ?>' id="delete">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php if (empty($services)): ?>
    <p>Aucun service disponible.</p>
<?php endif; ?>
</body>
</html>