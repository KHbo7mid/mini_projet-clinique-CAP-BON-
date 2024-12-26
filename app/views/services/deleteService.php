<?php
require_once '../../controllers/serviceController.php';

$serviceController = new ServiceController();
$serviceId = $serviceController->getId(); 

if (isset($serviceId)) {
    $serviceController->deleteService();
} 
header("Location: delete.php"); 
exit;

?>