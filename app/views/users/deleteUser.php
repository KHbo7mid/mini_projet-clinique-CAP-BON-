<?php
require_once '../../controllers/usersController.php';

$userController = new UserController();
$userId = $userController->getId(); 

if (isset($userId)) {
    $userController->deleteUser();
} 
header("Location: delete.php"); 
exit;

?>