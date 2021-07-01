<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Notícias</title>
  <link href="https://fonts.googleapis.com/css?family=Jura:700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/noticia.css">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
	<?php include 'header.php'; ?>
	
	<div class="container noticia-modelo">	
  	<section>
  		<article>
  		  <?php
          $id = $_GET['id'];      

          require('conexao.php');   
          
          $consultaNoticia = $pdo->query("SELECT * FROM noticia where id = $id;");
          
          while ($noticia = $consultaNoticia->fetch(PDO::FETCH_ASSOC)) {
            echo "<h2 class='data-noticia'>" . date('d/m/Y', strtotime($noticia['dt'])) . "</h2>";
            echo "<h1 class='titulo-noticia'>{$noticia['titulo']}</h1>";
            echo "<figure><img src='/atividade-mysql/img/noticia/{$noticia['img']}.jpg' class='img-fluid'><figcaption class='subtitulo-noticia'>{$noticia['subtitulo']}</figcaption></figure>";
			      echo "<p>{$noticia['conteudo']}</p>";
            if($noticia['link'] != '')
            {
              echo "<a href='{$noticia['link']}' target='_blank'>Fonte</a>";
            }            
          }
          
          $pdo = null;
        ?>
  		</article>
  	</section>
  </div>

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>