<?php
include("teste.php");

$sql = "SELECT * from registros WHERE novato Like '%true%'";

$query = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($query)){

$id =  $linha["id"];
$nomealuno = $linha["nomealuno"];
$serie = $linha["serie"];
$cidade = $linha["cidade"];
$novato = $linha["novato"];
}
if($novato == 'true'){
    $novato = 'novato';
}
echo " <div class='registro'>
                  
<p class='p-nome'>
   <strong>NOME:</strong>
   <p class='nome'>$nomealuno</p>
</p>
<br>
<p class='p-cpf'>
  <strong>SÉRIE:</strong>
  <p class='cpf'>$serie</p>
</p>
<br>
<p class='p-email'>
  <strong>CIDADE</strong>
   <p class='email'>$cidade</p>
</p>
<br>
<p class='p-numero'>
  <strong>CATEGORIA: </strong>
   <p class='numero'>$novato</p>
</p>
<button class='button-ver' ><a class='verregistro'>VER REGISTRO</a>
</button>
<a class='waves-effect waves-light btn red darken-4'><i class='material-icons right'>close</i>Não visto</a>
<p class='id1' nome='id'>$id</p>
</div>"
?>