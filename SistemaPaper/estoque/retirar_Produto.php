<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página para Retirar</title>
    <link rel="stylesheet" href="style_estoque.css">
</head>

<body>
    <header>
        <h1>Retirar Produto</h1>
    </header>
    <form action="removal_application.php" method="post">
        <label for="codigo">Código do Produto:</label>
        <input type="number" name="codigo" id="codigo" required>
        <input type="submit" value="Retirar Produto">
    </form>
    <br>
    <a href="javascript:history.go(-1)">Voltar para a Página Anterior</a>
</body>

</html>