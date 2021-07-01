<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Mensagens - Patrono</title>
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
    require('../../db.php');
    require_once('header.php');

    $consult = $pdo->query("SELECT * FROM contato ORDER BY data_cadastro DESC;");
    
    if(isset($_POST["btn-procurar"]))
    {
      $searchMensagem = $_POST['txt-procurar'];

      $consult = $pdo->query("SELECT * FROM contato WHERE id LIKE '%$searchMensagem%' OR nome LIKE '%$searchMensagem%' OR email LIKE '%$searchMensagem%' OR assunto LIKE '%$searchMensagem%' OR mensagem LIKE '%$searchMensagem%' OR data_cadastro LIKE '%$searchMensagem%' ORDER by data_cadastro DESC;");

      if($consult->rowCount() == 0) { 
        echo "<script>alert('Nenhum resultado encontrado!'); window.location.reload();</script>";
      }
    }
  ?>
  <div class="container-fluid container-light">
    <h1 class="titulo">Mensagens</h1>
    <?php 
      require_once('procurar.php');

      if($consult->rowCount() == 0) {
        echo "<div class='alert alert-danger text-center'>Nenhuma mensagem recebida!</div>";
      }
      else
      {
    ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
          <th scope="col">Assunto</th>
          <th scope="col">Data de cadastro</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($result = $consult->fetch(PDO::FETCH_ASSOC)) { 
          $date = date_create($result['data_cadastro']);  
        ?>
        <tr>
          <th scope="row"><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalMensagem<?php echo $result['id']?>"><?php echo $result['id']?></button></th>
          <td><?php echo $result['nome']?></td>
          <td><?php echo $result['email']?></td>
          <td><?php echo $result['assunto']?></td>
          <td><?php echo date_format($date, 'd/m/Y H:i:s'); ?></td>
        </tr>        

        <div class="modal fade" id="modalMensagem<?php echo $result['id']?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal"><span class="bold">ID:</span> <?php echo $result['id']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php if($result['nome']) { ?>
                  <p><span class="bold">Nome:</span> <?php echo $result['nome']?></p>
                <?php } if($result['email']) { ?>
                  <p><span class="bold">E-mail:</span> <?php echo $result['email']?></p>
                <?php } if($result['assunto']) { ?>
                  <p><span class="bold">Assunto:</span> <?php echo $result['assunto']?></p>
                <?php } if($result['mensagem']) { ?>
                  <p><span class="bold">Mensagem:</span> <?php echo $result['mensagem']?></p>
                <?php }?>
              </div>
            </div>
          </div>
        </div>

        <?php
          }}
          $pdo = null;
        ?>
      </tbody>
    </table>
  </div>
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script> 
  <script src="/patrono/js/script.js"></script> 
</body>
</html>