<?php 
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head>
<body>
  <?php require_once('../header.php');?>
  <div class="container container-light col-12 col-sm-9 col-md-7 col-lg-5 col-xl-4">
    <h1 class="titulo-hp">Login</h1>
    <form method="post" class="mx-auto">
      <div class="form-group">
        <label for="email" class="my-0 bold">E-mail</label>
        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Digite o seu e-mail" required>
      </div>
      <div class="form-group">
        <label for="senha" class="my-0 bold">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control form-control-lg" placeholder="Digite a sua senha" minlength="6" maxlenght="20" required>
      </div>
      <button type="submit" name="login" class="btn btn-primary btn-lg btn-block bold">Entrar</button>
    </form>
    <?php
      require('../../db.php');

      if(isset($_POST["login"])) {
        $email = $_POST['email'];
        $senha = md5($_POST['senha']);

        $stmt = $pdo->prepare("SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'");
        $stmt->execute();
        $result = $stmt->fetchObject();
  
        if($result) {
          $_SESSION['id'] = $result->id;
          $_SESSION['email'] = $email;
          $_SESSION['nivel'] = $result->id_nivel;
          header('location:local.php');
        }
        else {
          echo "<div class='alert alert-danger mt-3'>Erro! E-mail ou senha incorretos. Por favor, verifique os dados e tente novamente.</div>";
        }
      }
    ?>
  </div>
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script src="/patrono/js/script.js"></script>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>  
</body>
</html>