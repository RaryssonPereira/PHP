<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Removendo o Produto</title>
    <link rel="stylesheet" href="style_estoque.css">
</head>

<body>
    <?php
    // Conexão com o banco de dados (substitua os valores conforme sua configuração)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "estoque_loja";

    // Cria a conexão
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verifica se houve erro na conexão
    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    // Verifica se o formulário foi submetido
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Verifica se o campo de código foi preenchido
        if (!empty($_POST["codigo"])) {
            $codigo = $_POST["codigo"];

            // Consulta SQL para verificar se o produto existe no banco de dados
            $sql = "SELECT * FROM produtos WHERE codigo = $codigo";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Remove o produto do banco de dados
                $sql_delete = "DELETE FROM produtos WHERE codigo = $codigo";

                if ($conn->query($sql_delete) === TRUE) {
                    echo "<h1>Produto Retirado com Sucesso.</h1>";
                } else {
                    echo "<h1>Erro ao Retirar o Produto: </h1>" . $conn->error;
                }
            } else {
                echo "<h1>Produto Não Encontrado.</h1>";
            }
        } else {
            echo "<h1>Por favor, Preencha o Campo de Código.</h1>";
        }
    }

    // Fecha a conexão com o banco de dados
    $conn->close();
    ?>
</body>

</html>