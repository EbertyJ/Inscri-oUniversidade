<?php
/* ESSA PAGINA DEVOLVE O RESTANTE DO FORMULARIO PRA SER COLOCADO NA DIV 
OS DADOS SÃO GUARDADOS EM RECEBER.PHP

*/

echo"
<form action='receber2.php' method='POST'>
<div class='row'>
<p id='titulo'>DADOS DO ALUNO</p>
<div class='input-field col s6'>
<input id='name' type='text' class='validate' name='nomealuno'>
<label for='first_name'>Nome</label>
</div>
<div class='input-field col s6'>
  <input id='modalidade' type='text' class='validate' name='modalidade'> 
  <label for='modalidade'>Modalidade</label>
</div>
<div class='input-field col s6'>
  <input id='serie' type='number' class='validate' max='3' name='serie'>
  <label for='serie'>Serie</label>
</div>
<div class='input-field col s6'>
  <input id='cidade' type='text' class='validate' name='cidade'>
  <label for='cidade'>Cidade</label>
</div>
<p>
      <label>
        <input type='checkbox' name='novato'/>
        <span>Novato</span>
      </label>
    </p><br>
<button class='btn waves-effect waves-light' type='submit' name='action' id='enviar'>Concluir
</button> 
</div>
</form>";

//QUANDO ESSES DADOS FOREM COLOCADOS NA DIV A TAG FORM APONTARA PARA RECEBER2.PHP, OS DADOS DO ALUNO IRÃO PRA LA 
?>