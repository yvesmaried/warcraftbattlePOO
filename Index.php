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
    $personage = new Character(500,300);
    var_dump($personnage->getRage());
    $personage->setRage(12000);
    var_dump($personnage->getRage());
    
    ?>
</body>
</html>
