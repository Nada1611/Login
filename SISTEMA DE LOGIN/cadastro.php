<?php

include("conexao.php");

// SQL //
$nome = $_POST["nome"];
$email = $_POST["email"];
$senha = $_POST["senha"];
$cpf = $_POST["cpf"];

if (!$con) {

    die("Connection failed:");
}
    else
    echo "Bem Vindo , Você está Conectado ao Banco De Dados!!"; 

$sql = "INSERT INTO usuario (nome,email,senha,cpf) values ('$nome' , '$email' , '$senha' , '$cpf')";

$res = mysqli_query($con , $sql);

mysqli_close($con);

?>