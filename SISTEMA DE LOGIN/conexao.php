<?php

$server ="localhost";
$user = "root";
$senha = "";
$bd = "usuarios";

$con = mysqli_connect($server , $user , $senha , $bd);

if (!$con) {

    echo"Erro!".mysqli_connect_error();

}
?>