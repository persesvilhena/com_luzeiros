<?php
$sql = mysqli_query($conecta, "select * from fralda where viz = 0;");
while($rsql=mysqli_fetch_array($sql)){
  echo "
    <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      Novo pedido de dona fraldinha
      <div style=\"float: right;\">
        <form action=\"\" method=\"post\">
          <input type=\"hidden\" name=\"id\" value=\"" . $rsql['id'] . "\">
          <input type=\"hidden\" name=\"viz\" value=\"1\">
          <input type=\"submit\" class=\"btn btn-default\" name=\"fralda\" value=\"Apagar\">
        </form>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"panel-body\">
      <b>Nome: </b>" . $rsql['nome'] . "<br>
      <b>Endereço: </b>" . $rsql['endereco'] . "<br>
      <b>Quantidade de bebês na familia: </b>" . $rsql['bebes'] . "<br>
      <b>Idade deles: </b>" . $rsql['idade'] . "<br>
      <b>Tamanho da fralda: </b>" . $rsql['fralda'] . "<br>
      <b>Alergia a fralda: </b>" . $rsql['alergia'] . "<br>
      <b>Telefone: </b>" . $rsql['telefone'] . "<br>
      <b>Email: </b>" . $rsql['email'] . "
    </div>
  </div>
  ";
}
?>