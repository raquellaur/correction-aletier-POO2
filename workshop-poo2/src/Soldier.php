<?php
require_once 'Unit.php';

class Soldier extends Unit
{
    /**
     * Soldier constructor.
     */
    public function __construct()
    {
        $this->setSpeed(2);
    }
    public function attack()
    {
        echo  "à l’attaque" . "<br>";
    }

}