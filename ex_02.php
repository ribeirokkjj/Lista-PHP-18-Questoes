<?php 

function inverterTexto($texto) {

    return strrev($texto);

}

    $text = "Teste";

    echo "texto original: " . $text . "\n";

    echo "texto invertido: " . inverterTexto($text) . "\n";

    echo "quantidade de caracteres: " . strlen($text) . "\n";

?>