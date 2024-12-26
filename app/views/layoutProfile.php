<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    <?php echo $pageTitle ?>
    </title>
    <link rel="stylesheet" href="../public/css/profileStyle.css">

</head>
<body>
<header class="header">
    <img src="../public/images/Designer.jpeg" alt="logo" id="logo">
        <nav class="navbar">
            <div class="logo">
            Clinique Le CapBon
            </div>
            <ul class="nav-links">
                <li><a href="profile.php">Profile</a></li>
                <li><a href="../controllers/usersController.php?q=logout">Logout</a></li>
            </ul>
        </nav>
    </header>
    <?php echo $content ?>
</body>
</html>