<?php 
require_once "../../model/CRUD_Immobiliers.php";
$crud = new CrudImmobilier();
$listeImmobiliers = $crud->getImmobiliers();

// l'appel de la vue
include "../../view/admin/liste-immobiliers.php";
?>