<?php

require "Contabile.php";

$contabile1 = new Contabile();
$contabile1->nome = 'Giovanni';
$contabile1->cognome = 'Rossi';


$contabile1->setMatricola('1668');

$contabile1->setSesso('maschio');
var_dump($contabile1);

 ?>
