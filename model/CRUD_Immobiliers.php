<?php 
require_once './connexion.php';
class CrudImmobilier {
    private PDO $pdo;
    public function __construct(){
        $connexion = new Connexion();
        $this->pdo = $connexion->getConnexion();
    }


    public function getImmobiliers(){
        $sql = "SELECT * FROM immobilier";
        
    }

}
?>