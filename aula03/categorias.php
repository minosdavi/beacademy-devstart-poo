<?php

declare(strict_types=1);

class Categoria{
    private string $nome;
    private string $descricao;
    
    public function __contruct(string $novoNome, string $novaDescricao){
        $this->nome = $novoNome;
        $this->descricao = $novaDescricao;
    }
}