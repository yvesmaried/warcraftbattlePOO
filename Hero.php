<?php

class Hero extends Character
{
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;

    public function getWeapon()
    {
        return $this->_weapon;
    }
    public function getWeaponDamage()
    {
        return $this->_weaponDamage;
    }
    public function getShield()
    {
        return $this->_shield;
    }
    public function getShieldValue()
    {
        return $this->_shieldValue;
    }
    public function setWeapon($_weaponName)
    {
        $this->_weapon = $_weaponName;
    }
    public function setWeaponDamage($_weaponDamageValue)
    {
        $this->_weaponDamage = $_weaponDamageValue;
    }
    public function setShield($_shieldName)
    {
        $this->_shield = $_shieldName;
    }
    public function setShieldValue($_shieldDefenseValue)
    {
        $this->_shieldValue = $_shieldDefenseValue;
    }

    public function __construct($healthValue, $rageValue, $weaponName, $weaponDamageValue, $shieldName, $shieldDefenseValue)
    {
        parent::__construct($healthValue, $rageValue);
        $this->_weapon = $weaponName;
        $this->_weaponDamage = $weaponDamageValue;
        $this->_shield = $shieldName;
        $this->_shieldValue = $shieldDefenseValue;
        echo 'bravo le hero est créer <br>';
        echo 'vie: ' . parent::getHealth() . '<br>';
        echo 'rage: ' . $this->getRage() . '<br>';

    }
    public function attacked($attackValue){
        $newHealth = $this->getHealth() - ($attackValue - $this->getShieldValue());
        $this->setHealth($newHealth);
    }
    public function rageUp(){
        $newRage = $this->getRage() + 30;
        $this->setRage($newRage);
    }
}
