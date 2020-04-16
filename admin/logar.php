<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="engine/imgs/icon.png">

    <title>Luzeiros - Administração</title>

    <!-- Bootstrap core CSS -->
    <link href="engine/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="engine/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="engine/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="engine/assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  	 <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="logar.php"><img src="../engine/imgs/logo.png" height="25"></a>
        </div>
      </div>
    </nav>

    <div class="container">
    	<br>
    	


	<?php
	include("../engine/conexao.php"); 
	include("engine/funcao_externa.php");

	session_start();
	if(!empty($_SESSION["login"]) && !empty($_SESSION["senha"]) && !empty($_SESSION["id"])) {
		header("Location: index.php?index");
		exit();
	}





	if(isset($_POST["logar"])) {
		if(!empty($_POST["email"]) && !empty($_POST["senha"])) {
			$email = recebe($_POST["email"]);
			$senha = recebe($_POST["senha"]);
			$senha_md5 = md5($senha);
			$valida_user = mysqli_query($conecta, "SELECT * FROM user WHERE email='$email' AND senha='$senha_md5'") or die(mysqli_error());
			if(mysqli_num_rows($valida_user) > 0) {
				$info = mysqli_fetch_array($valida_user);
				$email = $info["email"];
				$pass = $info["senha"];
				$id_generico = $info["id"];
				$id = base64_encode($id_generico);
				$_SESSION["email"] = $email;
				$_SESSION["senha"] = $senha_md5;
				$_SESSION["id"] = $id;
				header("Location: index.php?index");
				exit();
			}else{
				problema("Dados Incorretos!");
			}
		}else{
			alerta("Por favor, preencha os campos corretamente!");
		}
	}
















		?>
		<div class="well">
		<form method="post" action="" class="form-signin">
			<h2 class="form-signin-heading">Logar: </h2>
			<label class="sr-only">Login: </label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email" name="email" required autofocus>
			<label for="inputPassword" class="sr-only">Senha: </label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Senha" name="senha" required>
			<button class="btn btn-lg btn-primary btn-block" type="submit" name="logar">Logar</button>
		</form>
		</div>
      <?php












	?>

    </div> <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="engine/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="engine/dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="engine/assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="engine/assets/js/ie10-viewport-bug-workaround.js"></script>

  </body>
</html>
