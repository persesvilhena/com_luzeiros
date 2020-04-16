<?php

if(isset($_POST["ore"])) {
	$oracao = recebe($_POST["oracao"]);
	$sql = mysqli_query($conecta, "insert into ore(oracao) values($oracao);");
}

if(isset($_POST["pedido_oracao"])) { 
	if(!empty($_POST["msg"])) {
		$msg = recebe($_POST["msg"]);
		$insert = mysqli_query($conecta, "insert into oracao (msg) values ('$msg');") or die(mysqli_error());
		if($insert) {
			sucesso("Seu pedido de oração foi enviado!");
		}else{
			problema("Houve um problema!");
		}
	}
	else {
		alerta("Insira seu pedido!");
	}		
}




if(isset($_POST["dona_fraldinha"])) { 
	if(!empty($_POST["nome"]) && !empty($_POST["endereco"]) && !empty($_POST["bebes"]) && !empty($_POST["idade"]) && !empty($_POST["fralda"])) {
		$nome = recebe($_POST["nome"]);
		$endereco = recebe($_POST["endereco"]);
		$bebes = recebe($_POST["bebes"]);
		$idade = recebe($_POST["idade"]);
		$fralda = recebe($_POST["fralda"]);
		$telefone = recebe($_POST["telefone"]);
		$email = recebe($_POST["email"]);
		$alergia = recebe($_POST["alergia"]);
		$insert = mysqli_query($conecta, "insert into fralda (nome, endereco, bebes, idade, fralda, telefone, email, alergia) 
			values ('$nome', '$endereco', '$bebes', '$idade', '$fralda', '$telefone', '$email', '$alergia');") or die(mysqli_error());
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



if(isset($_POST["ze_leitinho"])) { 
	if(!empty($_POST["nome"]) && !empty($_POST["endereco"]) && !empty($_POST["membros"]) && !empty($_POST["idade"])) {
		$nome = recebe($_POST["nome"]);
		$endereco = recebe($_POST["endereco"]);
		$membros = recebe($_POST["membros"]);
		$idade = recebe($_POST["idade"]);
		$intolerante = recebe($_POST["intolerante"]);
		$telefone = recebe($_POST["telefone"]);
		$email = recebe($_POST["email"]);
		$insert = mysqli_query($conecta, "insert into leite (nome, endereco, membros, idade, intolerante, telefone, email) values ('$nome', '$endereco', '$membros', '$idade', '$intolerante', '$telefone', '$email');") or die(mysqli_error());
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