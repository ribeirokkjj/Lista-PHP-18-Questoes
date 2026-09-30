<?php



function analisarTexto($textVar) {

$palavras = 0;
$vogais = 0;
$consoantes = 0;

$caracteres = strlen($textVar);

for ($i = 0; $i < strlen($textVar); $i++) {

$letra = strtolower($textVar[$i]);

if (ctype_alpha($letra)) {
$palavras++;
}

if (ctype_alpha($letra) && $letra == "a" || $letra == "e" || $letra == "i" || $letra == "o" || $letra == "u") {

$vogais++;

} else if(ctype_alpha($letra)) {

$consoantes++;

}

}

return "Palavras: " . $palavras . "; Caracteres: " . $caracteres . "; Vogais: " . $vogais . "; Consoantes: " . $consoantes;

}

$texto = "Olá, tudo bem? Me chamo antonio.";

echo "Texto completo: " . $texto . "\n";

echo "Resultado: " . analisarTexto($texto) . "\n";

?>