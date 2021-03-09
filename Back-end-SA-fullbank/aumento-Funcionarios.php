<?php
// Um dos clientes, a fintech Fulbank, irá dar aumento para seus funcionários proporcionais ao salário atual.
// Crie uma aplicação web que:
// O usuário informa o nome do funcionário e o salário atual.
// Se o salário for superior a 5.000, realizar acréscimo de 10%.
// Se o salário for até 5.000, realizar acréscimo de 20%.
// O programa deve exibir a seguinte mensagem:

// "O {Fulano} passará a receber R$ {4500,00}"

    const AUMENTO_SUPERIOR_5000 = 1.1;
    const AUMENTO_ATE_5000 = 1.2;

    $nomeFuncionario = $_GET["nomeFuncionario"];
    $salarioAtual = $_GET["salarioAtual"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS-GLOBAL/styles-global.css"/>
    <title>Calcula Aumento Funcionários</title>
</head>
<body>
    <div class="input-group">
        <div id="envio">
            <h1>O nome é <?=$nomeFuncionario?></h1>

            <?php
            if($salarioAtual > 5000){
             $aumento = $salarioAtual  * AUMENTO_SUPERIOR_5000;
            ?>

                <h1>O <?=$nomeFuncionario?> passará a receber R$ <?=$aumento?></h1>
            <?php
            }else{
                $aumento = $salarioAtual  * AUMENTO_ATE_5000;
            ?>

            <h1>O <?=$nomeFuncionario?> passará a receber R$ <em><?=$aumento?></em></h1>
            
            <?php
            }
            ?>

        </div>
    </div>
</body>
</html>