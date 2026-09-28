<?php

function ordenarNomes($listaNomes) {

    $nomes = explode(",", $listaNomes);
    $listaFinal = [];

    for ($i = 0; $i < count($nomes); $i++) {
        $listaFinal[] = trim($nomes[$i]);
    }

    sort($listaFinal);

    return implode(", ", $listaFinal);

}

$listaAlunos = "Antonio, Henrique, Gabriel, Carlos, Botelho";

echo ordenarNomes($listaAlunos);

?>