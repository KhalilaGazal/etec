<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro</title>
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
			<section class="cadastro">    
	    	<h1 class="mb-4">Cadastro</h1>
	  	  <form method="post" action="#">  	  	 	
	        <div class="form-group">
	          <input type="text" name="usuario" id="usuario" class="form-control" placeholder="Nome de usuário" minlength="3" maxlength="15" required>
	        </div>  
	        <div class="form-group">
	          <input type="email" name="email" id="email" class="form-control" placeholder="E-mail" required>
	        </div>   
	  	  	<div class="form-group mb-4">
	  	  		<input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" minlength="6" maxlength="20" required>
	  	  	</div>    
	        <!-- <div class="form-group mb-4">
	          <label for="password"></label>
	          <input type="password" class="form-control" name="password" placeholder="Repita a senha" required>
	        </div> -->
	    		<button type="submit" name="enviar" class="btn btn-primary btn-lg btn-block">Criar conta</button>
	  	  </form>
	    </section>
	  </div> 
	</div>

  <?php
    require('conexao.php');

    if(isset($_POST['enviar']))
    {
      $nome = $_POST['usuario'];
      $email = $_POST['email'];
      $senha = md5($_POST['senha']);    
    
      try
      {   
        $stmt = $pdo->prepare("INSERT INTO usuario VALUES(null,now(),'$nome','$email','$senha')");  
        $stmt->execute();                   
        $stmt = null;
        $pdo = null;

        echo "<script>alert('Usuário cadastrado com sucesso!');window.location.href='/atividade-mysql/index.php'</script>";
      }
      catch(PDOException $e)
      {
        echo 'Error: ' . $e->getMessage();
      }
    }
  ?>  

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>