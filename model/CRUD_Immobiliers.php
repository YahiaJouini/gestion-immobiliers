<?php 
require_once 'Connexion.php';
class CrudImmobilier {
    private PDO $pdo;
    public function __construct(){
        $connexion = new Connexion();
        $this->pdo = $connexion->getConnexion();
    }


    public function getImmobiliers(){
        $sql = "SELECT * FROM immobilier";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

}
?>