<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Músicas</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/discografia.css">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
	<?php include 'header.php'; ?>
	
	<div class="container box-musica">
    <div class="row">

      <div class="col-sm-12 col-md-4 col-lg-6">
        <h1>Letra</h1>
        <?php
          $id = $_GET['id'];      

          require('conexao.php');   
            
          $consulta = $pdo->query("SELECT letra FROM musica where id = $id;");
            
          while ($musica = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<p>{$musica['letra']}</p>";
          }
            
          $pdo = null;
        ?>
      </div>

      <div class="col-sm-12 col-md-8 col-lg-6 video">
        <?php
          $id = $_GET['id'];      

          require('conexao.php');   
          
          $consulta = $pdo->query("SELECT url FROM musica where id = $id;");
          
          while ($musica = $consulta->fetch(PDO::FETCH_ASSOC)) {
            echo "<iframe src='https://www.youtube.com/embed/{$musica['url']}' frameborder='0' allow='accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>";
          }
          
          $pdo = null;
        ?>
      </div>

    </div>
	</div>
    
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>