<?php




$nome = $_POST["nome"] ?? "";

$email = $_POST["email"] ?? "";

$telefone = $_POST["telefone"] ?? "";

$numero = $_POST["numero"] ?? "";

$bairro = $_POST["bairro"] ?? "";

$complemtento = $_POST["complemtento"] ?? "";

$cidade = $_POST["cidade"] ?? "";

$estado = $_POST["estado"] ?? "";

$data = $_POST["data"] ?? "";

$cpf = $_POST["cpf"] ?? "";

$rg = $_POST["rg"] ?? "";

$whatsapp = $_POST["whatsapp"] ?? "";

$fumo = $_POST["fumo"] ?? "";

$bebida = $_POST["bebida"] ?? "";

echo "Nome: $nome <br>";

echo "E-mail: $email <br>";

echo "Telefone: $telefone <br>";

echo "Número: $numero <br>";

echo "Bairro: $bairro <br>";

echo "Complemento: $complemtento <br>";

echo "Cidade: $cidade <br>";

echo "Estado: $estado <br>";

echo "Data de Nascimento: $data <br>";

echo "CPF: $cpf <br>";

echo "RG: $rg <br>";

echo "Whatsapp: $whatsapp <br>";

echo "Fumo: $fumo<br>";

echo "Bebida: $bebida <br>";
//Rua, numero, bairro, complemento, cidade, estado,

//   data de nascimento,

// cpf, rg, whatsapp, fuma, bebida(álcool)/
?>