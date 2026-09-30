<?php 

function inverterTexto($texto) {

    return strrev($texto);

}

    $text = "Teste";

    echo "Texto original: " . $text . "\n";

    echo "Texto invertido: " . inverterTexto($text) . "\n";

    echo "Quantidade de caracteres: " . strlen($text) . "\n";

?>