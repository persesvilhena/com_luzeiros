<?php
class conexao{
	public $bd_server = "mysql.hostinger.com.br";
	public $bd_user = "u580251358_luz";
	public $bd_pass = "369875luz";
	public $bd_name = "u580251358_luz";
	public $conecta;
	function __construct()
	{
		$conecta = mysqli_connect($this->bd_server, $this->bd_user, $this->bd_pass, $this->bd_name);
		header('Content-Type: text/html; charset=utf-8');
		mysqli_query($conecta, "SET NAMES 'utf8'");
		mysqli_query($conecta, 'SET character_set_connection=utf8');
		mysqli_query($conecta, 'SET character_set_client=utf8');
		mysqli_query($conecta, 'SET character_set_results=utf8');
		
	}
}
$conexao = new conexao;
$conecta = mysqli_connect($conexao->bd_server, $conexao->bd_user, $conexao->bd_pass, $conexao->bd_name);
header('Content-Type: text/html; charset=utf-8');
mysqli_query($conecta, "SET NAMES 'utf8'");
mysqli_query($conecta, 'SET character_set_connection=utf8');
mysqli_query($conecta, 'SET character_set_client=utf8');
mysqli_query($conecta, 'SET character_set_results=utf8');


$creditos = "Luzeiros © 2017";
?>
