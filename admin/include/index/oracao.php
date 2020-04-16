<?php
$sql = mysqli_query($conecta, "select * from oracao where viz = 0;");
while($rsql=mysqli_fetch_array($sql)){
  echo "
    <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      Novo pedido de oração
      <div style=\"float: right;\">
        <form action=\"\" method=\"post\">
          <input type=\"hidden\" name=\"id\" value=\"" . $rsql['id'] . "\">
          <input type=\"hidden\" name=\"viz\" value=\"1\">
          <input type=\"submit\" class=\"btn btn-default\" name=\"oracao\" value=\"Visualizado\">
        </form>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"panel-body\">
      " . $rsql['msg'] . "
    </div>
  </div>
  ";
}
?>