<?php

function calcularMedia($notas) {

    $maior = $notas[0];
    $menor = $notas[0];
    $soma = 0;

    for ($i = 0; $i < count($notas); $i++) {
        if ($notas[$i] > $maior) {
            $maior = $notas[$i];
        }

        if ($notas[$i] < $menor) {
            $menor = $notas[$i];
        }

        $soma += $notas[$i];
    }

    $media = $soma / count($notas);

    if ($media >= 7) {
        $situacao = "Aprovado";
    } else if ($media >= 5) {
        $situacao = "Recuperação";
    } else {
        $situacao = "Reprovado";
    }

    return "Maior nota: ".$maior."; Menor nota: ".$menor."; Média final: ".$media."; Situação final: ".$situacao;

}

$notasAluno = [1, 2, 5, 7, 10];

echo calcularMedia($notasAluno);

?>