<?php

class Weakness
{
    public $Type;
    public $Modifier;

    public function __construct($Type, $Modifier)
    {
        $this->Type = $Type;
        $this->Modifier = $Modifier;
    }

    public function __toString()
    {
        return json_encode($this);
    }
}
