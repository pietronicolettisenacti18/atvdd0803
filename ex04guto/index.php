<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form> 
        Idade:<input name="idade">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>

<?php



$idade='1';
while($idade <=1){
  echo $idade . "ainda é um menor de idade";
  $idade = $idade + 17;
   echo $idade . "já é de maior";
}


?>