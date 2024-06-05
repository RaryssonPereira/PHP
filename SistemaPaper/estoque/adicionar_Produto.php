<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página para Adicionar</title>
    <link rel="stylesheet" href="style_estoque.css">
</head>

<body>
    <form action="insert_application.php" method="post">
        <header>
            <h1>Cadastro do Produto</h1>
        </header>
        <table>
            <tr>
                <td>Código:</td>
                <td><input type="number" name="codigo" id=""></td>
            </tr>
            <tr>
                <td>Nome do Produto:</td>
                <td><input type="text" name="nome" id=""></td>
            </tr>
            <tr>
                <td>Descrição do Produto:</td>
                <td><textarea name="descricao" id="" cols="21" rows="5"></textarea></td>
            </tr>
            <tr>
                <td>Preço:</td>
                <td><input type="number" name="preco" id="" step="0.01"></td>
            </tr>
        </table>
        <br><br>
        <input type="submit" name="Gravar" value="Adicionar Produto">
        <br><br>
        <a href="javascript:history.go(-1)">Voltar para a Página Anterior</a>
    </form>
</body>

</html>