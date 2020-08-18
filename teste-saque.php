<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{Cpf, Endereco};

$contaTeste = new ContaCorrente(
    new Titular(
        new Cpf('123.567.890-10'),
        'Rodrigo Barbosa',
        new Endereco('Cidade qualquer', 'Bairro qualquer', 'logradouro qualquer', '123')
    )
);
$contaTeste->depositar(500);
$contaTeste->transferir(200, $contaTeste);
$contaTeste->sacar(200);
echo $contaTeste->getSaldo();