<?php include '../controllers/baseController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../public/css/formStyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">


</head>
<body>
    <div id="register" >
        <h2>Inscription</h2>
        <?php flash('inscription')?>
        <form id="registerForm" action="../controllers/usersController.php" method="POST">
            <input type="hidden" name="type" value="inscription">
            <div>
                <label for="nom">Nom&Prenom :</label>
                <input type="text" id="nom" name="nom" >
                <span id="nameError" class="Error"></span>
                <span class="iconSuccess" ><i class="fa-solid fa-circle-check"></i></span>
                <span class="iconFailure" ><i class="fa-solid fa-circle-exclamation"></i></span>
               
            </div>
            <div>
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" >
                <span id="emailError" class="Error"></span>
                <span class="iconSuccess"><i class="fa-solid fa-circle-check"></i></span>
                <span class="iconFailure"><i class="fa-solid fa-circle-exclamation"></i></span>
            </div>
            <div>
                <label for="password">Mot de Passe :</label>
                <input type="password" id="password" name="password" >
                <span id="passwordError" class="Error"></span>
                <span class="iconSuccess"><i class="fa-solid fa-circle-check"></i></span>
                <span class="iconFailure"><i class="fa-solid fa-circle-exclamation"></i></span>
            </div>
            <button type="submit">S'inscrire</button>
        </form>
    </div>
    <!-- <script src="../public/js/script.js"></script> -->
</body>
</html>