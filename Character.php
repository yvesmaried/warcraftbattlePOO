<?php
class Character
{
    private $health = 500;
    private $rage = 200;

    public function getHealth()
    {
        return $this->health;
    }
    public function getRage()
    {
        return $this->rage;
    }
    public function setHealth($healthValue)
    {
        $this->health = $healthValue;
    }

    public function setRage($rageValue)
    {
        $this->health = $rageValue;
    }

    public function __construct($healthValue, $rageValue)
    {
        $this->health = $healthValue;
        $this->rage = $rageValue;
    }
}
