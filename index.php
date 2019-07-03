<?php

require "Contabile.php";

$contabile1 = new Contabile('Giovanni', 'Rossi');
$contabile1->eta = '32';


$contabile1->setMatricola('1668');

$contabile1->setSesso('maschio');
var_dump($contabile1);

 ?>
