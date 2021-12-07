<?php
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

$Pikachu = new Pikachu();
$Charmeleon = new Charmeleon();

$Pikachu->attack($Pikachu->getAttack2(), $Charmeleon);
echo '<br><br><br>';
$Charmeleon->attack($Charmeleon->getAttack2(), $Pikachu);
$Charmeleon->attack($Charmeleon->getAttack2(), $Pikachu);
echo '<br><br><br>';
echo '<br><br><br>Charmeleon health ', $Charmeleon->getHealth(), '<br>';
echo '<br><br><br>Pikachu health ', $Pikachu->getHealth(), '<br>';

echo '<br><br>The number of pokemons = ', getPopulation();
