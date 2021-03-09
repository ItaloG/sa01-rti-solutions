
<?php
// O sistema deve calcular o valor total convertido para as duas moedas baseado na cotação do dia 
// (fixar no código a cotação 5,41 dólar e 6,57 euro) e exibir a cotação em tela.
// Exemplos de saída: 
// Valor total em {dólar}: $ 3430,00
// Valor total em {euro}: €3430,00

    const   COTACAO_DOLAR = 5.41;
    const   COTACAO_EURO = 6.57;

    $reais = $_GET["valorReais"];
    $unidadeMonetaria = $_GET["unidadeMonetaria"];

    $convercaoDolar = $reais * COTACAO_DOLAR;
    $convercaoEuro = $reais * COTACAO_EURO;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS-GLOBAL/styles-global.css" />
    <title>Converte Reais</title>
</head>
<body>
    <div class="input-group">
        <div id="envio">
            <?php
            if ($unidadeMonetaria == "Dolar"){
            ?>
                <h1>Valor total em <?=$unidadeMonetaria?>: $ <?=$convercaoDolar?></h1>
            <?php
            }else if (($unidadeMonetaria == "Euro")){
            ?>
                <h1>Valor total em <?=$unidadeMonetaria?>: € <?=$convercaoDolar?></h1>
            <?php
            }else{
            ?>
                <h1>Escolha uma moeda para converter</h1>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>