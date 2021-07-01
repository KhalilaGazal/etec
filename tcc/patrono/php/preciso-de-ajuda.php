<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Preciso de ajuda - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head>
<body>
  <?php 
    require('../db.php');
    require_once('header.php');

    $online = $pdo->query("SELECT *, m.id id_material FROM material m JOIN material_categoria c ON m.id_categoria = c.id WHERE c.nome = 'Atendimento online' ORDER BY m.id;");
    
    $presencial = $pdo->query("SELECT *, m.id id_material FROM material m JOIN material_categoria c ON m.id_categoria = c.id WHERE c.nome = 'Atendimento presencial' ORDER BY m.id;");
  ?>

  <div class="container container-light col-12 col-sm-10 col-lg-7">
    <h1 class="titulo">Preciso de ajuda</h1>    

    <h2 class="subtitulo">Atendimento online</h2>
    <?php while ($result = $online->fetch(PDO::FETCH_ASSOC)) { ?>
    <p>
      <h3><a href="<?php echo $result['link']?>" target="_blank"><?php echo $result['titulo_link']?></a></h3>
      <?php echo $result['descricao']?>
    </p> 
    <?php } $pdo = null; ?>

    <h2 class="subtitulo">Atendimento presencial</h2>
    <?php while ($result = $presencial->fetch(PDO::FETCH_ASSOC)) { ?>
      <p>
        <h3><a href="<?php echo $result['link']?>"><?php echo $result['titulo_link']?></h3>
      </p>
    <?php } $pdo = null; ?>  
  </div>
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script src="/patrono/js/script.js"></script>
</body>
</html>