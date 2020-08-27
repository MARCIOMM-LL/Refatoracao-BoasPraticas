<?php declare(strict_types=1);

$saldos = [
    'Giovanni' => 3000,
    'Erika' => 5000,
];

//Com refatoração
function exibeSaldoCorrentista(string $nome, array $saldos)
{
    //Verifica se o usuário existe
    if (array_key_exists($nome, $saldos)) {
        //Com refatoração
        exibeSaldo($nome, $saldos);
    } else {
        //Com refatoração
        exibeErro();
    }
}

function exibeSaldo(string $nome, array $saldos)
{
    echo "<p>O saldo do $nome é: ${saldos[$nome]}</p>";
}

function exibeErro()
{
    echo "<p>Correntista não existente.</p>";
}

exibeSaldoCorrentista('Giovanni', $saldos);

//Sem refatoração
//  Verifica se o usuário existe
//  if (array_key_exists("Giovanni", $saldos)) {
//      //Se existir, exibe o saldo na tela
//      echo "<p>O saldo do Giovanni é: ${saldos['Giovanni']}</p>";
//  } else {
//      //Se não, exibe erro
//      echo "<p>Correntista não existente.</p>";
//  }

