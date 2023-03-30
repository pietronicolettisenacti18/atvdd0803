<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>





<?php

#### ARRAY
// $fruta01 = '🍓';
// $fruta02 = '🍇';
// $fruta03 = '🥥';
 
// $frutas = array();
// $frutas[0] = "🍓";
// $frutas[1] = "🍇";
// $frutas[2] = "🥥";
 
//$frutas = ["🍓", "🍇","🥥"];
//$frutas[3] = "🍍";
//array_push($frutas, "🍒");
 
// echo gettype($frutas);
////echo count($frutas);
 
///echo "<h1>salada de frutas</h1>";
 
// $qtd = count($frutas);
 
// $contador = 0;
 
// while($contador < $qtd){
//     // echo "$contador <br>";
//     echo $frutas[$contador];
//     $contador++;
// }

//$anml01 = '😼';
//$anml02 = '🐶';/
//$anml03 = '🐴';
//$anml04 = '🐤';
//$anml05 = '🐷';
//$anml06 = '🐨';
//////$anml07 = '🐨';
 
 //$anml = array();
 ////$anml[0] = "🍓";
 ////$frutas[1] = "🍇";
///$frutas[2] = "🥥";$produtos 
  
//$produtos = ['👗','👖','🧢','👔']
//echo $produtos [0]
//echo $produtos [3]
//echo count($produtos)
//echo "<br>";
//$i = 0;
//while ($i< 4){
    //echo $produtos[$i];
  //  $i++; // $i = $i = 1
//}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1> Cadastro de Clientes</h1>
<form action="cadastro-cliente.php" method="post">
Nome:<input name="nome"><br>
Email:<input name="email"><br>
Telefone:<input name="telefone"><br> 
Rua:<input name="rua"><br>
Número:<input name="numero"><br>
Bairro:<input name="bairro"><br>
Complemento:<input name="complemento"><br>
Cidade:<input name="cidade"><br>
<select name="Estado">
<option value="SP">SP<br>
<option value="MG">MG<br>
<option value="RJ">RJ<br>
</select><br>
Data de Nascimento:<input name="data"><br>
CPF:<input name="cpf"><br>
RG:<input name="rg"><br>
Whatsapp:<input name="whatsapp"><br>
Fumo:<input name="fumo"><br>
Bebida:<input name="bebida"><br>
<button type="submit">Enviar</button>
</form>
 


</body>

</html>