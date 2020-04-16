<?php
$endereco = $_SERVER ['REQUEST_URI'];

if(isset($_GET["index"]) || $endereco == "/" || $endereco == "/index.php") {
include "include/index/index.php";
$titulopag = "Luzeiros - Home";	
}


if(isset($_GET["quem_somos"])) {
include "include/index/quem.php";
$titulopag = "Luzeiros - Quem Somos";	
}


if(isset($_GET["servicos"])) {
include "include/index/servicos.php";
$titulopag = "Luzeiros - Serviços";	
}


if(isset($_GET["contato"])) {
include "include/index/contato.php";
$titulopag = "Luzeiros - Contato";	
}


if(isset($_GET["comunidade"])) {
include "include/index/comunidade.php";
$titulopag = "Luzeiros - A Comunidade";	
}


if(isset($_GET["posso_ajudar"])) {
include "include/index/ajudar.php";
$titulopag = "Luzeiros - Como posso ajudar";	
}


if(isset($_GET["depoimentos"])) {
include "include/index/depoimentos.php";
$titulopag = "Luzeiros - Mural de depoimentos";	
}


if(isset($_GET["abrangencia"])) {
include "include/index/abrangencia.php";
$titulopag = "Luzeiros - Abrangência";	
}


if(isset($_GET["anonimato"])) {
include "include/index/anonimato.php";
$titulopag = "Luzeiros - Anonimato";	
}
?>
