<?php

function analisarNumero($numero) {

    if ($numero % 2 == 0) {
        $parOuImpar = "par";
    } else {
        $parOuImpar = "ímpar";
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
        $statusPrimo = "primo";
    } else {
        $statusPrimo = "não primo";
    }

    $somaDivisores = 0;

    for ($i = 1; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            $somaDivisores += $i;
        }
    }

    if ($somaDivisores == $numero) {
        $statusPerfeito = "perfeito";
    } else {
        $statusPerfeito = "não perfeito";
    }

    return "número: ".$numero."; par ou ímpar: ".$parOuImpar."; primo: ".$statusPrimo."; perfeito: ".$statusPerfeito;

}

$numeroTeste = 28;

echo analisarNumero($numeroTeste);

?>