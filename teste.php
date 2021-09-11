<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$bd = "escola";

$conexao = mysqli_connect($servidor, $usuario, $senha)
or die ("não foi possivel estabeler conexão"); 

$bd = mysqli_select_db($conexao,$bd);
?>