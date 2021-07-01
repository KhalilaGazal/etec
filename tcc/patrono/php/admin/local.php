<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Locais - Patrono</title>
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

    $consult = $pdo->query("SELECT * FROM localidade ORDER by data_cadastro DESC");
    
    if(isset($_POST["btn-procurar"]))
    {
      $searchLocal = $_POST['txt-procurar'];

      $consult = $pdo->query("SELECT * FROM localidade WHERE id LIKE '%$searchLocal%' OR logradouro LIKE '%$searchLocal%' OR numero LIKE '%$searchLocal%' OR complemento LIKE '%$searchLocal%' OR bairro LIKE '%$searchLocal%' OR cidade LIKE '%$searchLocal%' OR estado LIKE '%$searchLocal%' OR cep LIKE '%$searchLocal%' OR nome LIKE '%$searchLocal%' OR descricao LIKE '%$searchLocal%' OR link LIKE '%$searchLocal%' OR data_cadastro LIKE '%$searchLocal%' ORDER by data_cadastro DESC");

      if($consult->rowCount() == 0) { 
        echo "<script>alert('Nenhum resultado encontrado!'); window.location.reload();</script>";
      }
    }
  ?>
  <div class="container-fluid container-light">
    <h1 class="titulo">Locais</h1>
    <?php 
      require_once('procurar.php'); 
      if($consult->rowCount() == 0) {
        echo "<div class='alert alert-danger text-center'>Nenhum local cadastrado!</div>";
      }
      else
      {
    ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">Preço mínimo</th>
          <th scope="col">Preço máximo</th>
          <th scope="col">Cidade</th>
          <th scope="col">Estado</th>
          <th scope="col">Data de cadastro</th>
          <th scope="col">Editar</th>
          <th scope="col">Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($result = $consult->fetch(PDO::FETCH_ASSOC)) { 
          $date = date_create($result['data_cadastro']);  
        ?>
        <tr>
          <th scope="row"><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalUsuario<?php echo $result['id']?>"><?php echo $result['id']?></button></th>
          <td><?php echo $result['nome']?></td>
          <td><?php echo $result['preco_min']?></td>
          <td><?php echo $result['preco_max']?></td>
          <td><?php echo $result['cidade']?></td>
          <td><?php echo $result['estado']?></td>
          <td><?php echo date_format($date, 'd/m/Y H:i:s'); ?></td>
          <td><a href="local-editar.php?id=<?php echo $result['id']?>" class="btn btn-success">Editar</a></td>
          <td><button onClick="excluirLocal(<?php echo $result['id'] ?>)" class="btn btn-danger">Excluir</button></td>
        </tr>

        <div class="modal fade" id="modalUsuario<?php echo $result['id']?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal"><span class="bold">ID:</span> <?php echo $result['id']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php if($result['latitude']) { ?>
                  <p><span class="bold">Latitude</span> <?php echo $result['latitude']?></p>
                <?php } if($result['longitude']) { ?>
                  <p><span class="bold">Longitude:</span> <?php echo $result['longitude']?></p>
                <?php } if($result['logradouro']) { ?>
                  <p><span class="bold">Logradouro:</span> <?php echo $result['logradouro']?></p>
                <?php } if($result['numero']) { ?>
                  <p><span class="bold">Número:</span> <?php echo $result['numero']?></p>
                <?php } if($result['complemento']) { ?>
                  <p><span class="bold">Complemento:</span> <?php echo $result['complemento']?></p>
                <?php } if($result['bairro']) { ?>
                  <p><span class="bold">Bairro:</span> <?php echo $result['bairro']?></p>
                <?php } if($result['cep']) { ?>
                  <p><span class="bold">CEP:</span> <?php echo $result['cep']?></p>
                <?php } if($result['cidade']) { ?>
                  <p><span class="bold">Cidade:</span> <?php echo $result['cidade']?></p>

                <?php } if($result['estado']) { ?>
                  <p><span class="bold">Estado:</span> <?php echo $result['estado']?></p>
                <?php } if($result['nome']) { ?>
                  <p><span class="bold">Nome:</span> <?php echo $result['nome']?></p>
                <?php } if($result['descricao']) { ?>
                  <p><span class="bold">Descrição:</span> <?php echo $result['descricao']?></p>
                <?php } if($result['telefone']) { ?>
                  <p><span class="bold">Telefone:</span> <?php echo $result['telefone']?></p>
                <?php } if($result['celular']) { ?>
                  <p><span class="bold">Celular:</span> <?php echo $result['celular']?></p>
                <?php } if($result['email']) { ?>
                  <p><span class="bold">E-mail:</span> <?php echo $result['email']?></p>
                <?php } if($result['celular']) { ?>
                  <p><span class="bold">Celular:</span> <?php echo $result['celular']?></p>
                <?php } if($result['link']) { ?>
                  <p><span class="bold">Site:</span> <a href="<?php echo $result['link']?>" target="_blank"><?php echo $result['link']?></a></p>
                <?php } if($result['preco_min']) { ?>
                  <p><span class="bold">Preço mínimo:</span> <?php echo $result['preco_min']?></p>
                <?php } if($result['preco_max']) { ?>
                  <p><span class="bold">Preço máximo:</span> <?php echo $result['preco_max']?></p>
                <?php } if($result['horario']) { ?>
                  <p><span class="bold">Horário de Funcionamento:</span> <?php echo $result['horario']?></p>
                <?php } if($result['data_cadastro']) { ?>
                  <p><span class="bold">Data de cadastro:</span> <?php echo date_format($date, 'd/m/Y H:i:s');?></p>
                <?php } ?>                
              </div>
              <div class="modal-footer">
                <button onClick="excluirLocal(<?php echo $result['id'] ?>)" class="btn btn-danger mr-4">Excluir</button>
                <a href="/patrono/php/admin/local-editar.php?id=<?php echo $result['id']?>" class="btn btn-success">Editar</a>
              </div>
            </div>
          </div>
        </div>
        <?php }} $pdo = null; ?>
      </tbody>
    </table>    
  </div>
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script>
    function excluirLocal(id) {
      if(confirm('Deseja excluir?')) {
        location.href = 'local-excluir.php?id=' + id;
      }
    }
  </script>
</body>
</html>