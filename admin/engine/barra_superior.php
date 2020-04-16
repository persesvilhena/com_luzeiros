    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php?index"><img src="../engine/imgs/logo.png" height="25"></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php?perfil"><img src="fotos/<?php echo $user->foto; ?>" class="img-rounded" style="width: 25px; height: 25px;"> <?php echo $row['nome'] . " " . $row['sobrenome']; ?></a></li>
            <li><a href="index.php?oracao">Pedidos de oração</a></li>
            <li><a href="index.php?fralda">Dona Fraldinha</a></li>
            <li><a href="index.php?leite">Zé Leitinho</a></li>
            <li><a href="index.php?anon">Chat Anonimato</a></li>
            <li><a href="sair.php"><span class="glyphicon glyphicon-off"></span> Sair</a></li>
          </ul>
        </div>
      </div>
    </nav>