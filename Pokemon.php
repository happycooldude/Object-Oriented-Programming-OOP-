<?php

class Pokemon
{
    public $Name;
    public $EnergyType;
    public $Hitpoints;
    public $Health;
    public $Attack1;
    public $Attack2;
    public $Weakness;
    public $Resistance;

    public function __construct($Name, $EnergyType, $Hitpoints, $Health, $Attack1, $Attack2, $Weakness, $Resistance)
    {
        $this->Name = $Name;
        $this->EnergyType = $EnergyType;
        $this->Hitpoints = $Hitpoints;
        $this->Health = $Health;
        $this->Attack1 = $Attack1;
        $this->Attack2 = $Attack2;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;
    }

    public function attack(){
        
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
