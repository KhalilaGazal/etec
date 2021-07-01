<?php 
  session_start();
  session_destroy();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastro - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head>
<body>
  <?php 
    require_once('../header.php');
    require('../../db.php');
  ?>
  <div class="container container-light col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
    <h1 class="titulo-hp text-break">Cadastre-se</h1>
    <form method="post" class="mx-auto">
      <div class="form-group">
        <label for="email" class="my-0 bold">E-mail</label>
        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Digite o seu e-mail" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" required>
      </div>
      <div class="form-group mb-2">
        <label for="nome" class="my-0 bold">Nome de usuário</label>
        <input type="nome" name="nome" id="nome" class="form-control form-control-lg" placeholder="Digite o seu nome de usuário" min="1" max="20" value="<?php if(isset($_POST['nome'])){echo $_POST['nome'];}?>" required>
        <small id="passwordHelpBlock" class="form-text text-muted">Seu nome de usuário deve conter de 1 à 20 caracteres e <span class="bold">não</span> precisa ser único.</small>
      </div>
      <div class="form-group mb-2">
        <label for="senha" class="my-0 bold">Senha</label>
        <input type="password" name="senha" id="senha" class="form-control form-control-lg" placeholder="Digite a sua senha" minlength="6" maxlenght="20" required>
        <small id="passwordHelpBlock" class="form-text text-muted">Sua senha deve conter de 6 à 20 caracteres.</small>
      </div>
      <div class="form-group">
        <label for="confirmacao-senha" class="my-0 bold">Senha</label>
        <input type="password" name="confirmacao-senha" id="confirmarSenha" class="form-control form-control-lg" placeholder="Digite novamente a sua senha" minlength="6" maxlenght="20" required>
      </div>
      <button type="submit" name="cadastrar" class="btn btn-primary btn-lg btn-block bold mt-4 mb-3">Criar conta</button>
    </form>
    <?php
      if(isset($_POST["cadastrar"])) {
        $email = $_POST['email'];
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];
        $confirmacaoSenha = $_POST['confirmacao-senha'];

        $consult = $pdo->prepare("SELECT * FROM usuario WHERE email = '$email'");
        $consult->execute();
        $result = $consult->fetchObject();
    
        if($result) {
          echo "<div class='alert alert-danger'>Erro! E-mail já cadastrado. Por favor, digite um e-mail diferente ou faça <a href='/patrono/php/admin/index.php'>login</a>.</div>";
        }
        else if($senha != $confirmacaoSenha) {
          echo "<div class='alert alert-danger'>Erro! As senhas não são iguais. Por favor, digite novamente.</div>";
        }
        else {
          try {
            $stmt = $pdo->prepare("INSERT INTO usuario VALUES(null,'$email','$nome',md5('$senha'),now(), 3)");
            $stmt->execute();
            $stmt = null;
            
            echo "<script>alert('Cadastro realizado com sucesso!'); window.location.href='/patrono/php/admin/index.php';</script>";
          }
          catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
          }        
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