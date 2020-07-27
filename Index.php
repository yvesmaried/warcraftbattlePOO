<?php

require_once('Character.php')

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>TP WarCraft</title>
</head>
<body>
    <?php
    $personage = new Hero(500,300,'Marteau-Boing', 500, 'zeboubou',200);
    
    $personage->attacked(300);
    echo 'tu as' . $personage->getHealth() . 'HP';
    
    
    ?>
</body>
</html>