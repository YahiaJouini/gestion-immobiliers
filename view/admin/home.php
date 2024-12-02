<?php 
ob_start();

?>

<div class="container">
<div class="mt-4 p-4 bg-light rounded shadow-sm">
  <p class="lead mb-4 text-center">
Vous êtes connecté en tant qu'administrateur. Vous pouvez ajouter, modifier ou supprimer des biens immobiliers.
  </p>
  <div class="text-center">
    <a href="/controller/admin/liste-immobiliers.php" class="btn btn-primary btn-lg">
        Liste des biens immobiliers</a>
    </a>
  </div>
</div>
<?php 
$titre="Home espace admin";
$contenu = ob_get_clean();
include "layout.php";
?>