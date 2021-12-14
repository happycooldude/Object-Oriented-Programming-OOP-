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
}
