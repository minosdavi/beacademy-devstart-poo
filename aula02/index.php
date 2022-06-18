<?php

declare(strict_types=1);
include 'produtos.php';

$p1 = new Produto('Saia Jeans', 300);

//$p1->setNome('Saia Jeans');
//$p1->setValor(500);

$p2 = new Produto('Tenis', 150);
//$p2->setNome('Tenis');
//$p2->setVALOR(100);

echo $p1->getNome();
echo "<br>";

var_dump($p1);
echo "<br>";
var_dump($p2);
