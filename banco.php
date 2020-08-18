<?php

require_once 'autoload.php';

//Pacotes
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Cpf;
use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca};

$enderecoRodrigo = new Endereco('São Paulo', 'Aclimação', 'uma rua', '445');
$rodrigo = new Titular( new Cpf('123.456.789-10'),'Rodrigo', $enderecoRodrigo);
$contaUm = new ContaCorrente($rodrigo);
$contaUm->depositar(500);
$contaUm->sacar(100);
var_dump($contaUm);

$enderecoJulia = new Endereco('São Paulo', 'Aclimação', 'uma rua', '446');
$julia = new Titular( new Cpf('123.456.789-11'),'Julia', $enderecoJulia);
$contaDois = new contaCorrente($julia);
$contaDois->depositar(550);
$contaDois->transferir(500, $contaUm);
var_dump($contaDois);

$enderecoTeste = new Endereco('a', 'b', 'c', '1d');
$teste = new Titular( new Cpf('987.654.321-01'),'Conta unset', $enderecoTeste);
$outraConta = new ContaCorrente($teste);
unset($outraConta);

// método de acesso para atributos de uma classe
echo Conta::getNumeroDeContas();
