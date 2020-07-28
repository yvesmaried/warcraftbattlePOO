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
    <p>hero
        <?php
        $personage = new Hero(2000, 0, 'Marteau-Boing', 250, 'zeboubou', 600);
        ?>
    </p>
    <p>orc:
        <?php
        $ennemy = new Orc(500, 0);
        ?>
    </p>
    <p>phase d'attaque</p>
    <?php
    while ($personage->getHealth() > 0) {
        $ennemy->attack();
        echo 'l\'orc inflige ' . $ennemy->getDamage() . ' point de dégat' . '<br>';
        $personage->attacked($ennemy->getDamage());
        $takenDamage = ($ennemy->getDamage() - $personage->getShieldValue());
        echo 'le hero reduit ' . $personage->getShieldValue() . ' des dégats recu et il perd ' . $takenDamage . ' point de vie' . '<br>';
        echo 'il reste ' . $personage->getHealth() . ' point de vie au hero' . '<br>';
        $personage->rageUp();
        echo 'la rage du hero est maintenant de ' . $personage->getRage() . '<br>' . '<br>';

        if ($personage->getHealth() > 0) {
            echo 'le hero continue a prendre la sauce' . '<br>' . '<br>' ;
        } else {
            echo 'le hero est mort de décès';
        }
    }

    ?>
</body>

</html>