<?php

$dia = $_REQUEST['campo_dia'];
$mes = $_REQUEST['campo_mes'];
$ano = $_REQUEST['campo_ano'];

function somatorio(int $n)
{
    $somatorio = 0;

    for ($i = 0; $i < $n; $i++) {
        $somatorio += $i;
    }
    return $somatorio;
}

function somaDigitos(int $numero)
{
    $soma = 0;

    while ($numero > 0) {
        $digito = $numero % 10;
        $soma += $digito;
        $numero = $numero / 10;
    }

    return $soma;
}

