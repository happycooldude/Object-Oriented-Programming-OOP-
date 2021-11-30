<?php

class Attack
{
    public $Name;
    public $Damage;

    public function __construct($Name, $Damage)
    {
        $this->Name = $Name;
        $this->Damage = $Damage;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
