<?php

function analisarProdutos($produtos) {

    $maisCaro = $produtos[0];
    $maisBarato = $produtos[0];
    $somaPrecos = 0;
    $opcoesPesquisa = "produtos disponíveis: ";

    for ($i = 0; $i < count($produtos); $i++) {
        if ($produtos[$i]["preco"] > $maisCaro["preco"]) {
            $maisCaro = $produtos[$i];
        }

        if ($produtos[$i]["preco"] < $maisBarato["preco"]) {
            $maisBarato = $produtos[$i];
        }

        $somaPrecos += $produtos[$i]["preco"];

        $opcoesPesquisa .= $produtos[$i]["nome"];

        if ($i < count($produtos) - 1) {
            $opcoesPesquisa .= ", ";
        }
    }

    $mediaPrecos = $somaPrecos / count($produtos);

    echo $opcoesPesquisa . "\n";

    $nomePesquisa = strtolower(readline("informe o nome do produto para pesquisar: "));
    $resultadoPesquisa = "produto não encontrado.";

    for ($i = 0; $i < count($produtos); $i++) {
        if (strtolower($produtos[$i]["nome"]) === $nomePesquisa) {
            $resultadoPesquisa = "produto encontrado: " . $produtos[$i]["nome"] . " - R$ " . number_format($produtos[$i]["preco"], 2, ",", ".");
            break;
        }
    }

    return "produto mais caro: " . $maisCaro["nome"] . " - R$ " . 
    number_format($maisCaro["preco"], 2, ",", ".") . "; produto mais barato: " . 
    $maisBarato["nome"] . " - R$ " . number_format($maisBarato["preco"], 2, ",", ".") . 
    "; média dos preços: R$ " . number_format($mediaPrecos, 2, ",", ".") . "; pesquisa de produto: " . $resultadoPesquisa;
}

$catalogo = [
    ["nome" => "Mouse", "preco" => 120.00],
    ["nome" => "Teclado", "preco" => 230.50],
    ["nome" => "Monitor", "preco" => 899.99],
    ["nome" => "Notebook", "preco" => 2499.90],
    ["nome" => "Headset", "preco" => 180.00]
];

echo analisarProdutos($catalogo);

?>