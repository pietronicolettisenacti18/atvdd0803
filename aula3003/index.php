<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Cadastro de Clientes</h1>
    <form method="post" action="salvar.php">
        Nome:<input name="nome" required><br><br>
        Sobrenome:<input name="sobrenome" required><br><br>
        Data de Nascimento :<input name="data" type="date" required><br><br>
        Cidade:<input name="cidade" required><br><br>
        CPF:<input name="cpf" required><br><br>
        RG:<input name="rg" required><br><br>
        estado:<input name="estado" required><br><br>

        <button type="submit">Salvar</button>
    </form>
</body>

</html>