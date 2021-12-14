<?php
require_once 'init.php';

$Pikachu = new Pikachu();
$Charmeleon = new Charmeleon();

$Pikachu->attack(0, $Charmeleon);
echo '<br><br>';
$Charmeleon->attack(1, $Pikachu);
echo '<br><br>';
$Pikachu->attack(1, $Charmeleon);
echo '<br><br>';
// $Charmeleon->attack(0, $Pikachu);
// echo '<br><br>';



echo '<br><br>The number of pokemons = ' . Pokemon::getPopulation();
