<?php
$sql = mysqli_query($conecta, "select * from anon where viz = 0;");
while($rsql=mysqli_fetch_array($sql)){
  echo "
  <div class=\"panel panel-default\">
    <div class=\"panel-heading\">
      Novo chat anonimo
      <div style=\"float: right;\">
        <form action=\"\" method=\"post\">
          <input type=\"hidden\" name=\"id\" value=\"" . $rsql['ticket'] . "\">
          <input type=\"hidden\" name=\"viz\" value=\"1\">
          <input type=\"submit\" class=\"btn btn-default\" name=\"anon\" value=\"Apagar\">
        </form>
      </div>
      <div style=\"clear: both;\"></div>
    </div>
    <div class=\"panel-body\">



            ";
                  $sql1 = mysqli_query($conecta, "select * from anon where ticket = '$rsql[ticket]';");
                      while($rsql1 = mysqli_fetch_array($sql1)){
                        $hora = retorna_horario($rsql1['data']);
                        echo "
                                <h4>
                                  Anonimato:
                                  <div style=\"float: right;\">
                                    " . $hora . "
                                  </div>
                                </h4> 
                              " . $rsql1['msg'] . "


                        ";
                      }

                  
              echo "
              <br><br>
        <form action=\"\" method=\"post\">
          <input type=\"hidden\" name=\"id\" value=\"" . $rsql['id'] . "\">
          <div class=\"form-group\">
            <label>Resposta: </label>
            <textarea type=\"text\" class=\"form-control\" name=\"msg\"></textarea>
          </div>
          <input type=\"submit\" class=\"btn btn-default\" name=\"anon_res\" value=\"Enviar\">
        </form>
    </div>
  </div>
  ";
}
?>