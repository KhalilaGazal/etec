<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Editar usuário - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head> 
<body>
  <?php 
    require_once('header.php');
    require('../../db.php');

    $id=$_GET['id'];

    if($_SESSION['nivel'] != 1) {
      echo "<script>alert('Você não possui permissão para acessar essa página!'); window.location.href='local.php';</script>";
    }
    else if($id=="") {
      echo "<script>window.location.href='usuario.php';</script>";
    }    
    else {
      $consult = $pdo->query("SELECT * FROM usuario_nivel ORDER BY id DESC");

      $stmt = $pdo->prepare("SELECT *, u.id id_usuario FROM usuario u JOIN usuario_nivel n
      ON u.id_nivel = n.id WHERE u.id=$id");
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
  ?>
  <div class="container container-light col-12 col-sm-10 col-lg-5">
    <h1 class="titulo">Editar usuário</h1>
    <div class="form-group row">
      <label for="id" class="col-sm-2 col-form-label bold">ID</label>
      <div class="col-sm-2">
        <input type="text" id="id" class="form-control" value="<?php if(isset($result['id_usuario'])){echo $result['id_usuario'];}?>" readonly>
      </div>
    </div>

    <form method="post" class="mx-auto">
      <div class="form-group">
        <label for="nivel" class="bold my-1">Nível de acesso</label>
        <select name="nivel" id="nivel" class="custom-select my-1 mr-sm-2">
          <?php while ($nivel = $consult->fetch(PDO::FETCH_ASSOC)) { ?>
            <option value="<?php echo $nivel['id'] ?>" <?php if ($nivel['id'] == $result['id_nivel']){ echo "selected"; } ?>>
              <?php echo $nivel['nome'] ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="email" class="my-0 bold">E-mail</label>
        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Digite o seu e-mail" value="<?php if(isset($result['email'])){echo $result['email'];}?>" required>
      </div>
      <div class="form-group mb-2">
        <label for="usuario" class="my-0 bold">Nome de usuário</label>
        <input type="usuario" name="usuario" id="usuario" class="form-control form-control-lg" placeholder="Digite o seu nome de usuário" min="1" max="20" value="<?php if(isset($result['usuario'])){echo $result['usuario'];}?>" required>
        <small id="passwordHelpBlock" class="form-text text-muted">O nome de usuário deve conter de 1 à 20 caracteres e <span class="bold">não</span> precisa ser único.</small>
      </div>
      <button type="submit" name="editar" class="btn btn-primary btn-lg btn-block bold mt-4 mb-3">Editar</button>
    </form>
    <script src="/patrono/js/jquery-3.4.1.min.js"></script>
    <script src="/patrono/js/popper.min.js"></script>
    <script src="/patrono/js/bootstrap.min.js"></script>
    <script src="/patrono/js/script.js"></script>
    <script>
      $(document).ready(function () {
       
      });

      if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
    <?php
      if(isset($_POST["editar"])) {
        $email = $_POST['email'];
        $usuario = $_POST['usuario'];
        $nivel = $_POST['nivel'];

        try
        {
          $stmt = $pdo->prepare("UPDATE usuario SET email='$email',usuario='$usuario',id_nivel='$nivel' WHERE id=$id");
          $stmt->execute();                   
          $stmt = null;

          if($_SESSION['id'] == $result['id_usuario']) {
            echo "<script>alert('Dados editados com sucesso! Por favor, entre novamente.'); window.location.href='index.php'</script>";
          }
          else {
            echo "<script>alert('Dados editados com sucesso!'); window.location.href='usuario.php'</script>";
          }         
        }
        catch(PDOException $e)
        {
          echo 'Error: ' . $e->getMessage();
        }
      }}
    ?>
  </div>
</body>
</html>