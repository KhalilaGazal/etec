<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página Inicial</title>
  <link rel="stylesheet" type="text/css" href="css/all.min.css"><!--fontawesome-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/header.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="slick/slick.css">
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/discografia.css">
	<link rel="stylesheet" type="text/css" href="css/noticia.css">
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
	<?php include 'php/header.php'; ?>
	
	<div class="container">

    <?php include 'php/discografia.php'; ?>

		<section>
      <div class="box-index">
        <h1 class="titulo"><a href="php/noticia.php">Notícias</a></h1>
          
        <div class="row">
          <?php
            require('php/conexao.php');

            $consultaNoticia = $pdo->query("SELECT * FROM noticia ORDER BY dt DESC;");

            while ($noticia = $consultaNoticia->fetch(PDO::FETCH_ASSOC))
            {
              echo "<div class='col-sm-6 col-md-6 col-lg-3 pb-3'>";
                echo "<div class='card' style='width: 15rem;'>";
                  echo "<a href='/atividade-mysql/php/modelo-noticia.php?id={$noticia['id']}'>";
                    echo "<img class='card-img-top' src='/atividade-mysql/img/noticia/{$noticia['img']}.jpg'>";
                    echo "<div class='card-body'>";
                      echo "<h6 class='card-subtitle mb-2 text-muted text-right'><i class='fas fa-calendar-alt'></i> " . date('d/m/Y', strtotime($noticia['dt'])) . "</h6>";
                      echo "<h5 class='card-title'>{$noticia['titulo']}</h5>";
                    echo "</div>";
                  echo "</a>";
                echo "</div>";
              echo "</div>";
            }

            $pdo = null;
          ?>
        </div> 
      </div>
    </section>
  </div>

  <?php include 'php/footer.php'; ?>

  <script src="js/jquery-3.4.1.min.js"></script>
	<script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="slick/slick.min.js"></script>
	<script src="js/slick.js"></script>
</body>
</html>