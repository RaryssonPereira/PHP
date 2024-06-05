<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Lista de Hábitos</title>
</head>

<body>
    <div class="center">
        <h1> Lista de Hábitos </h1>
        <p> Cadastre aqui os hábitos que você tem que vencer para melhorar sua vida!</p>

        <?php
        // Obtém a lista de hábitos do banco de dados MySQL
        $servidor = "localhost";
        $usuario = "root";
        $senha = "";
        $bancodedados = "listadehabito";

        // Cria uma conexão com o banco de dados
        $conexao = new mysqli($servidor, $usuario, $senha, $bancodedados);

        // Verifica a conexão
        if ($conexao->connect_error) {
            die("Falha na conexão: " . $conexao->connect_error);
        }

        // Executa a query da variável $sql
        $sql = " SELECT id " .
               "      , nome " .
               "  FROM habito " .
               " WHERE status = 'A'";
        $resultado = $conexao->query($sql);

        // Verifica se a query retornou registros
        if ($resultado->num_rows > 0) {
        ?>
            <br />
            <table class="center">
                <tbody>
                    <?
                    // Looping pelos registros retornados
                    while ($registro = $resultado->fetch_assoc()) {
                    ?>

                        <tr>
                            <td><? echo $registro["nome"]; ?></td>
                            <td><a href="vencerhabito.php?id=<? echo $registro["id"]; ?>"> Vencer </a></td>
                            <td><a href="desistirhabito.php?id=<? echo $registro["id"]; ?>"> Desistir </a></td>
                        </tr>
                    <?
                    } // Fim do Looping
                    ?>

                </tbody>
            </table>
            <p> Continue mudando sua vida de merda!</p>
            <p> Cadastre mais hábitos! </p>
        <?
        } else {
        ?>
            <p>Você não possui hábitos cadastrados!</p>
            <p>Comece já a mudar sua vida de merda!</p>
        <?

        } // Fim do If

        // Fecha a conexão com o MySQL
        $conexao->close();

        ?>

        <a href="novohabito.php"> Cadastrar Hábito </a>
    </div>
</body>

</html>