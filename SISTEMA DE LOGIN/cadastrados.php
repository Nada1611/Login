<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualização</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
<nav class="menu">
        <ul>

            <li><a href="cadastro.html" target="_blank">Cadastrar:</a></li>
            <li><a href="index.html" target="_blank">Home:</a></li>

        </ul>
    </nav>
    <br>
    <br>
    <br>
 
    <legend class="visu">USUÁRIOS CADASTRADOS!</legend>
<?php

include 'conexao.php';

$sql = "SELECT * FROM usuario";
$res = mysqli_query($con, $sql);
$linhas = mysqli_num_rows($res);


for ($i = 0; $i < $linhas; $i++){
    $user = mysqli_fetch_array($res);

    echo $user['nome'] . " - ";

    echo $user['senha'] . " - ";

    echo $user['email'] . " - ";

    echo $user['cpf'] . " - ";

}

?>

</body>
</html>