<?php 
require_once 'Database.php';
class Service{
    private $db;
    public function __construct()
    {
       
        $this->db=new Database;
    }
    public function getAllServices(){
        $stmt=$this->db->query("SELECT * FROM service");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function createService($data)
    {
        $stmt=$this->db->query("INSERT INTO service (name,prix,categorie) VALUES (:name,:prix,:categorie)");
       $service= $stmt->execute(['name'=>$data['name'],'prix'=>$data['prix'],'categorie'=>$data['categorie']]);
       return $service;

    }
    public function deleteService($id)
    {
        $stmt=$this->db->query("DELETE FROM service WHERE id=:id");
        $this->db->execute(['id'=>$id]);

    }
    public function getServicesByCategorie($categorie) {
        $stmt = $this->db->query("SELECT * FROM service WHERE categorie = :categorie");
        $stmt->execute(['categorie' => $categorie]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>