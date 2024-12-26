<?php
require_once 'baseController.php';
require_once __DIR__ . '/../models/service.php';

class ServiceController {
    private $serviceModel;

    public function __construct()
    {
        $this->serviceModel = new Service();
    }

    public function getAllServices()
    {
        
        $services = $this->serviceModel->getAllServices();
        
       return $services;
       
    }

    public function addService()
    {
        $data=[
            'name' => trim($_POST['name']),
            'prix' => trim($_POST['prix']),
            'categorie' => trim($_POST['categorie']),
        ];
        if (empty($data['name']) || empty($data['prix']) || empty($data['categorie'])) {
            flash("admin", "Please fill out all inputs");
            redirect("../views/services/add.php");
        }
        if($this->serviceModel->createService($data))
        {
            redirect("../views/services/delete.php");
        }
        else {
            die('Something went wrong while adding the service.');
        }
       
    }
    public function getId()
    {
        if (isset($_GET['id']) && is_numeric($_GET['id'])) {
            $serviceId = intval($_GET['id']);
            return $serviceId;
        } else {
            
            header("Location: delete.php"); 
            exit;
        }
    }

    public function deleteService()
    {
        $serviceId=$this->getId();
        $this->serviceModel->deleteService($serviceId);
        header("Location: delete.php");
    }

   
    public function getServiceByCategorie()
    {
        if (isset($_GET['categorie'])) {
            $categorie = $_GET['categorie'];
            $services = $this->serviceModel->getServicesByCategorie($categorie);
            return $services; 
        }
    }
}
$init=new ServiceController();
if (($_SERVER['REQUEST_METHOD']=='POST') )
{
    if($_POST['type']=='adminAddService')
    {
        $init->addService();
    }
}

?>
