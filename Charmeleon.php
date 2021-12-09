<?php

class Charmeleon extends Pokemon
{
    public function __construct()
    {
        //geef alle waarde's aan de pokemon.
        $Name = 'Charmeleon';
        $EnergyType = 'Fire';
        $Hitpoints = 60;
        $Health = 60;
        $attacks = [];
        $attacks[] = new Attack('Head_Butt', 10, 'Fighting');
        $attacks[] = new Attack('Flare', 30, 'Fire');
        $Weakness = new Weakness('Water', 2);
        $Resistance = new Resistance('Electric', 10);
        parent::__construct($Name, $EnergyType, $Hitpoints, $Health, $attacks, $Weakness, $Resistance);
    }
}
