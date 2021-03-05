<?php
// O resultado deve ser exibido como abaixo:

// Conta de luz de FULANO DE TAL SANTOS.
// Rua Flores das águas, 500.
// Consumo: 200kWh.
// Valor a pagar: R$ 84,00.

// Caso o consumo for acima de 120 kWh, o valor de cada kWh deverá ser 0,42 e consumo deve aparecer em vermelho.
// Caso o consumo for até de 120 kWh, o valor de cada kWh deverá ser 0,32 
// e consumo deve aparecer em azul e mostrar uma mensagem: “Obrigado por economizar!”.

    $nomeCompleto = $_GET["nome"];
    $endereco = $_GET["endereco"];
    $consumo = $_GET["quilowatts"];

    if($consumo > 120){
        $custo = $consumo * 0.42;

        echo "<h1>Conta de luz de $nomeCompleto.</h1>";
        echo "<h1>$endereco.</h1>";
        echo "<h1 style='color: red;'>Consumo: $consumo kwh.</h1>";
        echo "<h1>Valor a pagar: R$ $custo.</h1>";
    }else{
        $custo = $consumo * 0.32;

        echo "<h1>Conta de luz de $nomeCompleto.</h1>";
        echo "<h1>$endereco.</h1>";
        echo "<h1 style='color: blue;'>Consumo: $consumo kwh.</h1>";
        echo "<h1>Obrigado por economizar!</h1>";
        echo "<h1>Valor a pagar: R$ $custo.</h1>";
    }

    

?>