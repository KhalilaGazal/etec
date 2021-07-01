<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Livros - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head>
<body>
  <?php 
    require('../db.php');
    require_once('header.php');

    $consult = $pdo->query("SELECT *, m.id id_material FROM material m JOIN material_categoria c ON m.id_categoria = c.id WHERE c.nome = 'Livro' ORDER BY m.id;");
  ?>
  <div class="container container-light col-12 col-sm-10 col-lg-7">

    <h1 class="titulo-hp text-center">Livros</h1>
    <p>Clique no título do livro para mais informações.</p>

    <?php while ($result = $consult->fetch(PDO::FETCH_ASSOC)) { ?>

      <div class="card mb-3 mx-auto" style="max-width: 100%;">
        <div class="row no-gutters">
          <div class="col-md-4">
            <img src="/patrono/img/material/<?php echo $result['id_categoria']?>/<?php echo $result['id_material']?>.jpg" class="card-img" alt="<?php echo $result['descricao_imagem']?>">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <a href="<?php echo $result['link']?>" target="_blank">
                <h5 class="card-title bold"><?php echo $result['titulo_link']?></h5>
              </a>
              <p class="card-text"><?php echo $result['descricao']?></p>
            </div>
          </div>
        </div>
      </div>

    <?php } $pdo = null; ?>    
  </div>
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script src="/patrono/js/script.js"></script>
</body>
</html>