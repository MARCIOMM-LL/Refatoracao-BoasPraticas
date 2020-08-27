<?php declare(strict_types=1);

function retangulo(int $altura, int $largura): void
{

    $temp = 2 * ($altura + $largura);
    echo "Perímetro: $temp" . "<br />";

    $temp = $altura * $largura;
    echo "Área: $temp";
}

retangulo(3, 10);
