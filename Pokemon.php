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
        //pak de attack waarde's die zijn meegegeven uit de index en stop ze in de variable $attack.
        $attack = $this->attacks[$attackNumber];

        echo $target->Name . ' has ' . $target->getHealth() . ' health.<br>';
        echo $this->Name . ' attacks ' . $target->Name . ' using ' . $attack->Name . '!<br>';
        $target->receiveDamage($attack->Type, $attack->Damage);
    }

    public function receiveDamage($EnergyType, $damage)
    {
        //Zet de damage in een variable $actualDamaga waar de totale schade berekend wordt,
        //om die vervolgens van de health van de pokemon te halen.
        $actualDamage = $damage;

        if ($EnergyType == $this->Resistance->Type) {
            $actualDamage = ($damage - $this->Resistance->Value);
        } else if ($EnergyType == $this->Weakness->Type) {
            $actualDamage = ($damage * $this->Weakness->Modifier);
        }

        if ($actualDamage <= 0) {
            $actualDamage = 0;
        }

        $this->Health -= $actualDamage;
        echo $this->Name . ' takes ' . $actualDamage . ' damage<br>';
        //Als de health 0 of lager is zet de health standaard op 0 en haal 1 pokemon van het totaal aantal levende pokemons af.
        if ($this->Health <= 0) {
            $this->Health = 0;
            self::$counter--;
        }
        echo $this->Name . ' has ' . $this->Health . ' health left!';
    }

    //functies die verschillende waarde's opvragen om op de index te kunnen gebruiken.
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
