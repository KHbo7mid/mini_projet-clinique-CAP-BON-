<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $pageTitle ?></title>
    <link rel="stylesheet" href="../public/css/style.css">
    <link rel="stylesheet" href="../public/css/<?php echo $pageStyle ?>">
</head>
<body>
<header>
        <img src="../public/images/Designer.jpeg" alt="logo" id="logo">
        <nav>
            <a href="../views/home.php">Accueil</a>
            <a href="../views/polyclinique.php">Polyclinique</a>
            <a href="../views/centre_medical.php">Centre medical</a>
            <a href="../views/maison_repos.php">Maison de repos</a>


        </nav>
    </header>
    <main>
        <?php echo $content ?>


    </main>
    <footer>
        <p>&copy; Clinique Le Cap Bon</p>
    </footer>
    <?php if (isset($pageScript)) { ?>


    <script src="../public/js/<?php echo $pageScript; ?>"></script>
<?php } ?></body>
</html>