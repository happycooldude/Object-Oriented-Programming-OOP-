<?php

class Pikachu extends Pokemon
{
    public function __construct()
    {
        $Name = 'Pikachu';
        $EnergyType = 'Electric';
        $Hitpoints = 60;
        $Health = 60;
        $Attack1 = new Attack('Electric_Ring', 50);
        $Attack2 = new Attack('Pika_Punch', 20);
        $Weakness = new Weakness('Fire', 1.5);
        $Resistance = new Resistance('Fighting', 20);
        parent::__construct($Name, $EnergyType, $Hitpoints, $Health, $Attack1, $Attack2, $Weakness, $Resistance);
    }

    public function getHealth(){
        return($this->Health);
    }

    public function getAttack1(){
        return($this->Attack1);
    }
    
    public function getAttack2(){
        return($this->Attack2);
    }
}
