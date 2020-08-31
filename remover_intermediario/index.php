<?php declare(strict_types=1);

namespace Alura\RemoverIntermediario;

require 'Funcionario.php';
//require 'Empregado.php';

//Sem refatoraçaõ
//$maria = new Empregado(new Funcionario('Márcio', 'Dev'));

//Com refatoração
$maria = new Funcionario('Márcio', 'Dev');

echo "<p>{$maria->getNome()}</p>";
echo "<p>{$maria->getCargo()}</p>";
