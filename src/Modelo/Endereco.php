<?php

namespace Alura\Banco\Modelo;

final class Endereco
{
    private string $cidade;
    private string $bairro;
    private string $logradouro;
    private string $numero;

    public function __construct(string $cidade, string $bairro, string $logradouro, string $numero){
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->logradouro = $logradouro;
        $this->numero = $numero;
    }

    public function __toString(): string
    {
        return "{$this->cidade}, {$this->bairro}, {$this->logradouro}, {$this->numero}";
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getLogradouro(): string
    {
        return $this->logradouro;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }


}