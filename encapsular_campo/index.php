<?php

declare(strict_types=1);

namespace Alura\EncapsularCampo;

require 'Empresa.php';
require 'Funcionario.php';

//Sem refatoração
//$alura = new Empresa();
//$funcionario = new Funcionario('Márcio', 100);
//
//$alura->adicionarFuncionario($funcionario);
//
//echo $funcionario->salario;
//
//$funcionario->salario = 500;
//
//$alura->promoveFuncionario($funcionario, 50);
//
//echo $funcionario->salario;

//Com refatoração
$drummond = new Empresa();
$funcionario = new Funcionario('Márcio', 1000);

$drummond->adicionarFuncionario($funcionario);

echo $funcionario->getSalario();

echo "<br />";

$drummond->promoveFuncionario($funcionario, 50);

echo $funcionario->getSalario();
