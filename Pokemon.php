<?php

class Pokemon
{
    protected $Name;
    protected $EnergyType;
    protected $Hitpoints;
    protected $Health;
    protected $Attack1;
    protected $Attack2;
    protected $Weakness;
    protected $Resistance;

    protected static $counter = 0;

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

        self::$counter++;
    }

    public function attack($Attack, $target)
    {
        echo $this->Name. ' attacks '. $target->Name. ' using ' . $Attack->Name . '!<br>';
        $target->receiveDamage($this->EnergyType, $Attack->Damage);
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

    public function getAttack1()
    {
        return ($this->Attack1);
    }

    public function getAttack2()
    {
        return ($this->Attack2);
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
