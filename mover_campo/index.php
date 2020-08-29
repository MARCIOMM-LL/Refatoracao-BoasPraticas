<?php declare(strict_types=1);

namespace Alura\MoverCampo;

require 'Contato.php';
require 'Usuario.php';

$contato = new Contato('Rua Vergueiro 3185', '115571-2751', 'm-andremiranda@outlook.com');
$usuario = new Usuario('Márcio', 'Miranda', $contato);

$usuario->imprimirInformacoes();
