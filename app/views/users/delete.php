<?php
require_once '../../controllers/usersController.php'; 

$userController = new UserController();
$users = $userController->listUsers(); 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Users</title>
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
<h1>Liste des utilisateurs</h1>
<button><a href="add.php">ADD user</a></button>


    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                    <td><?= htmlspecialchars($user['role']) ?></td>
                    <td>
                    <a href="deleteUser.php?id=<?= $user['id'] ?>" id="delete">Delete</a> 
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

</body>
</html>