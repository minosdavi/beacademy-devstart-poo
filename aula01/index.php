<?php

declare(strict_types=1);

include 'aluno.php';
include 'professor.php';
include 'curso.php';
include 'disciplina.php';

$a1 = new Aluno();

$a1-> nome = 'Davi';

$a1->cpf = '039.039.083-63';

echo $a1->nome;