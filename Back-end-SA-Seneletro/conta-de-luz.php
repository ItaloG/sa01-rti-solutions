<?php
// O resultado deve ser exibido como abaixo:

// Conta de luz de FULANO DE TAL SANTOS.
// Rua Flores das águas, 500.
// Consumo: 200kWh.
// Valor a pagar: R$ 84,00.

// Caso o consumo for acima de 120 kWh, o valor de cada kWh deverá ser 0,42 e consumo deve aparecer em vermelho.
// Caso o consumo for até de 120 kWh, o valor de cada kWh deverá ser 0,32 
// e consumo deve aparecer em azul e mostrar uma mensagem: “Obrigado por economizar!”.

    const CONSUMO_ACIMA_120KWH = 0.42;
    const CONSUMO_ATE_120KWH = 0.32;

    $nomeCompleto = $_GET["nome"];
    $endereco = $_GET["endereco"];
    $consumo = $_GET["quilowatts"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS-GLOBAL/styles-global.css"/>
    <title>Calcula conta de luz</title>
</head>
<body>
    <div class="input-group">
        <div id="envio">
            <?php
            if($consumo > 120){
                $custo = $consumo * CONSUMO_ACIMA_120KWH;
            ?>
                <h1>Conta de luz de <?=$nomeCompleto?>.</h1>
                <h1><?=$endereco?>.</h1>
                <h1 style="color: red;">Consumo: <?=$consumo?> kwh.</h1>
                <h1>Valor a pagar: R$ <?=$custo?>.</h1>
            <?php
            }else{
                $custo = $consumo * CONSUMO_ATE_120KWH;
            ?>
                <h1>Conta de luz de <?=$nomeCompleto?>.</h1>
                <h1><?=$endereco?>.</h1>
                <h1 style="color: blue;">Consumo: <?=$consumo?> kwh.</h1>
                <h1>Valor a pagar: R$ <?=$custo?>.</h1>
            <?php
            }
            ?>
        </div>
    </div>
</body>
</html>