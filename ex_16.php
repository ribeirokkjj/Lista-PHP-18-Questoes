<?php

function senhaCases($senha, &$maiusculas, &$minusculas){

    for($i = 0; $i < strlen($senha); $i++) {
        $caractere = $senha[$i];

        if(ctype_upper($caractere)) {
            $maiusculas++;
        } else if (ctype_lower($caractere)) {
            $minusculas++;
        }
    }
}

function senhaNumeros($senha, &$numeros){

    for($i = 0; $i < strlen($senha); $i++) {
        $caractere = $senha[$i];

        if(ctype_digit($caractere)) {
            $numeros++;
        }
    }
}

function senhaEspecial($senha, &$especial){

    for($i = 0; $i < strlen($senha); $i++) {
        $caractere = $senha[$i];

        if(!ctype_alnum($caractere)) {
            $especial++;
        }
    }
}

function senhaClassificador($senha, $maiusculas, $minusculas, $numeros, $especial, &$verificador, &$nivelSenha) {

    if(strlen($senha) >= 8) {$verificador++;} 
    if($maiusculas > 0) {$verificador++;}    
    if($minusculas > 0) {$verificador++;}    
    if($numeros > 0) {$verificador++;}    
    if($especial > 0) {$verificador++;}  
    
    switch ($verificador) {
        case(0):
        case(1):
            $nivelSenha = "A senha é fraca";
            break;
        case(2):
        case(3):
            $nivelSenha = "A senha é média";
            break;
        case(4):
            $nivelSenha = "A senha é forte";
            break;
        case(5):
            $nivelSenha = "A senha é muito forte";
            break;
    }
}

function relatorioFinal() {

$senha = readline("Digite sua senha para validação: ");
$maiusculas = 0;
$minusculas = 0;
$numeros = 0;
$especial = 0;
$verificador = 0;
$nivelSenha = "";

senhaCases($senha, $maiusculas, $minusculas);
senhaNumeros($senha, $numeros);
senhaEspecial($senha, $especial);
senhaClassificador($senha, $maiusculas, $minusculas, $numeros, $especial, $verificador, $nivelSenha);

echo "Maiúsculas: " . $maiusculas . "\n";
echo "Minúsculas: " . $minusculas . "\n";
echo "Números: " . $numeros . "\n";
echo "Caracteres especiais: " . $especial . "\n";
echo $nivelSenha;

}

relatorioFinal();



?>