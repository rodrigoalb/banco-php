<?php

namespace Alura\Banco\Modelo;

abstract class Pessoa
{
    protected string $nome;
    protected Cpf $cpf;

    public function __construct(string $nome, Cpf $cpf)
    {
        $this->validarNome($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    final protected function validarNome(string $nomeTitular)
    {
        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa ter mais do que 5 letras";
            exit();
        }
    }
}