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
            $nivelSenha = "a senha é fraca";
            break;
        case(2):
        case(3):
            $nivelSenha = "a senha é média";
            break;
        case(4):
            $nivelSenha = "a senha é forte";
            break;
        case(5):
            $nivelSenha = "a senha é muito forte";
            break;
    }
}

function relatorioFinal() {

$senha = readline("digite sua senha para validação: ");
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

echo "maiúsculas: " . $maiusculas . "\n";
echo "minúsculas: " . $minusculas . "\n";
echo "números: " . $numeros . "\n";
echo "caracteres especiais: " . $especial . "\n";
echo $nivelSenha;

}

relatorioFinal();



?>