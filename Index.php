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
                <div class="row justify-content-around">
                    <div class="col-5 cadreext my-2">
                        <div class="cadreint">
                            <h2><b>Votre Hero</b></h2>
                            <div>
                                <?php
                                $personage = new Hero(2000, 0, 'Link', 'Master-Sword', 250, 'Bouclier-hylia', 600);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-5 cadreext my-2 d-flex ">
                        <div class="cadreint w-100 align-items-stretch">
                            <h2><b>Votre ennemie, un Orc</b></h2>
                            <div>
                                <?php
                                $ennemy = new Orc(500, 0, 'Zorg');
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-8 cadre my-3 text-center">
                        <h2><b>phase d'attaque</b></h2>
                        <?php
                        $i = 0;
                        while ($personage->getHealth() > 0 || $ennemy->getHealth() > 0) {

                            $i++;
                        ?>
                            <h3><b>Phase <?= $i ?></b></h3>
                        <?php
                            $ennemy->attack();
                            echo $ennemy->getOrcName() . ' inflige <span class=\'damage\'>' . $ennemy->getDamage() . '</span> point de dégat' . '<br>';
                            $personage->attacked($ennemy->getDamage());
                            $takenDamage = ($ennemy->getDamage() - $personage->getShieldValue());
                            echo 'grâce au "' . $personage->getShield() . '" ' . $personage->getHeroName() . ' reduit <span class=\'defense\'>' . $personage->getShieldValue() . '</span> des dégats recu mais il subit <span class=\'damage\'>' . $takenDamage . '</span> dégat' . '<br>';
                            echo 'il reste <span class=\'health\'>' . $personage->getHealth() . '</span> PV au hero' . '<br>';
                            $personage->rageUp();
                            echo 'la rage de' . $personage->getHeroName() . ' est maintenant de <span class=\'rage\'>' . $personage->getRage() . '</span><br>' . '<br>';

                            if ($personage->getRage() >= 100) {
                                echo $personage->getHeroName() . ' attaque ' . $ennemy->getOrcName() . ' avec "' . $personage->getWeapon() . '" et inflige <span class=\'damage\'>' . $personage->getWeaponDamage() . '</span> degat' . '<br>';
                                $personage->rageDown();
                                $ennemy->setHealth($ennemy->getHealth() - $personage->getWeaponDamage());
                                echo 'il reste <span class=\'health\'>' . $ennemy->getHealth() . '</span> PV a ' . $ennemy->getOrcName() . '<br><br>';
                            }

                            if ($personage->getHealth() > 0 && $ennemy->getHealth() > 0) {
                                echo '<b>le combat Continue </b><br><br>';
                            } else if ($personage->getHealth() <= 0) {
                                echo '<h3><b>' . $personage->getHeroName() . ' est mort de décès</b></h3>';
                                break;
                            } else if ($ennemy->getHealth() <= 0) {
                                echo '<h3><b>' . $ennemy->getOrcName() . ' gis au sol tel un étron fumant ... CHEH !</b></h3>';
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