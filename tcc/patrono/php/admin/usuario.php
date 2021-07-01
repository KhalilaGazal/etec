<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Usuários - Patrono</title>
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

    if($_SESSION['nivel'] != 1) {
      echo "<script>alert('Você não possui permissão para acessar essa página!'); window.location.href='local.php'</script>";
    }
    else {
      $consult = $pdo->query("SELECT *, u.id id_usuario, n.id id_nivel, n.nome nivel_acesso FROM usuario u JOIN usuario_nivel n ON u.id_nivel = n.id ORDER BY u.data_cadastro DESC");
    
      if(isset($_POST["btn-procurar"])) {
        $searchUser = $_POST['txt-procurar'];

        $consult = $pdo->query("SELECT *, u.id id_usuario, n.id id_nivel, n.nome nivel_acesso FROM usuario u JOIN usuario_nivel n ON u.id_nivel = n.id WHERE u.id LIKE '%$searchUser%' OR n.nome LIKE '%$searchUser%' OR email LIKE '%$searchUser%' OR usuario LIKE '%$searchUser%' OR data_cadastro LIKE '%$searchUser%' ORDER BY u.data_cadastro DESC");

        if($consult->rowCount() == 0) { 
          echo "<script>alert('Nenhum resultado encontrado!'); window.location.reload();</script>";
        }
      }
  ?>
  <div class="container-fluid container-light">
    <h1 class="titulo">Usuários</h1>
    <?php 
      require_once('procurar.php');

      if($consult->rowCount() == 0) {
        echo "<div class='alert alert-danger text-center'>Nenhum usuário cadastrado!</div>";
      }

      else {
    ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nível de acesso</th>
          <th scope="col">E-mail</th>
          <th scope="col">Usuário</th>
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
          <th scope="row"><button type="button" class="btn btn-dark" data-toggle="modal" data-target="#modalUsuario<?php echo $result['id_usuario']?>"><?php echo $result['id_usuario']?></button></th>
          <td><?php echo $result['nivel_acesso']?></td>
          <td><?php echo $result['email']?></td>
          <td><?php echo $result['usuario']?></td>
          <td><?php echo date_format($date, 'd/m/Y H:i:s'); ?></td>
          <td><a href="usuario-editar.php?id=<?php echo $result['id_usuario']?>" class="btn btn-success">Editar</a></td>
          <td><button onClick="excluirUsuario(<?php echo $result['id_usuario'] ?>)" class="btn btn-danger">Excluir</button></td>
        </tr>
            
        <div class="modal fade" id="modalUsuario<?php echo $result['id_usuario']?>" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal"><span class="bold">ID:</span> <?php echo $result['id_usuario']?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p><span class="bold">Nível de acesso:</span> ID <?php echo $result['id_nivel']?> - <?php echo $result['nivel_acesso']?></p>
                <p><span class="bold">E-mail:</span> <?php echo $result['email']?></p>
                <p><span class="bold">Usuário:</span> <?php echo $result['usuario']?></p>
                <p><span class="bold">Senha:</span> <?php echo $result['senha']?></p>
                <p><span class="bold">Data de cadastro:</span> <?php echo date_format($date, 'd/m/Y H:i:s');?></p>  
              </div>
              <div class="modal-footer">
                <button onClick="excluirUsuario(<?php echo $result['id_usuario'] ?>)" class="btn btn-danger mr-4">Excluir</button>
                <a href="/patrono/php/admin/usuario-editar.php?id=<?php echo $result['id_usuario']?>" class="btn btn-success">Editar</a>
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
    function excluirUsuario(id) {
      if(confirm('Deseja excluir?')) {
        location.href = 'usuario-excluir.php?id=' + id;
      }
    }
  </script>
  <?php } ?>
</body>
</html>