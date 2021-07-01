<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Textos - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head>
<body>
  <?php 
    require('../db.php');
    require_once('header.php');

    $consult = $pdo->query("SELECT * FROM material m JOIN material_categoria c ON m.id_categoria = c.id WHERE c.nome = 'Texto' ORDER BY m.id;");
  ?>
  <div class="container container-light col-12 col-sm-10 col-lg-7">
    <h1 class="titulo-hp text-center">Textos</h1>
    <p>Clique no título do texto para lê-lo.</p>
    <?php while ($result = $consult->fetch(PDO::FETCH_ASSOC)) { ?>
      <hr>
      <a href="<?php echo $result['link']?>" target="_blank" class="">
        <h3 class="subtitulo"><?php echo $result['titulo_link']?></h3>
      </a>
      <p><?php echo $result['descricao']?></p>
    <?php } $pdo = null; ?>
  </div>
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script src="/patrono/js/script.js"></script>
</body>
</html>