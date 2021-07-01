<!-- 
// todo:
  - mudar cor select
  - escolher arquivo do pc

-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastrar material de apoio - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head> 
<body>
  <?php 
    require_once('header.php');
    require('../../db.php');

    $consult = $pdo->query("SELECT * FROM material_categoria ORDER BY nome");
  ?>
  <div class="container container-light col-12 col-sm-10 col-lg-7">
    <h1 class="titulo">Cadastrar material de apoio</h1>
    <p>Para adicionar uma imagem, renomeie-a com o número do ID (use a extensão .jpg) e coloque-a dentro da pasta material/número do id correspondente à categoria. Obrigatoriamente, a descrição da imagem deverá ser preenchida, caso contrário, a imagem não aparecerá na página "Editar material".</p>
    <form method="post">
      <div class="form-row">
          <div class="form-group col-md-6">
          <label for="titulo" class="bold my-1">Título da postagem</label>
          <input type="text" name="titulo" id="titulo" class="form-control" value="<?php if(isset($_POST['titulo'])){echo $_POST['titulo'];}?>">
        </div>
        <div class="form-group col-md-6">
          <label for="categoria" class="bold my-1">Categoria</label>
          <select name="categoria" id="categoria" class="form-control-lg custom-select my-1 mr-sm-2">
            <?php while ($categoria = $consult->fetch(PDO::FETCH_ASSOC)) { ?>
              <option value="<?php echo $categoria['id'] ?>"><?php echo $categoria['nome'] ?> (ID <?php echo $categoria['id'] ?>)</option>
            <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="descricao" class="mb-1 bold">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" rows="5"><?php if(isset($_POST['descricao'])){echo $_POST['descricao'];}?></textarea>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="titulo-link" class="bold my-1">Título do link</label>
          <input type="text" name="titulo-link" id="titulo-link" class="form-control" value="<?php if(isset($_POST['titulo-link'])){echo $_POST['titulo-link'];}?>">
        </div>
        <div class="form-group col-md-6">
          <label for="link" class="bold my-1">Link</label>
          <input type="text" name="link" id="link" class="form-control" value="<?php if(isset($_POST['link'])){echo $_POST['link'];}?>">
        </div>
      </div>

      <div class="form-group">
        <label for="descricao_imagem" class="bold my-1">Descrição da imagem</label>
        <input type="text" name="descricao_imagem" id="descricao_imagem" class="form-control" value="<?php if(isset($_POST['descricao_imagem'])){echo $_POST['descricao_imagem'];}?>">
      </div>

      <button name="cadastrar" class="btn btn-primary btn-lg btn-block bold mb-2" type="submit">Cadastrar</button>
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
      if(isset($_POST["cadastrar"])) {
        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];
        $descricaoImagem = $_POST['descricao_imagem'];
        $link = $_POST['link'];
        $titulo = $_POST['titulo'];        
        $tituloLink = $_POST['titulo-link'];        

        try {   
          $stmt = $pdo->prepare("INSERT INTO material VALUES(null,'$titulo','$categoria','$descricao','$tituloLink','$link','$descricaoImagem', now())");  
          $stmt->execute();
          $stmt = null;
  
          echo "<script>alert('Dados cadastrados com sucesso!'); window.location.reload();</script>";
        }
        catch(PDOException $e) {
          echo $e->getMessage();
        }
      }
    ?>
  </div>  
</body>
</html>