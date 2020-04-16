<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
        Atendimento em anonimato
      </div>
      <div class="panel-body">
        <?php
        if(isset($_POST["anon"])) { 
          if(!empty($_POST["ticket"])) {
            $ticket = recebe($_POST["ticket"]);
            $sql = mysqli_query($conecta, "select * from anon where ticket = '$ticket';");
                while($rsql = mysqli_fetch_array($sql)){
                  $hora = retorna_horario($rsql['data']);
                  echo "
                    <div class=\"media\">
                      <div class=\"media-body\"> 
                        " . $rsql['resposta'] . "
                        <br><br>
                          <h4 class=\"media-heading\">
                            Anonimato:
                            <div style=\"float: right;\">
                              " . $hora . "
                            </div>
                          </h4> 
                        " . $rsql['msg'] . "
                      </div> 
                    </div>

                  ";
                }

             
          }
          else {
            alerta("Este ticket não está registrado em nosso sistema! Por favor verifique seu ticket!");
          }
        }

        ?>
      </div>
    </div>
  </div>
</div>