<?php declare(strict_types=1);

//Com refatoração
function recebeDesconto(int $descontoInicial, bool $ehPremium, int $quantidadeCompras, int $anosCliente): void
{
    //A variável $descontoInicial contém o valor inicial,
    //já a variável $desconto contém a referência inicial
    //e posteriormente o cálculo executado sobre ela
    //Evitando que o parâmetro $descontoInicial seja sobrescrito
    $desconto = $descontoInicial;

    if ($desconto > 200) {
        return; //Saindo da função sem retornar nenhum valor
    }

    if ($ehPremium === true) {
        $desconto = $desconto * 1.1;
    }

    if ($quantidadeCompras > 50) {
        $desconto = $desconto * 1.2;
    }

    if ($anosCliente > 3) {
        $desconto = $desconto * 1.1;
    }

    echo <<<EOF
        --------------------
        Desconto Inicial: $descontoInicial
        --------------------
    EOF;
    echo "<br />";
    echo <<<EOF
        --------------------
        Desconto após as compras: $desconto
        --------------------
    EOF;
}

recebeDesconto(50, true, 100, 100);

//Sem refatoração
//function recebeDesconto(int $descontoInicial, bool $ehPremium, int $quantidadeCompras, int $anosCliente): void
//{
//    if ($descontoInicial > 200) {
//        return;
//    }
//
//    if ($ehPremium === true) {
//        $descontoInicial = $descontoInicial * 1.1;
//    }
//
//    if ($quantidadeCompras > 50) {
//        $descontoInicial = $descontoInicial * 1.2;
//    }
//
//    if ($anosCliente > 3) {
//        $descontoInicial = $descontoInicial * 1.1;
//    }
//
//    echo <<<EOF
//--------------------
//Desconto: $descontoInicial
//--------------------
//EOF;

//recebeDesconto(50, true, 100, 100);
