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
        if ($Attack->Name == 'Electric_Ring') {
            echo 'Pikachu attacks Charmeleon using Electric_Ring!<br>';
            $target->receiveDamage($this->EnergyType, $this->Attack1->Damage);
        }
        if ($Attack->Name == 'Pika_Punch') {
            echo 'Pikachu attacks Charmeleon using Pika_Punch!<br>';
            $target->receiveDamage($this->EnergyType, $this->Attack2->Damage);
        }
        if ($Attack->Name == 'Head_Butt') {
            echo 'Charmeleon attacks Pikachu using Head_Butt!<br>';
            $target->receiveDamage($this->EnergyType, $this->Attack1->Damage);
        }
        if ($Attack->Name == 'Flare') {
            echo 'Charmeleon attacks Pikachu using Flare!<br>';
            $target->receiveDamage($this->EnergyType, $this->Attack2->Damage);
        }
    }

    public function receiveDamage($EnergyType, $damage)
    {
        if ($EnergyType == $this->Resistance->Type) {
            $this->Health -= ($damage - $this->Resistance->Value);
            if ($this->Health <= 0) {
                $this->Health = 0;
            }
            echo $this->Name . ' takes ' . ($damage - $this->Resistance->Value) . ' damage<br>';
        } else if ($EnergyType == $this->Weakness->Type) {
            $this->Health -= ($damage * $this->Weakness->Modifier);
            if ($this->Health <= 0) {
                $this->Health = 0;
            }
            echo $this->Name . ' takes ' . ($damage * $this->Weakness->Modifier) . ' damage<br>';
        } else {
            $this->Health -= ($damage);
            if ($this->Health <= 0) {
                $this->Health = 0;
            }
            echo $this->Name . ' takes ' . $damage . ' damage<br>';
        }
        if ($this->Health <= 0) {
            self::$counter--;
        }
        echo $this->Name . ' has ' . $this->Health . ' health left!';
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
