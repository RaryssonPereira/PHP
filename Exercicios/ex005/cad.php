<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php 
            //var_dump($_REQUEST); Uma junção das super globais $_GET, $_POST e $_COOKIES
            $nome = $_GET["nome"] ?? "nameless";
            $sobrenome = $_GET["sobrenome"] ?? "surnameless";
            echo "<p> É um prazer te conhecer, $nome $sobrenome! Este é o meu site!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>