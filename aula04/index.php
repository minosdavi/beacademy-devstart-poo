<?php

include 'Usuario.php';
include 'Gestor.php';
include 'Cliente.php';
include 'GestorGeral.php';

$c1 = new Cliente('chiquinho@email.com', '123456');
$g1 = new Gestor('davi@email.com', '456123', 6000);
$gg1 = new GestorGeral('maria@email.com', '123123', 1000);


var_dump($c1);

echo "<br>";

var_dump($g1);

echo "<br>";

var_dump($gg1);