<?php

function analisarNumero($numero) {

    if ($numero % 2 == 0) {
        $parOuImpar = "Par";
    } else {
        $parOuImpar = "Ímpar";
    }

    $primo = true;

    if ($numero < 2) {
        $primo = false;
    }

    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $primo = false;
            break;
        }
    }

    if ($primo) {
        $statusPrimo = "Primo";
    } else {
        $statusPrimo = "Não primo";
    }

    $somaDivisores = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }

    if ($somaDivisores == $numero) {
        $statusPerfeito = "Perfeito";
    } else {
        $statusPerfeito = "Não perfeito";
    }

    return "Número: ".$numero."; Par ou ímpar: ".$parOuImpar."; Primo: ".$statusPrimo."; Perfeito: ".$statusPerfeito;

}

$numeroTeste = 28;

echo analisarNumero($numeroTeste);

?>