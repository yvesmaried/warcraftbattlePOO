<?php
class Orc extends Character{
    private $_ennemyDamage;
  
    public function getDamage()
    {
        return $this->_ennemyDamage;
    }
    public function setDamage($damageHit){
    
        $this->_ennemyDamage = $damageHit;
    }
    public function __construct($healthValue, $rageValue, $damageValue)
    {
        parent::__construct($healthValue, $rageValue);
        $this->_ennemyDamage = $damageValue;

        echo 'l\'orc est créer <br>';
        echo 'vie: ' . parent::getHealth() . '<br>';
        echo 'rage: ' . $this->getRage() . '<br>';
        echo 'Dégats: ' . $this->getDamage() . '<br>';

    }
}



?>