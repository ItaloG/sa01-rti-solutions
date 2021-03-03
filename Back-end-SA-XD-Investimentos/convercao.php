<?php
// O sistema deve calcular o valor total convertido para as duas moedas baseado na cotação do dia 
// (fixar no código a cotação 5,41 dólar e 6,57 euro) e exibir a cotação em tela.
// Exemplos de saída: 
// Valor total em {dólar}: $ 3430,00
// Valor total em {euro}: €3430,00

    $reais = $_GET["valorReais"];
    $unidadeMonetaria = $_GET["unidadeMonetaria"];

    $convercaoDolar = $reais * 5.41;
    $convercaoEuro = $reais * 6.57;

    if ($unidadeMonetaria == "Dolar"){
        echo "<h1>Valor total em $unidadeMonetaria: $ $convercaoDolar</h1>";
    }else{
        echo "<h1>Valor total em $unidadeMonetaria: € $convercaoEuro</h1>";
    }
?>