<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Title here</title>
</head>

<body>
    <form action="insert.php" method="post">
        <table>
            <tr>
                <td colspan="2">Cadastro de Funcionário</td>
            </tr>
            <tr>
                <td>Nome:</td>
                <td><input type="text" name="nome" id=""></td>
            </tr>
            <tr>
                <td>Cargo:</td>
                <td><input type="text" name="cargo" id=""></td>
            </tr>
            <tr>
                <td>Descrição cargo:</td>
                <td><textarea name="descCargo" id="" cols="15" rows="15"></textarea></td>
            </tr>

            <tr>
                <td>Setor:</td>
                <td><input type="text" name="setor" id=""></td>
            </tr>
            <tr>
                <td>Salário:</td>
                <td><input type="text" name="salario" id=""></td>
            </tr>
        </table>
        <br><br>
        <input type="submit" name="Gravar">
    </form>
</body>

</html>