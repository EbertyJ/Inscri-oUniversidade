<?php
include("teste.php");

    $nome = $_POST["nome1"];
    $cpf = $_POST["cpf"];
    $numero = $_POST["numero"];
    $email = $_POST["email"];
   /* AQUI VC TERA OS DADOS DO RESPONSAVEL'*/
   $sql = "INSERT INTO registros (nomeresponsavel, cpf, numero, email)
VALUES ('$nomeresponsavel', '$cpf', '$numero', '$email')";
$query = mysqli_query($conexao,$sql);


?>