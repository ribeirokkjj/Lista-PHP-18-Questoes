<?php

function estatisticasNumericas($numeros) {
    $soma = 0;
    $maior = $numeros[0];
    $menor = $numeros[0];
    $pares = 0;
    $impares = 0;

    for ($i = 0; $i < count($numeros); $i++) {
        $valor = $numeros[$i];
        $soma += $valor;

        if ($valor > $maior) {
            $maior = $valor;
        }

        if ($valor < $menor) {
            $menor = $valor;
        }

        if ($valor % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }
    }

    sort($numeros);
    $quantidade = count($numeros);

    if ($quantidade % 2 == 0) {
        $mediana = ($numeros[$quantidade / 2 - 1] + $numeros[$quantidade / 2]) / 2;
    } else {
        $indice = (int) ($quantidade / 2);
        $mediana = $numeros[$indice];
    }

    $media = $soma / $quantidade;

    return "soma: " . $soma . "\n" .
           "média: " . $media . "\n" .
           "maior valor: " . $maior . "\n" .
           "menor valor: " . $menor . "\n" .
           "mediana: " . $mediana . "\n" .
           "números pares: " . $pares . "\n" .
           "números ímpares: " . $impares;
}

$lista = [8, 3, 5, 1, 9, 7, 2, 4, 6];
$resultado = estatisticasNumericas($lista);

echo $resultado;

?>