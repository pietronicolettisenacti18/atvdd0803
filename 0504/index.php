<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Clientes</title>
</head>

<body>
    <h1>
        Cadastro de Clientes
    </h1>
    <form method="post" action="salvar.php">

        Nome:<input name="nome" maxlength="50"><br>
        Telefone:<input name="telefone" maxlength="15" required><br>
        Cidade:<input name="cidade" maxlength="40"><br>
        Estado:<select name="estado">
            <option value=""> </option>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
          
        </select><br>
        E-mail:<input name="email" maxlength="30"><br>
        <button type="submit">Salvar cliente</button>
    </form> 

    <?php
    $arquivo = fopen("clientes.csv", "r");

   // $conteudo = fgets($arquivo, filesize("clientes.csv"));

   // echo $conteudo ;
   while(! feof($arquivo)){
    $linha =fgets($arquivo);


    $registro = explode(".", $linha);

    if ($registro =explode(",", $linha))
    echo $registro[0] . " - ";
    echo $registro[1] . " - ";
    echo $registro[2] . " - ";
    echo $registro[3] . " - ";
    echo $registro[4] . "<br>";
   
   }
    fclose($arquivo);
    ?>
    




    <script>
        <?php
        $msg = $_GET["mensagem"]?? "";
        if($msg == "salvo"){
            echo "alert('Cliente salvo com sucesso')";
        }
        ?>
    </script>


</body>

</html>