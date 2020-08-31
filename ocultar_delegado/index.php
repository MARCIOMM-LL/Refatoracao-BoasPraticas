<?php declare(strict_types=1);

namespace Alura\OcultarDelegado;

require 'Departamento.php';
require 'Gerente.php';
require 'Pessoa.php';

$maria = new Pessoa(new Departamento(new Gerente('Márcio')));

//Sem refatoração violando o princípio de menor conhecimento
//ou lei de Demeter, que fala que por exemplo o objeto $maria
//só deve ter noção aos objetos próximos a ela, e não
//echo $maria->getDepartamento()->getGerente()->getNome();

//Com refatoração
echo $maria->getNomeDoGerente();
