<?php
// Um dos clientes, a fintech Fulbank, irá dar aumento para seus funcionários proporcionais ao salário atual.
// Crie uma aplicação web que:
// O usuário informa o nome do funcionário e o salário atual.
// Se o salário for superior a 5.000, realizar acréscimo de 10%.
// Se o salário for até 5.000, realizar acréscimo de 20%.
// O programa deve exibir a seguinte mensagem:

// "O {Fulano} passará a receber R$ {4500,00}"

    $nomeFuncionario = $_GET["nomeFuncionario"];
    $salarioAtual = $_GET["salarioAtual"];

    echo "<h1>O nome é $nomeFuncionario</h1>";

    if($salarioAtual > 5000){
        $aumento = $salarioAtual + ($salarioAtual * 0.1);

        echo "<h1>O $nomeFuncionario passará a receber R$ $aumento</h1>";
    }else{
        $aumento = $salarioAtual + ($salarioAtual * 0.2);

        echo "<h1>O $nomeFuncionario passará a receber R$ $aumento</h1>";
    }
?>