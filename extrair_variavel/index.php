<?php declare(strict_types=1);

//Com refatoração
function verificaSeEmailEhValido(): string
{
    $email = $_GET['email'];
    $mensagem = "O seu e-mail é: " . $_GET['email'];
    $mensagemErro = "O seu e-mail não é válido";

    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return $mensagem;
    } else {
        return $mensagemErro;
    }
}

echo verificaSeEmailEhValido();

//Sem refatoração
//  function verificaSeEmailEhValido(): string
//  {
//      return filter_var($_GET['email'], FILTER_VALIDATE_EMAIL) ? "O seu e-mail é: " . $_GET['email'] : "O seu e-mail não é válido";
//  }
//
//  echo verificaSeEmailEhValido();