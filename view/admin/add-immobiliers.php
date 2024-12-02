<?php
ob_start();
?>
    <form action="../../controller/admin/add-immobiliers.php" method="POST" class="container">
        <div class="mb-3">
            <label for="reference" class="form-label">Reference</label>
            <input type="text" class="form-control" id="reference" name="reference" required>
        </div>
        <div class="mb-3">
            <label for="proprietaire" class="form-label">Proprietaire</label>
            <input type="text" class="form-control" id="proprietaire" name="proprietaire" required>
        </div>
        <div class="mb-3">
            <label for="localite" class="form-label">Localite</label>
            <input type="text" class="form-control" id="localite" name="localite" required>
        </div>
        <div class="mb-3">
            <label for="nbPieces" class="form-label">Number of Pieces</label>
            <input type="number" class="form-control" id="nbPieces" name="nbPieces" required>
        </div>
        <div class="mb-3">
            <label for="domaineUsage" class="form-label">Domaine Usage</label>
            <input type="text" class="form-control" id="domaineUsage" name="domaineUsage" required>
        </div>
        <div class="mb-3">
            <label for="nature" class="form-label">Nature</label>
            <select class="form-select" id="nature" name="nature" required>
                <option value="Appartement">Appartement</option>
                <option value="Villa">Villa</option>
            </select>
        </div>
        <div class="mb-3" id="villaFields" style="display: none;">
            <label for="nbEtage" class="form-label">Number of Floors</label>
            <input type="number" class="form-control" id="nbEtage" name="nbEtage">
        </div>
        <div class="mb-3" id="appartementFields" style="display: none;">
            <label for="surfaceCommune" class="form-label">Surface Commune</label>
            <input type="number" class="form-control" id="surfaceCommune" name="surfaceCommune">
        </div>
        <button type="submit" class="btn btn-primary">Add Immobilier</button>
    </form>
<?php
$contenu = ob_get_clean();
$titre = "Ajout d'un Immobilier";
include "layout.php";

?>