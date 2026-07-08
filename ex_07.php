<?php

function calcularDesconto($valor) {

$valorDescontado = $valor;

if ($valor > 100) {
    $valorDescontado = $valorDescontado * 0.9;
} else if ($valor > 500) {
    $valorDescontado = $valorDescontado * 0.8;
} else {
    $valorDescontado = $valorDescontado  * 0.7;
}

return "Valor sem desconto: ".$valor."; Valor com desconto: ".$valorDescontado;

}

$valorTotal = 600;

echo calcularDesconto($valorTotal);

?>