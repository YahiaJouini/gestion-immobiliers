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
    
    <div class="container mt-5 ">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 font-medium"><?php echo $titre; ?></h1>
                <?= $contenu ?>
            </div>
        </div>
    </div>
</body>
</html>