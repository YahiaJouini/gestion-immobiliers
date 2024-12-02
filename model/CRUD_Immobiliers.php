<?php 
require_once 'Connexion.php';
class CrudImmobilier {
    private PDO $pdo;
    public function __construct(){
        $connexion = new Connexion();
        $this->pdo = $connexion->getConnexion();
    }

    public function getImmobiliers():array{
        $sql = "SELECT * FROM immobilier";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }

    public function updateImmobilier(Immobilier $immobilier): void
    {
        $sql = "UPDATE immobilier SET 
                    proprietaire = '{$immobilier->getProprietaire()}',
                    localite = '{$immobilier->getLocalite()}',
                    nbPieces = {$immobilier->getNbPieces()},
                    domaineUsage = '{$immobilier->getDomaineUsage()}',
                    nature = '{$immobilier->getNature()}'";

        // Append conditional fields based on the 'nature'
        if ($immobilier->getNature() == 'Appartement') {
            $sql .= ", surfaceCommune = {$immobilier->getSurfaceCommune()}, nbEtage = NULL";
        } elseif ($immobilier->getNature() == 'Villa') {
            $sql .= ", nbEtage = {$immobilier->getNbEtage()}, surfaceCommune = NULL";
        }

        $sql .= " WHERE reference = '{$immobilier->getReference()}'";

        // Execute the query
        $this->pdo->exec($sql);
    }

    public function addImmobilier(Immobilier $immobilier)
{
    $sql = "INSERT INTO immobilier 
                (reference, proprietaire, localite, nbPieces, domaineUsage, nature, nbEtage, surfaceCommune) 
            VALUES 
                ('{$immobilier->getReference()}', '{$immobilier->getProprietaire()}', '{$immobilier->getLocalite()}', 
                 {$immobilier->getNbPieces()}, '{$immobilier->getDomaineUsage()}', '{$immobilier->getNature()}', 
                 " . ($immobilier->getNature() == 'Villa' ? $immobilier->getNbEtage() : "NULL") . ", 
                 " . ($immobilier->getNature() == 'Appartement' ? $immobilier->getSurfaceCommune() : "NULL") . ")";

    $res = $this->pdo->exec($sql);
    return $res;
}

function delete($ref)
    {
        $sql = "delete from immobilier where reference =$ref";
        $res = $this->pdo->exec($sql);
        return $res;
    }

}
?>