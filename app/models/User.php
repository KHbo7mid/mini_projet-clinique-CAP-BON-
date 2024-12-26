<?php 
require_once 'Database.php';

class User {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getAllUsers() {
        $stmt = $this->db->query("SELECT * FROM users");
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    return $users;
    }

    public function createUser($data) {
        $sql = "INSERT INTO users (name, email, password, role) VALUES (:nom, :email, :password, :role)";
        $stmt = $this->db->query($sql);
    
        $stmt->bindValue(':nom', $data['nom']);
        $stmt->bindValue(':email', $data['email']);
        $stmt->bindValue(':password', $data['password']);
        $stmt->bindValue(':role', $data['role']);
    
        return $stmt->execute();
    }
    

    public function getUserByEmail($email) {
        $stmt = $this->db->query("SELECT * FROM users WHERE email = :email");
        $this->db->execute(['email' => $email]);
        return $this->db->fetch();
    }

    public function getUserByName($name) {
        $stmt = $this->db->query("SELECT * FROM users WHERE name = :name");
        $this->db->execute(['name' => $name]);
        return $stmt->fetch();
    }

    public function deleteUser($id) {
        $stmt = $this->db->query("DELETE FROM users WHERE id = :id");
        $this->db->execute(['id' => $id]);
    }
    public function login($name,$password)
    {
        $row=$this->getUserByName($name);
        if($row==false)
           return false;
           $storedPassword = $row['password'];
           if ($password === $storedPassword) { 
           
               return $row; 
           } else {
               return false; 
           }
    }
}
