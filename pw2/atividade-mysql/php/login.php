<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/form.css">
	<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
	<?php include 'header.php'; ?>
	
	<div class="container">
		<div class="form">
			<section class="login">
	      <h1>Login</h1>
	      <form method="post" action="#">
	        <div class="form-group mb-0">
	          <label for="usuario"></label>
	          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nome de usuário" minlength="3" maxlength="15" required>
	        </div>    
	        <div class="form-group">
	          <label for="senha"></label>
	          <input type="senha" name="senha" class="form-control" placeholder="Senha" minlength="6" maxlength="20" required>
	        </div>
	        <div class="form-group form-check">
	          <input type="checkbox" name="conectado" id="conectado" class="form-check-input" >
	          <label class="form-check-label">Mantenha-me conectado</label>
	          <a href="#" class="recuperar-senha">Esqueci a senha</a>
	        </div>
	        <button type="submit" name="enviar" class="btn btn-primary btn-lg btn-block">Entrar</button>
	      </form>
	    </section>
    </div>
	</div>

	<?php
    // require('conexao.php');

    // if(isset($_POST['enviar']))
    // {
    //   $usuario = $_POST['usuario'];
	  // $senha = $_POST['senha'];

	  // $consultaLogin = $pdo->query("SELECT id, nome FROM usuario WHERE usuario= :usuario AND senha= :senha;");

	  // $pdo = null;
	?>

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>