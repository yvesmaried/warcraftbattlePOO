<?php
class Character
{
    private $_health = 500;
    private $_rage = 200;

    public function getHealth()
    {
        return $this->_health;
    }
    public function getRage()
    {
        return $this->_rage;
    }
    public function setHealth($healthValue)
    {
        $this->_health = $healthValue;
    }

    public function setRage($rageValue)
    {
        $this->_rage = $rageValue;
    }

    public function __construct($healthValue, $rageValue)
    {
        $this->_health = $healthValue;
        $this->_rage = $rageValue;
    }
}
