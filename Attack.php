<?php

class Attack
{
    public $Name;
    public $Damage;

    public function __construct($Name, $Damage, $Type)
    {
        $this->Name = $Name;
        $this->Damage = $Damage;
        $this->Type = $Type;
    }

    public function getDamage($Damage)
    {
        return $Damage;
    }

    public function getName($Name)
    {
        return $Name;
    }
}
