<?php

interface Validar{
    public function validarNome(string $nome): void;

    public function validarCPF(string $cpf): void;

    public function validarEmail(string $email): void;
}