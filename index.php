<?php
require 'Pokemon.php';
require 'Pickachu.php';
require 'Charmeleon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';

$Pickachu = new Pickachu();
$Charmeleon = new Charmeleon();

print_r('<pre>' . $Pickachu . '</pre>');

echo $Pickachu->Name;

print_r('<pre>' . $Charmeleon  . '</pre>');
