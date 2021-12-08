<?php

class Pokemon
{
    protected $Name;
    protected $EnergyType;
    protected $Hitpoints;
    protected $Health;
    protected $attacks;
    protected $Weakness;
    protected $Resistance;

    protected static $counter = 0;

    public function __construct($Name, $EnergyType, $Hitpoints, $Health, $attacks, $Weakness, $Resistance)
    {
        $this->Name = $Name;
        $this->EnergyType = $EnergyType;
        $this->Hitpoints = $Hitpoints;
        $this->Health = $Health;
        $this->attacks = $attacks;
        $this->Weakness = $Weakness;
        $this->Resistance = $Resistance;

        self::$counter++;
    }

    public function attack($attackNumber, $target)
    {
        $attack = $this->attacks[$attackNumber];

        echo $this->Name. ' attacks '. $target->Name. ' using ' . $attack->Name . '!<br>';
        $target->receiveDamage($this->EnergyType, $attack->Damage);
    }

    public function receiveDamage($EnergyType, $damage)
    {
        $actualDamage = $damage;
        if ($EnergyType == $this->Resistance->Type) {
            $actualDamage = ($damage - $this->Resistance->Value);
        } else if ($EnergyType == $this->Weakness->Type) {
            $actualDamage = ($damage * $this->Weakness->Modifier);
        }
        $this->Health -= $actualDamage;
        echo $this->Name . ' takes ' . $actualDamage . ' damage<br>';
        if ($this->Health <= 0) {
            $this->Health = 0;
            self::$counter--;
        }
        echo $this->Name . ' has ' . $this->Health . ' health left!';
    }

    public function getHealth()
    {
        return ($this->Health);
    }


 
    static function getPopulation()
    {
        return self::$counter;
    }
    
    public function __toString()
    {
        return json_encode($this);
    }
}
