<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste de Strings</title>
</head>
<body>
    <h1>String em PHP</h1>
    <?php 
        $nome = "Gustavo";
        echo "Olá $nome! <br>";
        echo 'Olá $nome! <br>';

        const ESTADO = "SC <br>";
        echo "Eu Moro em " . ESTADO;

        echo "Estamos no ano de " . date('Y') . " <br>";

        $nom = "Rodrigo";
        $snom = "Nogueira";
        echo "$nom \"Minotauro\" $snom";

        $curso = "PHP";
        $ano = date('Y');
        echo <<< FRASE
            <br> Estou estudando
            $curso em $ano
        FRASE;
    ?>

</body>
</html>