<?php

class Resistance
{
    public $Type;
    public $Value;

    public function __construct($Type, $Value)
    {
        $this->Type = $Type;
        $this->Value = $Value;
    }
}
