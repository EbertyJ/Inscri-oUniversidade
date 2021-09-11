<?php
include("teste.php");
$id = $_POST["id"];
$sql = "SELECT * from registros WHERE id Like '%$id%'";

$query = mysqli_query($conexao, $sql);

while($linha = mysqli_fetch_assoc($query)){

    $nomeresponsavel = $linha["nomeresponsavel"];
    $cpf = $linha["cpf"];
    $numero = $linha["numero"];
    $email = $linha["email"];
    $id =  $linha["id"];
    $nomealuno = $linha["nomealuno"];
    $serie = $linha["serie"];
    $cidade = $linha["cidade"];
    $novato = $linha["novato"];
}
if($novato == 'true'){
    $novato = 'novato';
}else{
    $novato = 'veterano';
}
 echo "<div class='registrogrande'>
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
                  <br>
                    <p class='p-nome-aluno'>
                       <strong>NOME DO ALUNO:</strong>
                       <p class='nome-aluno'>$nomealuno</p>
                    </p>
                    <br>
                  <p class='p-serie'>
                      <strong>SÉRIE: </strong>
                       <p class='serie'>$serie</p>
                  </p>
                  <br>
                  <p class='p-cidade'>
                      <strong>CIDADE:</strong>
                       <p class='cidade'>$cidade</p>
                  </p>
                  <a class='waves-effect waves-light btn red ' ><spam class='estado-aluno'>$novato</spam></a>
                  <button class='button-salvar' >
                  <a class='salvarregistro'  ><spam class='estado-aluno'>Salvar</spam></a>
                  </button>
                  <p class='id1' name='id'>$id</p>
                  
                <div class='row'>
                    <form class='col s12'>
                    <div class='row'>
                        <div class='input-field col s12'>
                        <textarea id='textarea1' class='materialize-textarea'></textarea>
                        <label for='textarea1'>Retorno</label>
                        </div>
                    </div>
                    </form>
                </div>"
}
?>