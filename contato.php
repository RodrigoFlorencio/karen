<!DOCTYPE html>
<html lang="pt-br">
<head>

  <title>Karen Andrade Fotografia | Contato</title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0" >

  <meta charset="utf-8">

  <link rel="shortcut icon" href="./img/00.png" />

  <link rel="stylesheet" type="text/css" href="./css/menu.css">

  <link rel="stylesheet" type="text/css" href="./css/contato.css">
  
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
            <a href="" class="menu-item-action">CONTATO</a>
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

    <section>
      <div class="form">
        <legend><h3>Formulário de contato</h3></legend>
        <form action="processaForm.php" method="post">

          <label for="nome"> Nome Completo: </label><br>
          <input class="input" id="nome" name="nome" type="text" placeholder="Nome Completo" required><br><br>

          <label for="telefone"> Telefone: </label><br>
          <input class="input" id="telefone" name="telefone" type="text" placeholder="Telefone" required><br><br>

          <label for="email"> E-mail: </label><br>
          <input class="input" id="email" name="email" type="text" placeholder="E-mail" required><br><br>

          <label for="assunto"> Assunto: </label><br>
          <input class="input" id="assunto" name="assunto" type="text" placeholder="Assunto" required><br><br>

          <label for="mensagem"> Mensagem: </label><br>
          <textarea name="mensagem" id="mensagem" cols="50" rows="4"></textarea><br><br>

          <input  class="btn" type="submit" value="Enviar"><br><br>
        </form>
      </div>
    </section>

    <script src="./js/btnMenu.js"></script>

  </body>
</html>