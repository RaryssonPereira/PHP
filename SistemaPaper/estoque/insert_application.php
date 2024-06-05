<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionando o Produto</title>
    <link rel="stylesheet" href="style_estoque.css">
</head>

<body>
    <?php
    /* Conexão com BD MySQL (usuário 'root', senha '' e banco 'estoque_loja') */
    $link = mysqli_connect("localhost", "root", "", "estoque_loja");

    // Valida se conexão com banco de dados
    if ($link === false) {
        die("<p>ERRO: Não foi Possível Conectar ao Banco de Dados. </p>" . mysqli_connect_error());
    }

    // variáveis criadas para obter valores dos parâmetros do formulário
    $codigo = mysqli_real_escape_string($link, $_REQUEST['codigo']);
    $nome = mysqli_real_escape_string($link, $_REQUEST['nome']);
    $descricao = mysqli_real_escape_string($link, $_REQUEST['descricao']);
    $preco = mysqli_real_escape_string($link, $_REQUEST['preco']);

    // Verifica se nenhum dos campos está vazio ou nulo
    if (!empty($codigo) && !empty($nome) && !empty($descricao) && !empty($preco)) {
        // Verifica se o código do produto é diferente de zero
        if ($codigo != 0) {
            // Realiza inserção do novo registro na tabela do banco de dados
            $sql = "INSERT INTO PRODUTOS (CODIGO, NOME, DESCRICAO, PRECO) VALUES ('$codigo', '$nome', '$descricao', '$preco')";
            if (mysqli_query($link, $sql)) {
                echo "<h1>Produto foi Inserido com Sucesso!</h1>"; // aqui poderia ser incluído um código para redirect
            } else {
                echo "<h1>Erro (Não foi possível Inserir o Produto na Tabela) $sql. </h1>" . mysqli_error($link);
            }
        } else {
            echo "<h1>Erro: O código do Produto não pode ser Zero.</h1>";
        }
    } else {
        echo "<h1>Erro: Nenhum dos Campos pode estar Vazio.</h1>";
    }

    // Close connection
    mysqli_close($link);
    ?>
</body>

</html>