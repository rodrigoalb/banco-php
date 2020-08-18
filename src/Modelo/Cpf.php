<?php

namespace Alura\Banco\Modelo;

final class Cpf
{
    public string $cpf;

    public function __construct(string $numero)
    {
        $this->cpf = $numero;
    }

    public function getCpf(): string
    {
        return $this->cpf;
    }
}

