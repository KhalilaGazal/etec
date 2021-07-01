<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Notícias</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/header.css">
  <link rel="stylesheet" type="text/css" href="../css/footer.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
</head>
<body>
	<?php include 'header.php'; ?>
	
	<div class="container-fluid">
    <table class="table table-striped table-dark">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Data</th>
          <th scope="col">Imagem</th>
          <th scope="col">Título</th>          
        </tr>
      </thead>
      <tbody>
        <?php
          require('conexao.php');
              
          $consultaNoticia = $pdo->query("SELECT id, dt, img, titulo FROM noticia;");
              
          while ($resultNoticia = $consultaNoticia->fetch(PDO::FETCH_ASSOC))
          {                          
            echo "<tr>";
              echo "<th scope='row'> {$resultNoticia['id']} </th>";
                echo "<td> {$resultNoticia['dt']} </td>";
                echo "<td> {$resultNoticia['img']} </td>";
                echo "<td> {$resultNoticia['titulo']} </td>";               
                echo "<td><a href='excluir-noticia.php?id=$resultNoticia[id]'>Excluir</a></td>";
            echo "</tr>";             
          }

          $pdo = null;  
        ?>
      </tbody>
    </table>

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>