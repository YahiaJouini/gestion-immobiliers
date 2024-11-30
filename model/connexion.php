<?php 
class Connexion {
   private PDO $pdo;
   public function __construct(){
    $this->pdo = new PDO('mysql:host=localhost;dbname=immobilier', 'root', '');
   }

   public function getConnexion():PDO{
    return $this->pdo;
   }

}
?>