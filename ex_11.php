<?php

function formatarTexto($texto) {

    $maiusculo = strtoupper($texto);
    $minusculo = strtolower($texto);

    $palavras = explode(" ", $texto);
    $titulo = "";

    for ($i = 0; $i < count($palavras); $i++) {
        $palavra = $palavras[$i];
        $primeiraLetra = strtoupper($palavra[0]);
        $restante = strtolower(substr($palavra, 1));
        $titulo .= $primeiraLetra.$restante;

        if ($i < count($palavras) - 1) {
            $titulo .= " ";
        }
    }

    $quantidadeCaracteres = strlen($texto);

    return "texto em maiúsculas: ".$maiusculo."; texto em minúsculas: ".$minusculo."; primeira letra de cada palavra: ".$titulo."; quantidade de caracteres: ".$quantidadeCaracteres;

}

$texto = "relatorio de vendas da empresa";

echo formatarTexto($texto);

?>

<!-- essa foi dificil -->