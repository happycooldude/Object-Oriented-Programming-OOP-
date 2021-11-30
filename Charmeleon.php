<?php

class Charmeleon extends Pokemon
{
    public function __construct()
    {
        $Name = 'Charmeleon';
        $EnergyType = 'Fire';
        $Hitpoints = 60;
        $Health = 60;
        $Attack1 = new Attack('Head_Butt', 10);
        $Attack2 = new Attack('Flare', 30);
        $Weakness = new Weakness('Water', 2);
        $Resistance = new Resistance('Lightning', 10);
        parent::__construct($Name, $EnergyType, $Hitpoints, $Health, $Attack1, $Attack2, $Weakness, $Resistance);
    }
}
