<?php

declare(strict_types=1);

class Produto{
    private string $nome;
    private float $valor;

    public function __construct(string $novoNome, float $novoValor){
        $this->nome = $novoNome;
        $this->valor = $novoValor;
    }

    public function getNome() : string{
        return $this->nome;
    }

    public function setNome($novoNome) : void{
        $this->nome = $novoNome;
    }

    public function getValor() : float{
        return $this -> valor;
    }
    
    public function setValor($novoValor) : void{
        if($novoValor<0){
            die('Valor não pode ser usado');
        }
        $this->valor = $novoValor;
    }
}