<?php

// Considerando o valor fixo médio do pedágio de R$ 9,40 e o valor por KM de R$ 6,00, calcular o valor total da viagem.
// A saída deve ser:
// A viagem de {Campinas} à {São Paulo} irá custar o valor total de R$ {512,00}.

const   VALOR_PEDAGIO = 9.40;
const   VALOR_KM = 6.0;

$origem = $_GET["origem"];
$destino = $_GET["destino"];
$distancia = $_GET["distancia"];
$pedagio = $_GET["pedagios"];

$custoPedagio = $pedagio * VALOR_PEDAGIO;
$custoKm = $distancia * VALOR_KM;

$custoViagem = $custoKm + $custoPedagio;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="CSS-GLOBAL/styles-global.css"/>
</head>
<body>

<!-- <h1 <?= $custoPedagio > 100 ? "style='color: red'" : "" ?>>
    
    O valor total dos pedágios é: R$<em><?= number_format($custoPedagio, 2, ",", ".")?></em>

</h1> -->

<!-- Se o valor do pedágio for maior que 100$ imprimir em vermelho-->
     <?php 
        if ($custoPedagio > 100){
    ?>
        <h1 style='color: red'>O valor total dos pedágios é: R$<em><?= number_format($custoPedagio, 2, ",", ".")?></em></h1>
    <?php
        }else{
    ?>
        <h1>O valor total dos pedágios é: R$<em><?=$custoPedagio?></em></h1>
    <?php
        }
    ?>
    <!-- <h1>A viagem de {Campinas} á {São Paulo} irá custar o valor total de <em>R$512</em>.</h1> -->
    <h1>A viagem de <?=$origem ?> á <?=$destino ?> irá custar o valor total de R$<em><?= number_format($custoViagem, 2, ",", ".") ?></em>.</h1>
</body>
</html>

