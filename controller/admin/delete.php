<?php
require_once "../../model/CRUD_Immobiliers.php";
$crud = new CrudImmobilier();
$id = $_GET['ref'];
$res = $crud->delete($id);
if ($res) {
    header("location:liste-immobiliers.php");
    exit;
}