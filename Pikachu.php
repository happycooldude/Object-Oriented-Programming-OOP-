<?php

class Pikachu extends Pokemon
{
    public function __construct()
    {
        //geef alle waarde's aan de pokemon.
        $Name = 'Pikachu';
        $EnergyType = 'Electric';
        $Hitpoints = 60;
        $Health = 60;
        $attacks = [];
        $attacks[] = new Attack('Electric_Ring', 50, 'Electric');
        $attacks[] = new Attack('Pika_Punch', 20, 'Fighting');
        $Weakness = new Weakness('Fire', 1.5);
        $Resistance = new Resistance('Fighting', 20);
        parent::__construct($Name, $EnergyType, $Hitpoints, $Health, $attacks, $Weakness, $Resistance);
    }
}
