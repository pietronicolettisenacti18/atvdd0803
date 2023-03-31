<?php
 $nome = $_POST["nome"];
 $cidade = $_POST["cidade"];
 $sobrenome = $_POST["sobrenome"];
 $data = $_POST["data"];
 $cpf = $_POST["cpf"];
 $rg = $_POST["rg"];
 $estado = $_POST["estado"];

 echo "$nome - $sobrenome - $data - $cidade- $cpf - $rg -$estado";

 $arquivo = fopen("clientes.txt","w");


 fwrite($arquivo,$nome . "\t");
 
 fwrite($arquivo,$sobrenome . "\t");

 fwrite($arquivo,$data . "\t");

 fwrite($arquivo,$cidade . "\t");

 fwrite($arquivo,$cpf . "\t");

 fwrite($arquivo,$rg . "\t");

 fwrite($arquivo,$estado . "\t");
 
 fclose($arquivo);
 
 //header("location:salvar.php");
 ?>