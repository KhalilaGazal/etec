<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Adicionar Notícia</title>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/header.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/noticia.css">
</head>
<body>
	<?php include 'header.php'; ?>
	
	<div class="container">
    <div class="adicionar-noticia">
      <section> 
        <h1 class="titulo">Adicionar notícia</h1>
        <form method="post" action="#">
          <div class="form-group">
            <label for="data">Data: *</label>
            <input type="date" name="data" id="data" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="img">Imagem: *</label>
            <small class="text-muted">(Nome do arquivo SEM a extensão)</small>        
            <input type="text" name="img" id="img" class="form-control">
          </div>
          <div class="form-group">
            <label for="titulo">Título: *</label>
            <input type="text" name="titulo" id="titulo" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="subtitulo">Subtítulo:</label>
            <input type="text" name="subtitulo" id="subtitulo" class="form-control">
          </div>
          <div class="form-group">
            <label for="conteudo">Conteúdo: *</label>
            <textarea name="conteudo" id="conteudo" class="form-control" rows="10" required></textarea>
          </div>
          <div class="form-group">
            <label for="link">Link:</label>
            <input type="text" name="link" id="link" class="form-control">
          </div>
          <div class="text-center">
          	<button type="submit" name="enviar" class="btn btn-dark btn-lg">Enviar</button>
          </div>
        </form>
      </section>
    </div>
  </div>

  <?php
    require('conexao.php');

    if(isset($_POST['enviar']))
    {
      $dt = $_POST['data'];
      $img = $_POST['img'];
      $titulo = $_POST['titulo'];      
      $subtitulo = $_POST['subtitulo'];      
      $conteudo = $_POST['conteudo'];
      $link = $_POST['link'];
      
      try
      {   
        $stmt = $pdo->prepare("INSERT INTO noticia VALUES(null,'$dt','$img','$titulo','$subtitulo','$conteudo','$link')");   
        $stmt->execute();                   
        $stmt = null;
        echo "<script>alert('Notícia cadastrada com sucesso!')</script>";
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