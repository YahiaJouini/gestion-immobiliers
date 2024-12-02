<?php
ob_start(); 
?>

<div class="mt-4 p-4 bg-light rounded shadow-sm container">
  <p class="lead mb-4 text-center">
  Ce projet, développé par <strong>Yahia Jouini (L2 DSI3)</strong>, est une application de gestion immobilière innovante. Il permet de centraliser et de gérer efficacement les informations relatives aux propriétés immobilières, telles que les références, les propriétaires, les localités, le nombre de pièces, les domaines d’usage, et bien d'autres caractéristiques.

L'objectif principal est de fournir une solution intuitive et performante pour simplifier la gestion des biens immobiliers, qu'ils soient des villas ou des appartements. Grâce à une interface moderne et des fonctionnalités avancées, le projet vise à répondre aux besoins des utilisateurs tout en mettant en pratique des concepts clés de programmation orientée objet et de développement web.

Ce travail reflète non seulement une maîtrise des technologies modernes, mais aussi une volonté d'explorer des solutions pratiques aux problématiques du monde réel.
  </p>
  <div class="text-center">
    <a href="/controller/user/explore.php" class="btn btn-primary btn-lg">Explorer les propriétés</a>
  </div>
</div>

<?php
$contenu = ob_get_clean();
$titre = "À propos du projet";
include "layout.php";
?>
