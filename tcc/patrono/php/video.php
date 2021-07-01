<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Vídeos - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head>
<body class="">
  <?php 
    require('../db.php');
    require_once('header.php');

    $consult = $pdo->query("SELECT * FROM material m JOIN material_categoria c ON m.id_categoria = c.id WHERE c.nome = 'Vídeo' ORDER BY m.id;");
  ?>
  <div class="container container-dark col-12 col-sm-10 col-xl-8">
    <h1 class="titulo-hp">Vídeos</h1>

    <?php while ($result = $consult->fetch(PDO::FETCH_ASSOC)) { ?>

    <div class="embed-responsive embed-responsive-16by9 mb-3">
      <?php echo convertYoutube($result['link']); ?>
    </div>

    <?php } $pdo = null; ?>
  </div>
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script src="/patrono/js/script.js"></script>
  <?php
    function convertYoutube($string) {
      return preg_replace(
        "/\s*[a-zA-Z\/\/:\.]*youtu(be.com\/watch\?v=|.be\/)([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i",
        "<iframe class='embed-responsive-item' src=\"//www.youtube.com/embed/$2\" allowfullscreen></iframe>",
        $string
      );
    }
  ?>
</body>
</html>