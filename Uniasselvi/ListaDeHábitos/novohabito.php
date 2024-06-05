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
        <h1>Novo Hábito</h1>

        <!-- Formulário para cadastro de pessoas -->
        <form id="formulario" action="inserthabito.php">
            <p><label>Nome: <input type="text" name="nome" id="nome" autofocus /> </label></p>
            <p><input type="submit" value="Criar"> </p>
        </form>
    </div>
    <script type="text/javascript">
        // Declara uma função para validar o formulário
        var validaForm = function() {
            var nomeHabito = document.getElementById("nome").value;
            if ("" == nomeHabito) {
                alert("É necessário informar o nome do Hábito");
                return false;
            }
        }

        // Aqui declaramos que esta função ocorre sempre no submit do formulário 
        document.getElementById("formulario").onsubmit = validaForm;
    </script>
</body>

</html>