<?php
require 'Pokemon.php';
require 'Pikachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

$Pikachu = new Pikachu();
$Charmeleon = new Charmeleon();

// echo $Charmeleon->Health - ($Pikachu->Attack1->Damage - $Charmeleon->Resistance->Value), '<br>';
// echo $Pikachu->Health - ($Charmeleon->Attack2->Damage * $Pikachu->Weakness->Modifier), '<br><br>';


$Pikachu->attack($Pikachu->getAttack1(), $Charmeleon);
echo '<br><br><br>Charmeleon health ', $Charmeleon->getHealth(), '<br>';
echo 'Charmeleon '.$Charmeleon. '<br>';
echo 'Pikachu '.$Pikachu. '<br>';

// echo 'The number of pokemons = ', Pokemon::$counter;
