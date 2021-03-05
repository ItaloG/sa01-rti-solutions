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
<!-- O sistema deve receber o consumo em Quilowatts-hora, o nome completo do cliente e seu endereço (rua e número). -->
    <div class="input-group">
        <form method="GET" action="conta-de-luz.php">
        <h1 >Calcula o valor da conta de Luz</h1>
            <label for="nomeCompleto">Nome completo:</label>
            <input type="text" name="nome" id="nomeCompleto" placeholder="Nome completo"/>

            <label for="endereco">Endereço:</label>
            <input type="text" name="endereco" id="endereco" placeholder="Rua, Número residencial"/>

            <label for="quilowattsHora">Quilowatts-hora:</label>
            <input type="number" name="quilowatts" id="quilowattsHora" placeholder="QWH"/>

            <button>Calcular</button>
            <button type="reset" >Limpar</button>
        </form>
    </div>
</body>
</html>