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

    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM localidade WHERE id = $id;");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    if(isset($_POST["btn-procurar"])) {
      $searchLocal = $_POST['procurar-local'];

      $consult = $pdo->query("SELECT * FROM localidade WHERE cidade LIKE '%$searchLocal%' OR estado LIKE '%$searchLocal%' ORDER by preco_min, estado, cidade");

      if(!$consult->rowCount()) { 
        echo "<script>alert('Nenhum resultado encontrado!'); window.location.reload();</script>";
      }
    }

    $linkGoogleMaps[$result['id']] = "https://www.google.com/maps/search/?api=1&query=" . preg_replace('/\s+/', '+', $result['logradouro']) . "%2C+" . preg_replace('/\s+/', '+', $result['numero']) . "+" . preg_replace('/\s+/', '+', $result['bairro']) . "+" . preg_replace('/\s+/', '+', $result['cidade']) . "+" . preg_replace('/\s+/', '+', $result['estado']);
  ?>
  <div class="container container-light col-12 col-sm-10 col-lg-8">
    <?php require_once('local-busca.php');?>
    <p>Para voltar, clique no botão lista.</p>
    <div class="border-top">
      <h2 class="subtitulo"><?php echo $result['nome']?></h2>
      <p>
        <?php
          if($result['descricao']) {
            echo $result['descricao'];
          }
        ?>
      </p>
      <p class="local-endereco">
        <?php 
          echo $result['logradouro'] . ", " . $result['numero'];
          if($result['complemento']) {
            echo " - " . $result['complemento'];
          }
          echo " - " . $result['bairro'] . "<br>"
            . $result['cidade'] . " - " . $result['estado'] . "<br>
            CEP: " . $result['cep'] . "<br>
            <a href='" . $linkGoogleMaps[$result['id']] . "' target='_blank'>Abrir no Google Maps</a><br>";
        ?>
      </p>
      <p>
        <?php if($result['preco_min'] == 0 && $result['preco_max'] == 0) { ?>
          <span class="bold">Preço:</span> gratuito<br>
        <?php } else { ?>          
          <span class="bold">Preço:</span> de R$<?php echo $result['preco_min']?>,00 até R$<?php echo $result['preco_max']?>,00<br>    
        <?php } ?>
      </p>        
      <p class="mb-5">
        <?php
          if($result['telefone']) {
            echo "<span class='bold'>Telefone:</span> " . $result['telefone'] . "<br>";
          }
          if($result['celular']) {
            echo "<span class='bold'>Celular:</span> " . $result['celular'] . "<br>";
          }
          if($result['horario']) {
            echo "<span class='bold'>Horário de funcionamento:</span> " . $result['horario'] . "<br>";
          }
          if($result['email']) {
            echo "<span class='bold'>E-mail:</span> " . $result['email'] . "<br>";
          }
          if($result['link']) {
            echo "<span class='bold'>Site:</span> <a href='" . $result['link'] . "' target='_blank'>" . $result['link'] . "</a>";
          }
        ?>
      </p>
    </div>
  </div>
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script src="/patrono/js/script.js"></script>
</body>
</html>