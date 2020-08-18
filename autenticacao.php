<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Service\Autenticador;

$autenticador = new Autenticador();
$umDiretor = new Diretor('Marcos Castro',
    new Cpf('683.541.612-10'),
    '8000');

$autenticador->tentarLogar($umDiretor, '1234');