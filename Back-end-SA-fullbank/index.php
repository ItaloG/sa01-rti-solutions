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
        <form method="GET" action="aumento-Funcionarios.php">
        <h1>Calcular Aumento Funcionários</h1>
            <label for="nome">Nome e Sobrenome:</label>
            <input type="text" name="nomeFuncionario" id="nome" placeholder="Nome e Sobrenome" require/>

            <label for="salario">Salário Atual:</label>
            <input type="text" name="salarioAtual" id="salario" placeholder="Salário Atual" require/>

            <button>Calcular</button>
            <button type="reset" >Limpar</button>
        </form>
    </div>
</body>
</html>