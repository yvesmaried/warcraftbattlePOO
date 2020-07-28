<?php

class Hero extends Character
{
    private $_heroName;
    private $_weapon;
    private $_weaponDamage;
    private $_shield;
    private $_shieldValue;

    public function getHeroName()
    {
        return $this->_heroName;
    }
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

    public function setHeroName($_heroNameValue)
    {
        $this->_heroName = $_heroNameValue;
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

    public function __construct($healthValue, $rageValue, $heroNameValue, $weaponName, $weaponDamageValue, $shieldName, $shieldDefenseValue)
    {
        parent::__construct($healthValue, $rageValue);
        $this->_heroName = $heroNameValue;
        $this->_weapon = $weaponName;
        $this->_weaponDamage = $weaponDamageValue;
        $this->_shield = $shieldName;
        $this->_shieldValue = $shieldDefenseValue;
        echo 'Le hero ' . $this->getHeroName() . ' est créer <br>';
        echo 'Vie du hero : <span class=\'health\'>' . parent::getHealth() . '</span><br>';
        echo 'Rage du hero : <span class=\'rage\'>' . $this->getRage() . '</span><br>';
        echo 'L\'arme du hero : <b>' . $this->getWeapon() . '</b>🗡️<br>';
        echo 'DMG de l\'arme : <span class=\'damage\'>' . $this->getWeaponDamage() . '</span><br>';
        echo 'Bouclier du hero : <b>' . $this->getShield() . '</b>🛡️<br>';
        echo 'DEF du bouclier : <span class=\'defense\'>' . $this->getShieldValue() . '</span><br>';
    }
    public function attacked($attackValue)
    {
        $newHealth = $this->getHealth() - ($attackValue - $this->getShieldValue());
        $this->setHealth($newHealth);
    }

    public function rageUp()
    {
        $newRage = $this->getRage() + 30;
        $this->setRage($newRage);
    }
    public function rageDown()
    {
        $newRage2 = $this->getRage() - 100;
        $this->setRage($newRage2);
    }
}
