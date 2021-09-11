<?php
include("teste.php");

$sql = "SELECT * from registros";

$query = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($query)){

$id =  $linha["id"];
$nomeresponsavel = $linha["nomeresponsavel"];
$cpf = $linha["cpf"];
$numero = $linha["numero"];
$email = $linha["email"];

echo " <div class='registro'>
                  
<p class='p-nome'>
   <strong>NOME:</strong>
   <p class='nome'>$nomeresponsavel</p>
</p>
<br>
<p class='p-cpf'>
  <strong>CPF:</strong>
  <p class='cpf'>$cpf</p>
</p>
<br>
<p class='p-email'>
  <strong>EMAIL: </strong>
   <p class='email'>$email</p>
</p>
<br>
<p class='p-numero'>
  <strong>NUMERO:</strong>
   <p class='numero'>$numero</p>
</p>
<button class='button-ver' ><a class='verregistro'>VER REGISTRO</a>
</button>
<a class='waves-effect waves-light btn red darken-4'><i class='material-icons right'>close</i>Não visto</a>
<p class='id1' name='id'>$id</p>
</div>";
}
?>