<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Pessoa;

abstract class Funcionario extends Pessoa
{
    private float $salario;

    public function __construct(string $nome, Cpf $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    protected function receberAumento(float $valorAumento): void
    {
        if($valorAumento < 0){
            echo "Valor do aumento precisa ser positivo";
            return;
        } else {
            $this->salario+= $valorAumento;
        }
    }

    public function getSalario(): float
    {
        return $this->salario;
    }

    abstract public function calcularBonificacao(): float;
}