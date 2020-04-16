<?php
$endereco = $_SERVER ['REQUEST_URI'];

if(isset($_GET["index"]) || $endereco == "/" || $endereco == "/index.php") {
include "include/index/index.php";
}


if(isset($_GET["mural"])) {
include "include/index/index.php";
}


if(isset($_GET["perfil"])) {
include "include/perfil/index.php";
}


if(isset($_GET["oracao"])) {
include "include/index/oracao.php";
}


if(isset($_GET["fralda"])) {
include "include/index/fralda.php";
}


if(isset($_GET["leite"])) {
include "include/index/leite.php";
}


if(isset($_GET["anon"])) {
include "include/index/anon.php";
}


?>
