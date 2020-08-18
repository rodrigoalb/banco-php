<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Cidade qualquer', 'um bairro', 'uma rua ai', '402');
$outroEndereco = new Endereco('uma cidade', 'um bairro', 'uma rua', '50');

echo $umEndereco .PHP_EOL;
echo $outroEndereco;