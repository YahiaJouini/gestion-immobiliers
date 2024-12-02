<?php
if (isset($_POST['ok'])) {
    require_once "../../model/CRUD_Immobiliers.php";
    $crud = new CrudImmobilier();
    $reference  = htmlspecialchars($_POST['reference']);
    $proprietaire  = htmlspecialchars($_POST['proprietaire']);
    $localite = htmlspecialchars($_POST['localite']);
    $nbPieces = htmlspecialchars($_POST['nbPieces']);
    $domaineUsage = htmlspecialchars($_POST['domaineUsage']);
    $nature = htmlspecialchars($_POST['nature']);
    $nbEtage = $nature === 'Villa' ? (int) htmlspecialchars($_POST['nbEtage']) : null;
    $surfaceCommune = $nature === 'Appartement' ? (float) htmlspecialchars($_POST['surfaceCommune']) : null;

    $immobiler = new Immobilier($reference, $proprietaire, $localite, $nbPieces, $domaineUsage, $nature, $nbEtage, $surfaceCommune);
    $res = $crud->addImmobilier($immobiler);

    if ($res) {
        header("location:liste-immobiliers.php");
        exit;
    }
} else  
    include "../../view/admin/add-immobiliers.php";