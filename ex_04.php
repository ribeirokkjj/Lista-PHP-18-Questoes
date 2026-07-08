<?php


function gerarSenha($tamanho) {

$senha = "";

for ($i = 0; $i < $tamanho; $i++) {
    $valores = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz1234567890!@#$%&*();";
    $randomizacao = random_int(0, strlen($valores) - 1);
    $senha .= $valores[$randomizacao];
}

return $senha;

}

$tamanhoSenha = 12;

echo "Senha gerada: ".gerarSenha($tamanhoSenha);

?>