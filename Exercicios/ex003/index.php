<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tipos Primitivos em PHP</title>
</head>
<body>
    <h1>Teste de tipos primitivos</h1>
    <?php 
        $num = 300;
        echo "O valor da variável 300 é $num <br>";

        $num1 = 0x1A;
        echo "O valor da varível 0x1A é $num1 <br>";

        $nome = "Gustavo";
        var_dump($nome);

        $num2 = (int) "950";
        var_dump($num2);
    ?>
</body>
</html>