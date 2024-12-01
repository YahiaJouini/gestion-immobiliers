<?php 
ob_start();

?>

Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam doloremque perspiciatis itaque corporis nesciunt! Molestias et quaerat iusto doloribus explicabo aperiam suscipit nihil facere voluptatum in obcaecati, deleniti, assumenda placeat?


<?php 
$titre="Home espace admin";
$contenu = ob_get_clean();
include "layout.php";
?>