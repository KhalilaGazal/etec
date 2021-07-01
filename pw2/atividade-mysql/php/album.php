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

  <div class="container">
    <div class="row">
      <table class="table table-dark table-borderless">
      <thead>
        <tr>
          <th scope="col">Número</th>
          <th scope="col">Título</th>
        </tr>
      </thead>
      <tbody>
      <?php
        $id = $_GET['id'];

        require('conexao.php');

        $consulta = $pdo->query("SELECT id, numero, titulo FROM musica WHERE id_album = $id ORDER BY numero;");

        while ($musica = $consulta->fetch(PDO::FETCH_ASSOC))
          {                          
            echo "<tr>";
              echo "<th scope='row'> {$musica['numero']} </th>";
                echo "<td>";
                  echo "<a href='/atividade-mysql/php/musica.php?id={$musica['id']}'>";
                    echo "{$musica['titulo']} </td>";
                  echo "</a>";
            echo "</tr>";             
          }

        $pdo = null;
      ?>
      </table>

    </div>
	</div>

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>