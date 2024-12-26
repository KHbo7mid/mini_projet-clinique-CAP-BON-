<?php include '../../controllers/baseController.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../public/css/formStyle.css">
    <title>Add User</title>
</head>
<body>
    <div id="register">
<h1>Add a New User</h1>
<?php flash("admin");?>
<form id="registerForm" action="../../controllers/usersController.php" method="POST">
<input type="hidden" name="type" value="adminAddUser">
    <label for="name">Name</label>
    <input type="text" name="nom" required>

    <label for="email">Email</label>
    <input type="email" name="email" required>
    <label for="password" >Password</label>
    <input type="password" name="password" required>

    <label for="role">Role</label>
    <select name="role">
        <option value="patient">Patient</option>
        <option value="medicin">Medicin</option>
    </select>

    <button type="submit">Add User</button>
</form>
</div>
</body>
</html>


