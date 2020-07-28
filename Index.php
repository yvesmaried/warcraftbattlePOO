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
    <link rel="stylesheet" href="style.css">
    <title>TP WarCraft</title>
</head>

<body>

    <div class="imghero">
        <div class="imgorc">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-5 cadre my-2">
                        <h2><b>Votre Hero</b></h2>
                        <div>
                            <?php
                            $personage = new Hero(2000, 0, 'Link', 'Master-Sword', 250, 'Bouclier-hylia', 600);
                            ?>
                        </div>
                    </div>
                    <div class="col-5 cadre my-2">
                        <h2><b>Votre ennemie, un Orc</b></h2>
                        <div>
                            <?php
                            $ennemy = new Orc(500, 0, 'Zorg');
                            ?>
                        </div>
                    </div>
                    <div class="col-8 cadre my-3">
                        <h2><b>phase d'attaque</b></h2>
                        <?php
                        $i = 0;
                        while ($personage->getHealth() > 0 || $ennemy->getHealth() > 0) {

                            $i++;
                        ?>
                            <p><b>Phase <?= $i ?></b></p>
                        <?php
                            $ennemy->attack();
                            echo 'l\'orc inflige ' . $ennemy->getDamage() . ' point de dégat' . '<br>';
                            $personage->attacked($ennemy->getDamage());
                            $takenDamage = ($ennemy->getDamage() - $personage->getShieldValue());
                            echo 'grâce au ' . $personage->getShield() . ' le hero reduit ' . $personage->getShieldValue() . ' des dégats recu mais il perd ' . $takenDamage . ' PV' . '<br>';
                            echo 'il reste ' . $personage->getHealth() . ' PV au hero' . '<br>';
                            $personage->rageUp();
                            echo 'la rage du hero est maintenant de ' . $personage->getRage() . '<br>' . '<br>';

                            if ($personage->getRage() >= 100) {
                                echo 'le hero attaque l\'orc avec ' . $personage->getWeapon() . ' et inflige ' . $personage->getWeaponDamage() . ' degat' . '<br>';
                                $personage->rageDown();
                                $ennemy->setHealth($ennemy->getHealth() - $personage->getWeaponDamage());
                                echo 'il reste ' . $ennemy->getHealth() . ' PV a l\'orc' . '<br>';
                            }

                            if ($personage->getHealth() > 0 && $ennemy->getHealth() > 0) {
                                echo 'le combat Continue <br><br>';
                            } else if ($personage->getHealth() <= 0) {
                                echo 'le hero est mort de décès';
                                break;
                            } else if ($ennemy->getHealth() <= 0) {
                                echo 'l\'Orc gis au sol tel un étron GG !';
                                break;
                            }
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>