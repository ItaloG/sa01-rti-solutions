<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles-global.css"/>
    <title>Calcular Frete</title>
</head>
<body>

<!-- O sistema deve receber a cidade de origem, a cidade de destino, 
a distância entre elas em KM e a quantidade de pedágios no caminho. -->

    <div class="input-group">
        <form method="GET" action="calcula-frete.php">
        <h1>Calcular Frete</h1>
            <label for="cidadeOrigem">Cidade de Origem</label>
            <input type="text" name="origem" id="cidadeOrigem" placeholder="Cidade de Origem" require/>

            <label for="cidadeDestino">Cidade de Destino</label>
            <input type="text" name="destino" id="cidadeDestino" placeholder="Cidade de Destino" require/>

            <label for="distanciaKM">Distância em Km</label>
            <input type="number" min="0"name="distancia" id="distanciaKM" placeholder="Distância" require/>

            <label for="quantidadePedagios">Quantidade de pedágios</label>
            <input type="number" min="0" name="pedagios" id="quantidadePedagios" placeholder="Quantidade de pedágios" require/>

            <button>Calcular</button>
            <button type="reset" >Limpar</button>
        </form>
    </div>
</body>
</html>