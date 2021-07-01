<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Contato - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head>
<body>
  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script> 
</body>
  <?php require_once('header.php');?>
  <div class="container container-light col-12 col-sm-10 col-md-8 col-lg-6">
    <h1 class="titulo-hp">Contato</h1>
    <form action="" method="post" class="mx-auto">      
      <div class="form-group">
        <label for="nome" class="my-1 bold">Nome</label>
        <input type="text" name="nome" id="nome" class="form-control form-control-lg" placeholder="Digite o seu nome" value="<?php if(isset($_POST['nome'])){echo $_POST['nome'];}?>">
      </div>
      <div class="form-group">
        <label for="email" class="my-1 bold">E-mail (obrigatório)</label>
        <input type="email" name="email" id="email" class="form-control form-control-lg" placeholder="Digite o seu e-mail" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" required>
      </div>
      <div class="form-group">
        <label for="assunto" class="my-1 bold">Assunto</label>
        <input type="text" name="assunto" id="assunto" class="form-control form-control-lg" placeholder="Digite o assunto" value="<?php if(isset($_POST['assunto'])){echo $_POST['assunto'];}?>">
      </div>
      <div class="form-group">
        <label for="mensagem" class="mb-1 bold">Mensagem (obrigatório)</label>
        <textarea name="mensagem" id="mensagem" class="form-control form-control-lg" rows="5" placeholder="Digite a sua mensagem" required><?php if(isset($_POST['mensagem'])){echo $_POST['mensagem'];}?></textarea>
      </div>
      <button type="submit" name="enviar" class="btn btn-primary btn-lg btn-block bold mb-3">Enviar mensagem</button>
    </form>    
    <?php
      use PHPMailer\PHPMailer\PHPMailer;
      use PHPMailer\PHPMailer\SMTP;
      use PHPMailer\PHPMailer\Exception;      
      // Load Composer's autoloader
      require '../vendor/autoload.php';      
      // Instantiation and passing `true` enables exceptions
      $mail = new PHPMailer(true);
      $mail->CharSet  = 'UTF-8';
      $mail->setLanguage('br');     
      
      require('../db.php');

      if(isset($_POST["enviar"])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];      
        $assunto = $_POST['assunto'];
        $mensagem = nl2br($_POST['mensagem']);
        $corpo = "<strong>Nome:</strong> $nome<br> <strong>E-mail:</strong> $email<br> <strong>Assunto:</strong> $assunto<br> <strong>Mensagem:</strong> $mensagem";

        // substitua EMAIL e SENHA
        try {
          //Server settings
          // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
          $mail->isSMTP(); // Send using SMTP
          $mail->Host       = 'smtp.gmail.com'; // Set the SMTP server to send through
          $mail->SMTPAuth   = true; // Enable SMTP authentication
          $mail->Username   = 'EMAIL'; // SMTP username
          $mail->Password   = 'SENHA'; // SMTP password
          $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
          $mail->Port       = 587; // TCP port to connect to      
          //Recipients
          $mail->setFrom($email, $nome);
          $mail->addAddress('EMAIL'); // Add a recipient
          $mail->addReplyTo($email, $nome);
          // Content
          $mail->isHTML(true); // Set email format to HTML
          $mail->Subject = $assunto;
          $mail->Body    = $corpo;
          $mail->AltBody = strip_tags($corpo);      
          $mail->send();

          $stmt = $pdo->prepare("INSERT INTO contato VALUES(null,'$nome','$email','$assunto','$mensagem',now())");   
          $stmt->execute();
          $stmt = null;
          echo "<script>alert('Mensagem enviada com sucesso!'); window.location.reload();</script>";
        }
        catch (Exception $e) {
          echo "<div class='alert alert-danger'><p>Erro ao enviar mensagem! " . $mail->ErrorInfo . "</div>";
        }
        catch(PDOException $e) {
          echo 'Error: ' . $e->getMessage();
        }
      }
    ?>
  </div>
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script src="/patrono/js/script.js"></script>
</html>