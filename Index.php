<?php
require_once('Character.php');
require_once('Hero.php');
require_once('Orc.php');
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
    <p>hero</p>
    <?php
    $personage = new Hero(2000,0,'Marteau-Boing', 250, 'zeboubou',600);
    
    $personage->attacked(300);
    echo 'tu as: ' . $personage->getHealth() . ' HP <br>';
    
    $personage->rageUp();
    echo 'level de rage: ' . $personage->getRage();
    ?>
    <p>orc:</p>
    <?php
    $ennemy = new Orc(500, 0);
    $ennemy->attack();
    echo 'l\'orc frappe a: ' . $ennemy->getDamage();
    ?>
</body>
</html>
