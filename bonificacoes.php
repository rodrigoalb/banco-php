<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\{Cpf};
use Alura\Banco\Modelo\Funcionario\{Diretor, EditorVideo, Gerente, Desenvolvedor};

$umDesenvolvedor = new Desenvolvedor(
    'Rodrigo',
    new Cpf('123.456.789.10'),
    '1000'
);

$umDesenvolvedor->subirDeNivel();

$umaGerente = new Gerente(
    'Julia',
    new Cpf('987.654.321.10'),
    '3000'
);

$umDiretor = new Diretor(
    'Rodrigo',
    new Cpf('454.531.123-12'),
    '5000'
);

$umEditor = new EditorVideo('José',
    new Cpf('521.642.712-16'),
    '1500');

$controlador = new ControladorDeBonificacoes();
$controlador->adicionarBonificacaoDe($umDesenvolvedor);
$controlador->adicionarBonificacaoDe($umaGerente);
$controlador->adicionarBonificacaoDe($umDiretor);
$controlador->adicionarBonificacaoDe($umEditor);

echo $controlador->getTotal();