<?php
ob_start(); ?>

<!-- Main content of the home page -->
<div class="container pt-3 pb-5">
  <p class="lead mb-4">
    Bienvenue sur notre site, où gérer et découvrir des biens immobiliers n’a jamais été aussi simple. Que vous soyez à la recherche d’un bien à acheter, à louer, ou que vous soyez propriétaire ou gestionnaire, nous vous offrons une expérience fluide et adaptée à vos besoins. Parcourez une large sélection de propriétés, consultez des listings détaillés et trouvez l’endroit idéal pour vous. 
    Pour les propriétaires et gestionnaires, profitez d’outils puissants pour gérer vos biens efficacement, de la location aux paiements, en passant par la maintenance et les rapports. Rejoignez-nous et simplifiez votre parcours immobilier ! ✨
  </p>
  <a href="/explore" class="btn btn-primary btn-lg">Explorer les propriétés</a>
</div>

<?php
$titre = "Bienvenue sur notre plateforme de gestion immobilière 🏡";
$contenu = ob_get_clean(); 
?>

<div class="content">
  <?php include "view/user/layout.php"; ?>
</div>

<!-- Include Footer -->
<?php include "view/footer.php"; ?>
