<?php 
require_once 'controllers/BaseController.php';
require_once 'controllers/usersController.php';
require_once 'controllers/serviceController.php';
require_once 'models/User.php';
require_once 'models/service.php';
require_once 'models/Database.php';





$route=strtolower($_GET['route'] ?? '/');
switch($route){
    case  '/':
        include 'views/home.php';
        break;
    case '/polyclinique':
        include 'views/polyclinique.php';
        break;
    case '/centre_medical':
        include 'views/centre_medical.php';
        break;
    case '/maison_repos':
        include 'views/maison_repos.php';
        break;
    case '/login':
        include 'views/login.php';
        break;
    case '/inscription':
        include 'views/inscription.php';
        break;
       
        
    default :
    echo '<h1>404 NOT FOUND </h1>';
    break;
}





?>