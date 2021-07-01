<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Patrono - Atendimento psicológico e psiquiátrico gratuito ou com preço simbólico</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head>
<body>
  <script>
    if(window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <?php 
    require('../db.php');
    require_once('header.php');

    $consult = $pdo->query("SELECT * FROM localidade ORDER by preco_min, estado, cidade");

    if(isset($_POST["btn-procurar"])) {
      $searchLocal = $_POST['procurar-local'];

      $consult = $pdo->query("SELECT * FROM localidade WHERE cidade LIKE '%$searchLocal%' OR estado LIKE '%$searchLocal%' ORDER by preco_min, estado, cidade");

      if(!$consult->rowCount()) { 
        echo "<script>alert('Nenhum resultado encontrado!'); window.location.reload();</script>";
      }
    }
  ?>
  <div class="container container-light col-12 col-sm-10 col-lg-8">
    <?php require_once('local-busca.php');?>
    <p>Clique no nome do local para ver todos os detalhes.</p>

    <?php while ($result = $consult->fetch(PDO::FETCH_ASSOC)) { ?>
    
    <div class="lista">
      <a href="/patrono/php/local-selecionado.php?id=<?php echo $result['id']?>" class="link-lista">
        <h2 class="subtitulo"><?php echo $result['nome']?></h2>
        <p> 
          <?php if($result['preco_min'] == 0 && $result['preco_max'] == 0) { ?>
            <span class="bold">Preço:</span> gratuito<br>
          <?php } else { ?>            
            <span class="bold">Preço:</span> de R$<?php echo $result['preco_min']?>,00 até R$<?php echo $result['preco_max']?>,00<br>            
          <?php } ?>
          <?php echo $result['cidade']?> - <?php echo $result['estado']?><br>
        </p>
      </a>
    </div>

    <?php } $pdo = null; ?>

  </div>
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script src="/patrono/js/script.js"></script>
</body>
</html>