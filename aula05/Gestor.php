<?php

declare(strict_types=1);

class Gestor extends Usuario {
    private float $salario;
    private string $turno;


    public function __construct(string $email,string $senha ,float $salario)
    {
        parent::setEmail($email);
        parent::setSenha($senha);
        $this->salario = $salario;
    }


    public function getSalario():float{
        return $this->salario;
    }

    public function setSalario($novoSalario):void{
        $this->salario = $novoSalario;
    }

    public function getTurno():string{
        return $this->turno;
    }

    public function setTurno($novoTurno):void{
        $this->turno = $novoTurno;
    }
}