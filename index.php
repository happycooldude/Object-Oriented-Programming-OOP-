<?php
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

$Pikachu = new Pikachu();
$Charmeleon = new Charmeleon();

$Pikachu->attack(1, $Charmeleon);
echo '<br><br>';
$Pikachu->attack(0, $Charmeleon);
echo '<br><br>';
$Charmeleon->attack(1, $Pikachu);
echo '<br><br>';
$Charmeleon->attack(0, $Pikachu);
echo '<br><br>';



echo '<br><br>The number of pokemons = ' . Pokemon::getPopulation();
