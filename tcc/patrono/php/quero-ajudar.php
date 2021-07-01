<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Quero ajudar - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head>
<body>

  <?php 
    require('../db.php');
    require_once('header.php');

    $manual = $pdo->query("SELECT * FROM material WHERE id_categoria = 12 ORDER BY id;");
    $cartilha = $pdo->query("SELECT * FROM material WHERE id_categoria = 11 ORDER BY id;");
  ?>

  <div class="container container-light col-12 col-sm-10 col-lg-7">
    <h1 class="titulo mb-4">Quero ajudar</h1>
    
    <h2 class="subtitulo">Manuais de Prevenção do Suicídio</h2>
    <ul>
      <?php while ($result = $manual->fetch(PDO::FETCH_ASSOC)) { ?>      
        <li class="mb-2"><a href="<?php echo $result['link']?>" target="_blank"><?php echo $result['titulo_link']?></a></li>      
      <?php } $pdo = null; ?>
    </ul>

    <h2 class="subtitulo mt-4">Cartilhas</h2>
    <ul>
      <?php while ($result = $cartilha->fetch(PDO::FETCH_ASSOC)) { ?>      
        <li class="mb-2"><a href="<?php echo $result['link']?>" target="_blank"><?php echo $result['titulo_link']?></a></li>      
      <?php } $pdo = null; ?>
    </ul>
  </div>

  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script src="/patrono/js/script.js"></script>  
</body>
</html>