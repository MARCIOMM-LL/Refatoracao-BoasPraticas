<?php declare(strict_types=1);

namespace Alura\ExtrairClasse;

//Com refatoração
require 'Usuario.php';
require 'Contato.php';

$contato = new Contato("Rua Vergueiro 3185", "04101-300", "5571-2751", "Fixo", "11");
$usuario = new Usuario("Márcio", "Miranda", $contato);

echo $usuario->getNome();
echo "<br />";
echo $usuario->getSobrenome();
echo "<br />";
echo $usuario->getTelefoneDdd();
echo "<br />";
echo $usuario->getEnderecoECep();

//Sem refatoração
//require 'Usuario.php';
//
//$usuario = new Usuario("Giovanni", "Tempobono", "Rua Vergueiro 3185", "04101-300", "5571-2751", "11");
//
//echo $usuario->getNome();
//echo $usuario->getTelefoneDdd();