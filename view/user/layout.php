<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../view/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../../view/style.css">
    <title>Site de vente</title>
</head>

<body>
    <?php
    include "nav.php"; ?>
    
    <div class="mt-5">
        <div class="container">
        <h1 class="text-center display-4 fw-bold mb-4"><?php echo $titre; ?></h1>
            <div class="mt-5">
                </div>
            </div>
        </div>
        <?= $contenu ?>
</body>
</html>