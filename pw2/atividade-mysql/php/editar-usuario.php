<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Editar Usuários</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
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
          <th scope="col">Data de cadastro</th>
          <th scope="col">Usuário</th>
          <th scope="col">E-mail</th>
        </tr>
      </thead>
      <tbody>
        <?php
          require('conexao.php');
              
          $consultaUser = $pdo->query("SELECT id, data_cadastro, nome, email, senha FROM usuario;");
              
          while ($resultUser = $consultaUser->fetch(PDO::FETCH_ASSOC))
          {                          
            echo "<tr>";
              echo "<th scope='row'> {$resultUser['id']} </th>";
                echo "<td> {$resultUser['data_cadastro']} </td>";
                echo "<td> {$resultUser['nome']} </td>";
                echo "<td> {$resultUser['email']} </td>";
                echo "<td><a href='excluir-usuario.php?id=$resultUser[id]'>Excluir</a></td>";
            echo "</tr>";             
          }

          $pdo = null;  
        ?>
      </tbody>
    </table>
  </div>

	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/popper.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>