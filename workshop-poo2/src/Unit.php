<?php

class Unit
{
    /**
     * @var integer
     */
    private $life;
    /**
     * @var array
     */
    private $position = [0,0];
    /**
     * @var integer
     */
    private $speed = 1;

    public function walk($direction)
    {
        $array = ['right', 'left', 'top', 'bottom'];

        if(in_array($direction,$array)){
            if($direction == 'right'){
                $this->position[0] += $this->speed;
            }elseif ($direction == 'left'){
                $this->position[0] -= $this->speed;
            }elseif ($direction == 'top'){
                $this->position[1] += $this->speed;
            }else{
                $this->position[1] -= $this->speed;
            }
            var_dump($this->position);
        }
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
        return $this;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function __toString()
    {
        return $this->position[0] . " " . $this->position[1] . "<br>";
    }
}