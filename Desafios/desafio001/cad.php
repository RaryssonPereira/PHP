<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Resultado Final</h1>

        <p>
            <?php
            $N = $_GET["N"] ?? 0;
            echo "O número escolhido foi: <strong>$N</strong>";
            echo "<p> O seu <em>antecessor</em> é: " . ($N - 1);
            echo "<p> O seu <em>sucessor</em> é : " . ($N + 1);
            ?>
        </p>

        <button onclick="javascript:history.go(-1)"> &#x2B05; Voltar</button>
    </main>
</body>

</html>