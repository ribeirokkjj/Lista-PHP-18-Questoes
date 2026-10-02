<?php
function analisarProdutos($produtos) {

    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $somaPrecos = 0;
    $opcoesPesquisa = "produtos disponíveis: ";

    for ($i = 0; $i < count($produtos); $i++) {
        $nome = $produtos[$i][0];
        $preco = $produtos[$i][1];

        if ($preco > $maisCaro[1]) {
            $maisCaro = $produtos[$i];
        }

        if ($preco < $maisBarato[1]) {
            $maisBarato = $produtos[$i];
        }

        $somaPrecos += $preco;
        $opcoesPesquisa .= $nome;

        if ($i < count($produtos) - 1) {
            $opcoesPesquisa .= ", ";
        }
    }

    $mediaPrecos = $somaPrecos / count($produtos);

    echo $opcoesPesquisa . "\n";

    $nomePesquisa = strtolower(readline("informe o nome do produto para pesquisar: "));
    $resultadoPesquisa = "produto não encontrado.";

    for ($i = 0; $i < count($produtos); $i++) {
        if (strtolower($produtos[$i][0]) === $nomePesquisa) {
            $resultadoPesquisa = "produto encontrado: " . $produtos[$i][0] . " - R$ " . $produtos[$i][1];
            break;
        }
    }

    return "produto mais caro: " . $maisCaro[0] . " - R$ " . $maisCaro[1] . "; produto mais barato: " .
    $maisBarato[0] . " - R$ " . $maisBarato[1] . "; média dos preços: R$ " . $mediaPrecos . "; pesquisa de produto: " . $resultadoPesquisa;
}

$catalogo = [
    ["mouse", 120.00],
    ["teclado", 230.50],
    ["monitor", 899.99],
    ["notebook", 2499.90],
    ["headset", 180.00]
];

echo analisarProdutos($catalogo);

?>