<?php

declare(strict_types=1);

namespace Alura\EncapsularCampo;

class Empresa
{
    private $funcionarios = [];

    public function adicionarFuncionario(Funcionario $funcionario): void
    {
        array_push($this->funcionarios, $funcionario);
    }

    //Sem refatoração
    //public function promoveFuncionario(Funcionario $possivelFuncionario, float $aumento)
    //{
    //    foreach ($this->funcionarios as $funcionario) {
    //        if ($funcionario->nome === $possivelFuncionario->nome) {
    //            $funcionario->salario += $aumento;
    //        }
    //    }
    //}

    //Com refatoração
    public function promoveFuncionario(Funcionario $possivelFuncionario, float $aumento)
    {
        foreach ($this->funcionarios as $funcionario) {
            if ($funcionario->getNome() === $possivelFuncionario->getNome()) {
                $funcionario->aumentaSalario($aumento);
            }
        }
    }
}
