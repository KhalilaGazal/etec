<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Notícias</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/noticia.css">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
	<?php include 'header.php'; ?>
	
	<div class="container">
		<section>
      <h1 class="titulo">Notícias</h1>
      <div class="row">
        <?php
          require('conexao.php');

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
    </section>
	</div>

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>