<?php
ob_start(); 
?>

<div class="row justify-content-center">
    <?php 
    foreach ($listeImmobiliers as $immobilier) {
        ?>
        <div class="col-5 gap-4">
            <div class="card text-secondary">
                <div class="card-body">
                    <h5 class="card-title">Bien #<?php echo $immobilier[0]; ?></h5>
                    <p class="card-text">
                        <strong>Propriétaire:</strong> <?php echo $immobilier[1]; ?><br>
                        <strong>Localisation:</strong> <?php echo $immobilier[2]; ?><br>
                        <strong>Chambres:</strong> <?php echo $immobilier[3]; ?><br>
                        <strong>Type de bien:</strong> <?php echo $immobilier[4]; ?><br>
                        <strong>Catégorie:</strong> <?php echo $immobilier[5]; ?><br>
                        <?php 
                        if ($immobilier[6] !== null) {
                            echo "<strong>Étages:</strong> " . $immobilier[6] . "<br>";
                        }
                        if ($immobilier[7] !== null) {
                            echo "<strong>Surface:</strong> " . $immobilier[7] . " m²<br>";
                        }
                        ?>
                    </p>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>

<?php
$contenu = ob_get_clean();
$titre = "Explorer les propriétés";
include "layout.php";
?>
