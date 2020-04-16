<?php
include "../conexao.php";
function recebe($valor){
	if($valor == NULL){
		$valor = "";
	}else{
		$valor = addslashes($valor);
	}
	return $valor;
}

$ua = recebe($_GET['ua']);








////////////////////////////////////////////////////////////
/////////////////////ze leitinho
/////////////////////////////////////////////////////////////
if($ua == "ze"){
?>
<form method="post" action="">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Projeto Zé Leitinho</h4>
	</div>
	<div class="modal-body">
		<h4 class="text-danger">Atenção! O projeto Zé Leitinho, por enquanto, só atende a cidade de Muzambinho-MG, ainda estamos em busca de outras parcerias na região.</h4>
		<a class="btn btn-default" href="index.php?servicos">Saiba mais sobre o projeto</a>
		<p>
		Preencha a ficha de cadastramento inicial abaixo, a partir dela entraremos em contato e agendaremos uma visita para realizarmos o cadastro definitivo no nosso banco de ajuda láctea.
		</p>
		<div class="form-group">
			<label>Nome do responsável pela(s) criança(s): </label>
			<input type="text" class="form-control" placeholder="Nome do responsável" name="nome">
		</div>
		<div class="form-group">
			<label>Endereço: </label>
			<input type="text" class="form-control" placeholder="Endereço" name="endereco">
		</div>
		<div class="form-group">
			<label>Telefone para contato: </label>
			<input type="text" class="form-control" placeholder="Telefone" name="telefone">
		</div>
		<div class="form-group">
			<label>Email (opcional): </label>
			<input type="text" class="form-control" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label>Quantas crianças na família? </label>
			<input type="text" class="form-control" placeholder="Quantas crianças na família?" name="membros">
		</div>
		<div class="form-group">
			<label>Qual é a idade dessas crianças? </label>
			<input type="text" class="form-control" placeholder="Qual a idade de cada um?" name="idade">
		</div>
		<div class="form-group">
			<label>Há a necessidade de algum tipo de leite especial? (soja, sem lactose, em pó, etc.) Descreva.</label>
			<textarea type="text" class="form-control" name="intolerante"></textarea>
		</div>
	</div>
	<div style="clear: both;"></div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
		<button class="btn btn-primary" type="submit" name="ze_leitinho">Enviar</button>
	</div>
</form>

<?php
}







////////////////////////////////////////////////////////////
/////////////////////fraldinha
/////////////////////////////////////////////////////////////
if($ua == "fralda"){
?>
<form method="post" action="">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Projeto Dona Fraldinha</h4>
	</div>
	<div class="modal-body">
		<h4 class="text-danger">Atenção! O projeto Dona Fraldinha, por enquanto, só atende a cidade de Muzambinho-MG, ainda estamos em busca de outras parcerias na região.</h4>
		<a class="btn btn-default" href="index.php?servicos">Saiba mais sobre o projeto</a>
		<p>
		Preencha a ficha de cadastramento inicial abaixo, a partir dela entraremos em contato e agendaremos uma visita para realizarmos o cadastro definitivo no nosso banco de ajuda.
		</p>
		<div class="form-group">
			<label>Nome do responsável pela(s) criança(s): </label>
			<input type="text" class="form-control" placeholder="Nome do responsável" name="nome">
		</div>
		<div class="form-group">
			<label>Endereço: </label>
			<input type="text" class="form-control" placeholder="Endereço" name="endereco">
		</div>
		<div class="form-group">
			<label>Telefone para contato: </label>
			<input type="text" class="form-control" placeholder="Telefone" name="telefone">
		</div>
		<div class="form-group">
			<label>Email (opcional): </label>
			<input type="text" class="form-control" placeholder="Email" name="email">
		</div>
		<div class="form-group">
			<label>Quantos bebês na família? (residentes na mesma casa)</label>
			<input type="text" class="form-control" placeholder="Quantos bebês na família?" name="bebes">
		</div>
		<div class="form-group">
			<label>Qual a idade de cada um? </label>
			<input type="text" class="form-control" placeholder="Qual a idade de cada um?" name="idade">
		</div>
		<div class="form-group">
			<label>Qual tamanho de fraldas? </label>
			<input type="text" class="form-control" placeholder="Qual tamanho de fraldas?" name="fralda">
		</div>
		<div class="form-group">
			<label>Existe alguma alergia a algum tipo de fralda? Se sim, qual? </label>
			<input type="text" class="form-control" placeholder="Existe alguma alergia a algum tipo de fralda? Se sim, qual?" name="alergia">
		</div>
	</div>
	<div style="clear: both;"></div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
		<button class="btn btn-primary" type="submit" name="dona_fraldinha">Enviar</button>
	</div>
</form>

<?php
}








////////////////////////////////////////////////////////////
/////////////////////oracoes
/////////////////////////////////////////////////////////////
if($ua == "oracao"){
?>
<form method="post" action="">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Pedido de oração</h4>
	</div>
	<div class="modal-body">
		<div align="center">
			<img src="engine/imgs/texto-pedido.png">
		</div>
		<div class="form-group">
			<label>Pedido de oração: </label>
			<textarea type="text" class="form-control" name="msg"></textarea>
		</div>
	</div>
	<div style="clear: both;"></div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
		<button class="btn btn-primary" type="submit" name="pedido_oracao">Enviar</button>
	</div>
</form>

<?php
}








////////////////////////////////////////////////////////////
/////////////////////ore
/////////////////////////////////////////////////////////////
if($ua == "ore"){
	$sql1 = mysqli_query($conecta, "select count(*) from ore where oracao = '1'");
	$rsql1 = mysqli_fetch_array($sql1);
	$sql2 = mysqli_query($conecta, "select count(*) from ore where oracao = '2'");
	$rsql2 = mysqli_fetch_array($sql2);
	$sql3 = mysqli_query($conecta, "select count(*) from ore where oracao = '3'");
	$rsql3 = mysqli_fetch_array($sql3);
?>
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Ore conosco</h4>
	</div>
	<div class="modal-body">
		Ore conosco: Pelo fim das clínicas de aborto, pelo fim das práticas abortivas, para que a humanidade zele pelo próximo desde a concepção, para que os pais também não abortem, para que as mães sempre encontrem acolhimento e amparo (médico e afetivo) durante a gestação e depois, para que a luz de Cristo chegue a todas as famílias, oremos:
		<br><br>
		<div class="col-md-4" align="center">
			<form method="post" action="">
				<input type="hidden" value="1" name="oracao">
				<button class="btn btn-default" type="submit" name="ore"><img src="engine/imgs/ave-maria.jpg" width="150" height="200"></button>
			</form>
			<?php echo $rsql1['count(*)']; ?> rezadas
		</div>
		<div class="col-md-4" align="center">
			<form method="post" action="">
				<input type="hidden" value="2" name="oracao">
				<button class="btn btn-default" type="submit" name="ore"><img src="engine/imgs/terco.jpg" width="150" height="200"></button>
			</form>
			<?php echo $rsql2['count(*)']; ?> rezadas
		</div>
		<div class="col-md-4" align="center">
			<form method="post" action="">
				<input type="hidden" value="3" name="oracao">
				<button class="btn btn-default" type="submit" name="ore"><img src="engine/imgs/rosario.jpg" width="150" height="200"></button>
			</form>
			<?php echo $rsql3['count(*)']; ?> rezadas
		</div>
		<br><br>
	</div>
	<div style="clear: both;"></div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
	</div>

<?php
}





////////////////////////////////////////////////////////////
/////////////////////depoimentos
/////////////////////////////////////////////////////////////
if($ua == "depoimento"){
?>
<form method="post" action="">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Deixe seu depoimento:</h4>
	</div>
	<div class="modal-body">
		<div class="form-group">
			<label>Nome: (opcional)</label>
			<input type="text" class="form-control" placeholder="Nome" name="nome">
		</div>
		<div class="form-group">
			<label>Depoimento: </label>
			<textarea type="text" class="form-control" name="msg"></textarea>
		</div>
	</div>
	<div style="clear: both;"></div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
		<button class="btn btn-primary" type="submit" name="depoimento">Enviar</button>
	</div>
</form>

<?php
}







////////////////////////////////////////////////////////////
/////////////////////anonimato
/////////////////////////////////////////////////////////////
if($ua == "anonimato"){
?>
<form method="post" action="">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Deixe seu mensagem:</h4>
	</div>
	<div class="modal-body">
		<div class="form-group">
			<label>Mensagem: </label>
			<textarea type="text" class="form-control" name="msg"></textarea>
		</div>
		<hr>
		<div align="center">
			<a href="#" onclick="CarregaJanela('ticket');" class="btn btn-default">Abra sua conversa</a>
		</div>	
	</div>
	<div style="clear: both;"></div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
		<button class="btn btn-primary" type="submit" name="anonimato">Enviar</button>
	</div>
</form>

<?php
}








////////////////////////////////////////////////////////////
/////////////////////ticket
/////////////////////////////////////////////////////////////
if($ua == "ticket"){
?>
<form method="post" action="index.php?anonimato">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		<h4 class="modal-title">Insira seu ticket:</h4>
	</div>
	<div class="modal-body">
		<div class="form-group">
			<label>Ticket: </label>
			<input type="text" class="form-control" name="ticket">
		</div>
	</div>
	<div style="clear: both;"></div>
	<div class="modal-footer">
		<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
		<button class="btn btn-primary" type="submit" name="anon">Enviar</button>
	</div>
</form>

<?php
}

?>