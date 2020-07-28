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
    public function __construct($healthValue, $rageValue)
    {
        parent::__construct($healthValue, $rageValue);

        echo 'l\'orc est créer <br>';
        echo 'vie de l\'orc: ' . parent::getHealth() . '<br>';
        echo 'rage de l\'orc: ' . $this->getRage() . '<br>';
    }
    public function attack(){
        $newDamage = rand(600, 800);
        $this->setDamage($newDamage);
    }
}



?>