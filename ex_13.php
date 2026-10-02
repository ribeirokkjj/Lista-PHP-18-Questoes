<?php

function criptografarMensagem($texto, $deslocamento = 3) {
    $alfabeto = "abcdefghijklmnopqrstuvwxyz";
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];
        $minuscula = strtolower($letra);

        if (strpos($alfabeto, $minuscula) !== false) {
            $posicao = strpos($alfabeto, $minuscula);
            $novaPosicao = ($posicao + $deslocamento) % 26;
            $novaLetra = $alfabeto[$novaPosicao];

            if ($letra === strtoupper($letra)) {
                $resultado .= strtoupper($novaLetra);
            } else {
                $resultado .= $novaLetra;
            }
        } else {
            $resultado .= $letra;
        }
    }

    return $resultado;
}

function descriptografarMensagem($texto, $deslocamento = 3) {
    $alfabeto = "abcdefghijklmnopqrstuvwxyz";
    $resultado = "";

    for ($i = 0; $i < strlen($texto); $i++) {
        $letra = $texto[$i];
        $minuscula = strtolower($letra);

        if (strpos($alfabeto, $minuscula) !== false) {
            $posicao = strpos($alfabeto, $minuscula);
            $novaPosicao = ($posicao - $deslocamento + 26) % 26;
            $novaLetra = $alfabeto[$novaPosicao];

            if ($letra === strtoupper($letra)) {
                $resultado .= strtoupper($novaLetra);
            } else {
                $resultado .= $novaLetra;
            }
        } else {
            $resultado .= $letra;
        }
    }

    return $resultado;
}

$mensagem = "segredo da empresa";
$criptografada = criptografarMensagem($mensagem);
$descriptografada = descriptografarMensagem($criptografada);

echo "mensagem original: " . $mensagem . "\n";
echo "mensagem criptografada: " . $criptografada . "\n";
echo "mensagem descriptografada: " . $descriptografada . "\n";

?>