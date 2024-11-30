<?php

class Immobilier
{
    private $reference, $proprietaire, $localite, $nbPieces, $domaineUsage, $nature, $nbEtage, $surfaceCommune;

    public function __construct($reference, $proprietaire, $localite, $nbPieces, $domaineUsage, $nature, $nbEtage = null, $surfaceCommune = null)
    {
        $this->reference = $reference;
        $this->proprietaire = $proprietaire;
        $this->localite = $localite;
        $this->nbPieces = $nbPieces;
        $this->domaineUsage = $domaineUsage;
        $this->nature = $nature;

        if ($this->nature == 'Appartement') {
            $this->nbEtage = null;
            $this->surfaceCommune = $surfaceCommune;
        } elseif ($this->nature == 'Villa') {
            $this->surfaceCommune = null;
            $this->nbEtage = $nbEtage;
        }
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function getProprietaire()
    {
        return $this->proprietaire;
    }
    public function setProprietaire($proprietaire): self
    {
        $this->proprietaire = $proprietaire;
        return $this;
    }

    public function getLocalite()
    {
        return $this->localite;
    }

    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    public function getDomaineUsage()
    {
        return $this->domaineUsage;
    }

    public function getNature()
    {
        return $this->nature;
    }

    public function getNbEtage()
    {
        return $this->nbEtage;
    }


    public function getSurfaceCommune()
    {
        return $this->surfaceCommune;
    }
}

?>
