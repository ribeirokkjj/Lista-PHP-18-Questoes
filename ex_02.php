<?php 

function inverterTexto($texto) {

    return strrev($texto);

}

    $text = "Teste";

    echo "Texto original: $text<br>";

    echo "Texto invertido: " . inverterTexto($text) . "<br>";

    echo "Quantidade de caracteres: " . strlen($text)

?>