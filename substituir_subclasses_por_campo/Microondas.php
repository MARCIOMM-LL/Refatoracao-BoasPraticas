<?php declare(strict_types=1);

namespace Alura\SubstituirSubclassesPorCampo;

//Sem refatoração
//abstract class Microondas
//{
//    abstract public function getVoltagem(): int;
//}

//Com refatoração
class Microondas
{
    private $voltagem;

    private function __construct(int $voltagem)
    {
        $this->voltagem = $voltagem;
    }

    public function getVoltagem(): int
    {
        return $this->voltagem;
    }

    //Usando o padrão factory method
    public static function criarMicroondas110(): Microondas
    {
        return new Microondas(110);
    }

    public static function criarMicroondas220(): Microondas
    {
        return new Microondas(220);
    }
}
