<!DOCTYPE html>
<html lang="pt-br">
	<head>

	  <title>E-mail Enviado | Karen Andrade Fotografia</title>

	  <meta name="viewport" content="width=device-width, user-scalable=1.0" >

	  <meta charset="utf-8">

	  <link rel="shortcut icon" href="./img/00.png" />

	  <link rel="stylesheet" type="text/css" href="./css/menu.css">

	  <link rel="stylesheet" type="text/css" href="./css/processa.css">
	  
	</head>

	<body>

	 <div class="topo">
	 	
	 	<div class="topoint">
	 		<div class="logo">Ka</div>

      <nav class="wrap-menu">
        <a href="#menu-mobile" class="btnMenu btnMenu_open"></a>

        <ul id="menu-mobile" class="menu-mobile">
          <li class="btnMenu btnMenu_close">Sair</li>
          <li class="menu-item">
            <a href="index.html" class="menu-item-action">HOME</a>
          </li>
          <li class="menu-item">
            <a href="" class="menu-item-action">JOBS</a>
          </li>
          <li class="menu-item">
            <a href="" class="menu-item-action">SOBRE</a>
          </li>
          <li class="menu-item">
            <a href="contato.php" class="menu-item-action">CONTATO</a>
          </li>
        </ul>
      </nav>

      <div class="menu">
        <nav>
          <ul>
            <li><a href="index.html">HOME</a></li>
            <li><a href="#">JOBS</a></li>
            <li><a href="#">SOBRE</a></li>
            <li><a href="contato.php">CONTATO</a></li>
          </ul>
        </nav>
      </div>
    </div>

	<div class="social-text">
		Agradecemos o interesse em nossos serviços.<br><br> Entraremos em contato o mais rápido possível.
	</div>

	<div class="social-logo">
		<a href="https://www.facebook.com/karen.andrade.71" target="_blank"><img class="face" src="./img/face-black.png" width="80" height="80"></a>
		<a href="https://www.instagram.com/karenandrade7/" target="_blank"><img src="./img/insta-black.png" width="80" height="80"></a>
	</div>

	<?php

	$nome = $_POST['nome'];
	$fone = $_POST['telefone'];
	$email = $_POST['email'];
	$assunto = $_POST['assunto'];
	$msg = $_POST['mensagem'];

	?>
	<?php

	$to = "karenandradephotography@gmail.com";
	$subject = "$assunto";
	$message = "Nome: $nome
				Telefone: $fone
				E-mail: $email
				Assunto: $assunto
				Mensagem: $msg";

	$header = "MIME-Version: 1.0/n";
	$header .= "Content-type: text/html; charset=iso-8859-1/n";
	$header .= "from: $email/n";

	@mail($to, $subject, $message, $header);

	?>

	<script src="./js/btnMenu.js"></script>
	</body>

</html>