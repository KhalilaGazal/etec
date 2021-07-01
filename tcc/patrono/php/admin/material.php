<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Materiais de apoio - Patrono</title>
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

    $consult = $pdo->query("SELECT *, m.id id_material, c.nome categoria FROM material m JOIN material_categoria c ON m.id_categoria = c.id ORDER BY data_cadastro DESC;");
    
    if(isset($_POST["btn-procurar"]))
    {
      $searchMaterial = $_POST['txt-procurar'];

      $consult = $pdo->query("SELECT *, m.id id_material, c.id id_c, c.nome categoria FROM material m JOIN material_categoria c ON m.id_categoria = c.id WHERE m.id LIKE '%$searchMaterial%' OR c.id LIKE '%$searchMaterial%' OR c.nome LIKE '%$searchMaterial%' OR m.titulo LIKE '%$searchMaterial%' OR m.link LIKE '%$searchMaterial%' OR m.titulo_link LIKE '%$searchMaterial%' OR m.descricao_imagem LIKE '%$searchMaterial%' OR m.descricao LIKE '%$searchMaterial%' OR m.data_cadastro LIKE '%$searchMaterial%' ORDER by data_cadastro DESC;");

      if($consult->rowCount() == 0) { 
        echo "<script>alert('Nenhum resultado encontrado!'); window.location.reload();</script>";
      }
    }
  ?>
  <div class="container-fluid container-light">
    <h1 class="titulo">Materiais de apoio</h1>
    <?php 
      require_once('procurar.php');

      if($consult->rowCount() == 0) {
        echo "<div class='alert alert-danger text-center'>Nenhum material cadastrado!</div>";
      }
      else
      {
    ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Categoria</th>
          <th scope="col">Título do link</th>
          <th scope="col">Link</th>
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
          <th scope="row"><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalMaterial<?php echo $result['id_material']?>"><?php echo $result['id_material']?></button></th>
          <td><?php echo $result['categoria']?></td>
          <td><?php echo $result['titulo_link']?></td>
          <td><a href="<?php echo $result['link']?>" target="_blank"><?php echo $result['link']?></a></td>
          <td><?php echo date_format($date, 'd/m/Y H:i:s'); ?></td>
          <td><a href="material-editar.php?id=<?php echo $result['id_material']?>" class="btn btn-success">Editar</a></td>
          <td><button onClick="excluirMaterial(<?php echo $result['id_material'] ?>)" class="btn btn-danger">Excluir</button></td>
        </tr>        

        <div class="modal fade" id="modalMaterial<?php echo $result['id_material']?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal"><span class="bold">ID:</span> <?php echo $result['id_material']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <?php if($result['categoria']) { ?>
                  <p><span class="bold">Categoria:</span> ID <?php echo $result['id_categoria']?> - <?php echo $result['categoria']?></p>
                <?php } if($result['titulo']) { ?>
                  <p><span class="bold">Título da postagem:</span> <?php echo $result['titulo']?></p>
                <?php } if($result['descricao']) { ?>
                  <p><span class="bold">Descrição:</span> <?php echo $result['descricao']?></p>
                <?php } if($result['titulo_link']) { ?>
                  <p><span class="bold">Título do link:</span> <?php echo $result['titulo_link']?></p>
                <?php } if($result['link']) { ?>
                  <p><span class="bold">Link:</span> <a href="<?php echo $result['link']?>" target="_blank"><?php echo $result['link']?></a></p>
                <?php } if($result['descricao_imagem']) { ?>
                  <p><span class="bold">Imagem</span><br><img src="/patrono/img/material/<?php echo $result['id_categoria']."/".$result['id_material'];?>.jpg" alt="<?php echo $result['descricao_imagem']?>" class="img-fluid"></p>
                  <p><span class="bold">Descrição da imagem:</span> <?php echo $result['descricao_imagem']?></p>
                <?php } ?>
                <p><span class="bold">Data de cadastro:</span> <?php echo date_format($date, 'd/m/Y H:i:s');?></p>
              </div>
              <div class="modal-footer">
                <button onClick="excluirMaterial(<?php echo $result['id_material'] ?>)" class="btn btn-danger mr-4">Excluir</button>
                <a href="/patrono/php/admin/material-editar.php?id=<?php echo $result['id_material']?>" class="btn btn-success">Editar</a>
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
  <script src="/patrono/js/script.js"></script>
  <script>
    function excluirMaterial(id) {
      if(confirm('Deseja excluir?')) {
        location.href = '/patrono/php/admin/material-excluir.php?id=' + id;
      }
    }
  </script>
  
</body>
</html>