<?php

class Hero extends Character
{
    private $weapon;
    private $weaponDamage;
    private $shield;
    private $shieldValue;

    public function getWeapon()
    {
        return $this->weapon;
    }
    public function getWeaponDamage()
    {
        return $this->weaponDamage;
    }
    public function getShield()
    {
        return $this->shield;
    }
    public function getShieldValue()
    {
        return $this->shieldValue;
    }
    public function setWeapon($weaponName)
    {
        $this->weapon = $weaponName;
    }
    public function setWeaponDamage($weaponDamageValue)
    {
        $this->weapon = $weaponDamageValue;
    }
    public function setShield($shieldName)
    {
        $this->weapon = $shieldName;
    }
    public function setShieldValue($shieldDefenseValue)
    {
        $this->weapon = $shieldDefenseValue;
    }

    public function __construct($healthValue, $rageValue, $weaponName, $weaponDamageValue, $shieldName, $shieldDefenseValue)
    {
        parent::__construct($healthValue, $rageValue);
        $this->weapon = $weaponName;
        $this->weaponDamage = $weaponDamageValue;
        $this->shield = $shieldName;
        $this->shieldValue = $shieldDefenseValue;
        echo 'bravo le hero est créer <br>';
        echo 'vie: ' . parent::getHealth() . '<br>';
        echo 'rage: ' . $this->getRage() . '<br>';

    }
    public function attacked($attackValue){
        $newHealth = $this->getHealth() - ($attackValue - $this->getShieldValue());
        $this->setHealth($newHealth);

    }
}
