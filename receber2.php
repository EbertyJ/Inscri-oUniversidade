<?php
include("teste.php");
//include("receber.php");
 $nome2 = $_POST["nomealuno"];
 $serie  = $_POST["serie"];
 $cidade = $_POST["cidade"];
if(isset( $_POST["novato"])){

 $novato = "true";
}else{
    $novato = "false";
}
header('Location: home2.html');

$sql = "INSERT INTO registros (nomealuno, serie, cidade, novato)
VALUES  ('$nome2', '$serie', '$cidade', '$novato')";

$query = mysqli_query($conexao,$sql);



header('Location: home2.html');
 /* AQUI SERA GUARDADO OS DADOS DO ALUNO, COMO EU NÃO CONSEGUI FAZER A REQUISIÇÃO ASSINCRONA COM O SEGUNDO FORM EU VOU FAZER UMA 
 PAGINA BONITA PRA DAR A CONFIRMAÇÃO DO CADASTRO */

?>