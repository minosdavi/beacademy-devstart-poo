<?php

declare(strict_types=1);

abstract class Validador{
    public static function validarCPF(string $cpf){
        if(strlen($cpf)!==11){
            die('CPF invalido');
        }
    }
}