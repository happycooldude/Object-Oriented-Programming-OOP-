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

    public static $counter = 0;

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
        echo "De Attack = ". $Attack. "<br>";
        echo "De target = ". $target. "<br>";

        if ($Attack->Name == 'Electric_Ring') {
            $target->receiveDamage($this->EnergyType, $this->Attack->Damage);
            echo '<br>De attack if statement = Electric_Ring';
        }
        if ($Attack->Name == 'Pika_Punch') {
            $target->receiveDamage($this->EnergyType, $this->Attack->Damage);
            echo '<br>De attack if statement = Pika_Punch';
        }
    }

    public function receiveDamage($EnergyType, $damage)
    {
        if ($EnergyType == $this->Resistance->Type) {
            $this->Health -= ($damage - $this->Resistance->Value);
        }
        if ($EnergyType == $this->Weakness->Type) {
            $this->Health -= ($damage * $this->Weakness->Modifier);
        }
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
