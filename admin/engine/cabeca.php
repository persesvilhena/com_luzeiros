<?php


if(isset($_POST["oracao"])) { 
	$viz = recebe($_POST["viz"]);
	$id_o = recebe($_POST["id"]);
	$insert = mysqli_query($conecta, "UPDATE `oracao` SET `viz` = '1' WHERE `oracao`.`id` = '$id_o';");
	if($insert) {
		sucesso("O pedido de oração foi visualizado!");
	}else{
		problema("Houve um problema!");
	}
}



if(isset($_POST["fralda"])) { 
	$viz = recebe($_POST["viz"]);
	$id_o = recebe($_POST["id"]);
	$insert = mysqli_query($conecta, "UPDATE `fralda` SET `viz` = '1' WHERE `fralda`.`id` = '$id_o';");
	if($insert) {
		sucesso("O pedido foi arquivado!");
	}else{
		problema("Houve um problema!");
	}
}



if(isset($_POST["leite"])) { 
	$viz = recebe($_POST["viz"]);
	$id_o = recebe($_POST["id"]);
	$insert = mysqli_query($conecta, "UPDATE `leite` SET `viz` = '1' WHERE `leite`.`id` = '$id_o';");
	if($insert) {
		sucesso("O pedido foi arquivado!");
	}else{
		problema("Houve um problema!");
	}
}



if(isset($_POST["anon"])) { 
	$viz = recebe($_POST["viz"]);
	$id_o = recebe($_POST["id"]);
	$insert = mysqli_query($conecta, "UPDATE `anon` SET `viz` = '1' WHERE `anon`.`ticket` = '$id_o';");
	if($insert) {
		sucesso("O chat foi arquivado!");
	}else{
		problema("Houve um problema!");
	}
}


if(isset($_POST["anon_res"])) { 
	if(!empty($_POST["msg"])) {
		$id_o = recebe($_POST["id"]);
		$msg = recebe($_POST["msg"]);
		$insert = mysqli_query($conecta, "UPDATE `anon` SET `resposta` = '$msg', `viz` = '1' WHERE `anon`.`id` = $id_o;") or die(mysqli_error());
		if($insert) {
			sucesso("Chat finalizado!");
		}else{
			problema("Houve um problema!");
		}
	}
	else {
		alerta("Por favor, preencha os campos!");
	}		
}



if(isset($_POST["ze_leitinho"])) { 
	if(!empty($_POST["nome"]) && !empty($_POST["endereco"]) && !empty($_POST["membros"]) && !empty($_POST["idade"])) {
		$nome = recebe($_POST["nome"]);
		$endereco = recebe($_POST["endereco"]);
		$membros = recebe($_POST["membros"]);
		$idade = recebe($_POST["idade"]);
		$intolerante = recebe($_POST["intolerante"]);
		$telefone = recebe($_POST["telefone"]);
		$insert = mysqli_query($conecta, "insert into leite (nome, endereco, membros, idade, intolerante, telefone) values ('$nome', '$endereco', '$membros', '$idade', '$intolerante', '$telefone');") or die(mysqli_error());
		if($insert) {
			sucesso("Entraremos em contato para agendar uma visita!");
		}else{
			problema("Houve um problema!");
		}
	}
	else {
		alerta("Por favor, preencha os campos!");
	}		
}




if(isset($_POST["depoimento"])) { 
	if(!empty($_POST["msg"])) {
		$nome = recebe($_POST["nome"]);
		$msg = recebe($_POST["msg"]);
		$insert = mysqli_query($conecta, "insert into com (nome, msg, data) values ('$nome', '$msg', '$config_horario');") or die(mysqli_error());
		if($insert) {
			sucesso("Obrigado por compartilhar seu depoimento!");
		}else{
			problema("Houve um problema!");
		}
	}
	else {
		alerta("Deixe seu depoimento!");
	}		
}




if(isset($_POST["anonimato"])) { 
	if(!empty($_POST["msg"])) {
		$msg = recebe($_POST["msg"]);
		$val = 0;
		while($val != 1){
			$ticket = rand(1,99999);
			$sql = mysqli_query($conecta, "select * from anon where ticket = '$ticket';");
			if(mysqli_num_rows($sql) == 0) {
				$val = 1;
			}else{
				$val = 0;
			}
		}
		$insert = mysqli_query($conecta, "insert into anon (ticket, msg, data) values ('$ticket', '$msg', '$config_horario');") or die(mysqli_error());
		if($insert) {
			sucesso("Obrigado por entrar em contato! Responderemos assim que possível!");
			alerta("<b>Atenção!</b> Guarde seu ticket para vizualizar a resposta, seu ticket é: <h3>" . $ticket . "</h3>");
		}else{
			problema("Houve um problema!");
		}
	}
	else {
		alerta("Deixe sua mensagem!");
	}		
}

?>