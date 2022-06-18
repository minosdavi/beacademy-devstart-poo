<?php

declare(strict_types=1);

abstract class Usuario {
    private string $nome;
    private string $cpf;
    private string $email;
    private string $senha;


    public function __construct(string $email, string $senha)
    {
        $this->email = $email;
        $this->senha = $senha;
    }

    public function getNome():string{
        return $this->nome;
    }

    public function setNome($novoNome):void{
        $this->nome = $novoNome;
    }

    public function getCPF():string{
        return $this->cpf;
    }

    public function setCPF($novoCPF):void{
        $this->cpf = $novoCPF;
    }

    public function getEmail():string{
        return $this->email;
    }

    public function setEmail($novoEmail):void{
        $this->email = $novoEmail;
    }
    
    public function getSenha():string{
        return $this->senha;
    }

    public function setSenha($novaSenha):void{
        $this->senha = $novaSenha;
    }
}