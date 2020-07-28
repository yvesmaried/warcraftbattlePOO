<?php
class Orc extends Character{
    private $_ennemyName;
    private $_ennemyDamage;
  
    public function getOrcName()
    {
        return $this->_ennemyName;
    }
    public function getDamage()
    {
        return $this->_ennemyDamage;
    }
    public function setOrcName($orcName){
    
        $this->_ennemyName = $orcName;
    }
    public function setDamage($damageHit){
    
        $this->_ennemyDamage = $damageHit;
    }
    public function __construct($healthValue, $rageValue, $orcName)
    {
        parent::__construct($healthValue, $rageValue);
        $this->_ennemyName = $orcName;

        echo 'l\'Orc ' . $this->getOrcName() . ' est créer <br>';
        echo 'Vie de l\'orc : <span class=\'health\'>' . parent::getHealth() . '</span><br>';
        echo 'Rage de l\'orc : <span class=\'rage\'>' . $this->getRage() . '</span><br>';
        echo 'DMG de l\'Orc : entre <span class=\'damage\'>600</span> et <span class=\'damage\'>800</span> <br>';
    }
    public function attack(){
        $newDamage = rand(600, 800);
        $this->setDamage($newDamage);
    }
}
