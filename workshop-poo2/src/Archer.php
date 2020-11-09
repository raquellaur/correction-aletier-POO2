<?php

require_once 'Unit.php';

class Archer extends Unit{
    /**
     * Archer constructor.
     */
    public function __construct()
    {
        $this->setSpeed(5);
    }

    public function attack(){
        echo  "à l’attaque";
    }
}