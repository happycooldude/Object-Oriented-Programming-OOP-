<?php
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

$Pikachu = new Pikachu();
$Charmeleon = new Charmeleon();

$Pikachu->attack($Pikachu->getAttack1(), $Charmeleon);
echo '<br><br>';
$Pikachu->attack($Pikachu->getAttack1(), $Charmeleon);
echo '<br><br>';
$Charmeleon->attack($Charmeleon->getAttack2(), $Pikachu);
echo '<br><br>';
$Charmeleon->attack($Charmeleon->getAttack2(), $Pikachu);
echo '<br><br>';

echo '<br><br>The number of pokemons = '. Pokemon::getPopulation();
