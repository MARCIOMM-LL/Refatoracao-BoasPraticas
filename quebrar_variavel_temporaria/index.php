<?php declare(strict_types=1);

//Com refatoração
function retangulo(int $altura, int $largura): void
{
    $perimetro = 2 * ($altura + $largura);
    $area = $altura * $largura;

    echo "Perímetro: $perimetro" . "<br />";
    echo "Área: $area";
}

retangulo(3, 10);

//Sem refatoração
//function retangulo(int $altura, int $largura): void
//{
//    $temp = 2 * ($altura + $largura);
//    echo "Perímetro: $temp" . "<br />";

//    $temp = $altura * $largura;
//    echo "Área: $temp";
//}
