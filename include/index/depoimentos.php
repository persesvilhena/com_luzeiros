<div class="row">
  <div class="col-md-12">
    <div class="panel panel-default">
      <div class="panel-heading">
      	Mural de depoimentos
      	<div style="float: right;">
      		<a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-default" onclick="CarregaJanela('depoimento');">Deixe aqui seu depoimento</a>
      	</div>
      	<div style="clear: both;"></div>
      </div>
      <div class="panel-body">
      	<?php
      	$sql = mysqli_query($conecta, "SELECT * FROM `com` ORDER BY `com`.`id` DESC LIMIT 60");
      	while($rsql = mysqli_fetch_array($sql)){
      		if($rsql['nome'] == null){ $nome = "Anônimo"; }else{ $nome = $rsql['nome']; }
      		$hora = retorna_horario($rsql['data']);
      		echo "
      			<div class=\"media\">
		        	<div class=\"media-body\"> 
		        			<h4 class=\"media-heading\">
		        				" . $nome . " diz:
		        				<div style=\"float: right;\">
		        					" . $hora . "
		        				</div>
		        			</h4> 
		        		" . $rsql['msg'] . "
		        	</div> 
		        </div>

      		";
      	}

      	?>
      </div>
    </div>
  </div>
</div>