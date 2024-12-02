<?php
ob_start(); 
?>

    <table class="table table-bordered table-striped container">
        <thead class="table-dark">
        <tr>
            <th>Référence</th>
            <th>Propriétaire</th>
            <th>Locale</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        <?php if (!empty($listeImmobiliers)): ?>
            <?php foreach ($listeImmobiliers as $immobilier): ?>
                <tr>
                    <td><?= htmlspecialchars($immobilier[0]) ?></td>
                    <td><?= htmlspecialchars($immobilier[1]) ?></td>
                    <td><?= htmlspecialchars($immobilier[2]) ?></td>
                    <td>
                        <a href="update.php?ref=<?= urlencode($immobilier[0]) ?>" class="btn btn-warning btn-sm">Update</a>
                        <a href="delete.php?ref=<?= urlencode($immobilier[0]) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet immobilier ?');">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">Aucun immobilier trouvé.</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    <?php
$contenu = ob_get_clean();
$titre = "Liste des Immobiliers";
include "layout.php";
?>