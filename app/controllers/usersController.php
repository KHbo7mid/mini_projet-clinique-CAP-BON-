<?php
require_once __DIR__ . '/../models/User.php';
require_once 'baseController.php';
class UserController 
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new User;
    }



     public function register(){
        
       $data=[
        'nom'=>trim($_POST['nom']),
        'email'=>trim($_POST['email']),
        'password'=>trim($_POST['password']),
        'role'=>'patient',

       ];
       if(empty($data['nom'])|| empty($data['email'])||empty($data['password']))
       {
        flash("inscription","Please fill out all inputs");
        redirect("../views/inscription.php");


       }
       if(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
        flash("inscription","Invalid Email");
        redirect("../views/inscription.php");
       }
       if(strlen($data['password']<8))
       {
        flash("inscription","Invalid Password");
        redirect("../views/inscription.php");
       }
       if ($this->userModel->getUserByEmail($data['email'])) {
        flash("inscription", "Email already exists");
        redirect("../views/inscription.php");
    }
    if($this->userModel->createUser($data))
    {
        redirect("../views/login.php");

    }else{
        die('Something went wrong');
    }


     }
     public function listUsers()
     {
         $users = $this->userModel->getAllUsers(); 
        return $users;
     }
 

     public function getId() 
     {
         if (isset($_GET['id']) && is_numeric($_GET['id'])) {
             $userId = intval($_GET['id']);
             return $userId;
         } else {
             
             header("Location: delete.php"); 
             exit;
         }
     }



    

    public function deleteUser()
    {
        $userId = $this->getId(); 

      

            $this->userModel->deleteUser($userId);
                header("Location: delete.php");  
               
        } 
    
   
    public function login() {
       
        $data=[
            'nom'=>trim($_POST['nom']),
            
            'password'=>trim($_POST['password']),
           
    
           ];
           if(empty($data['nom'])|| empty($data['password']))
           {
            flash("login","Please fill out all inputs");
            redirect("../views/login.php");
    
    
           }
           if ($this->userModel->getUserByName($data['nom'])) {
            $loggedInUser=$this->userModel->login($data['nom'],$data['password']);
            if($loggedInUser)
            {
                $this->createUserSession($loggedInUser);

            }else{
                flash("login","Password Incorrect");
                redirect("../views/login.php");
            }
        }
        else{
            flash("login", "No user found");
            redirect("../views/login.php");
        }

       
        }
        public function logout()
        {
            session_unset();
            session_destroy();
            header("Location: ../views/home.php");
            exit;
        }
        public function addUser()
        {
           
            $data = [
                'nom' => trim($_POST['nom']),
                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'role' => $_POST['role'], 
            ];
            if (empty($data['nom']) || empty($data['email']) || empty($data['password'])) {
                flash("admin", "Please fill out all inputs");
                redirect("../views/users/add.php");
            }
    
            if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
                flash("admin", "Invalid Email");
                redirect("../views/users/add.php");
            }
    
            if (strlen($data['password']) < 8) {
                flash("admin", "Password must be at least 8 characters");
                redirect("../views/users/add.php");
            }
    
            
            if ($this->userModel->getUserByEmail($data['email'])) {
                flash("admin", "Email already exists");
                redirect("../views/users/add.php");
            }
    
           
            if ($this->userModel->createUser($data)) {
                redirect("../views/users/delete.php"); 
            } else {
                die('Something went wrong while adding the user.');
            }
        }
        public function createUserSession($user)
        {
           
            $_SESSION['sessionID']=$user['id'];
$_SESSION["userName"]=$user['name'];
$_SESSION["userEmail"]=$user['email'];
$_SESSION["userRole"]=$user['role'];

redirect ('../views/profile.php');
        }
    }
    


$init=new UserController;
if(($_SERVER['REQUEST_METHOD']=='POST') && isset($_POST['type']))
{
    if($_POST['type']=='inscription')
    {
        $init->register();

    }
    else if($_POST['type']=='login')
    {
        $init->login();
    }
    else if($_POST['type']=='adminAddUser')
    {
        $init->addUser();
    }
}
else{
    if(isset($_GET['q']) && $_GET['q'] == 'logout')
    {
        $init->logout();
    }
}


?>
