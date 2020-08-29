<?php

declare(strict_types=1);

namespace Alura\IncorporarClasse;

require 'Contato.php';
require 'Usuario.php';
require 'Telefone.php';

$telefone = new Telefone('11', '5571-2751', 'comercial');
$contato = new Contato('Rua Vergueiro 3185', '04101-300');
$usuario = new Usuario('Márcio', 'Miranda', $contato, $telefone);

echo $usuario->getNome();
echo "<br />";
echo $usuario->getTelefoneDdd();
