<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Editar material de apoio - Patrono</title>
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

    $consult = $pdo->query("SELECT * FROM material_categoria ORDER BY nome");

    $stmt = $pdo->prepare("SELECT *, m.id id_material from material m join material_categoria c on m.id_categoria = c.id where m.id=$id;");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
  ?>
  <div class="container container-light col-12 col-sm-10 col-lg-7">
    <h1 class="titulo my-3">Editar material de apoio</h1>

    <div class="form-group row mt-4">
      <label for="id" class="col-sm-2 col-form-label bold">ID</label>
      <div class="col-sm-2">
        <input type="text" id="id" class="form-control" value="<?php if(isset($result['id_material'])){echo $result['id_material'];}?>" readonly>
      </div>
    </div>

    <form method="post">

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="titulo" class="bold my-1">Título da postagem</label>
          <input type="text" name="titulo" id="titulo" class="form-control" value="<?php if(isset($result['titulo'])){echo $result['titulo'];}?>">
        </div>
        <div class="form-group col-md-6">
          <label for="categoria" class="bold my-1">Categoria</label>
          <select name="categoria" id="categoria" class="form-control-lg custom-select my-1 mr-sm-2">
            <?php while ($categoria = $consult->fetch(PDO::FETCH_ASSOC)) { ?>
              <option value="<?php echo $categoria['id'] ?>" <?php if ($categoria['id'] == $result['id_categoria']){ echo "selected"; } ?>>
                <?php echo $categoria['nome'] ?> (ID <?php echo $categoria['id'] ?>)
              </option>
            <?php } ?>
          </select>
        </div>
      </div>

      <div class="form-group">
        <label for="descricao" class="mb-1 bold">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" rows="5"><?php if(isset($result['descricao'])){echo $result['descricao'];}?></textarea>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="titulo-link" class="bold my-1">Título do link</label>
          <input type="text" name="titulo-link" id="titulo-link" class="form-control" value="<?php if(isset($result['titulo_link'])){echo $result['titulo_link'];}?>">
        </div>
        <div class="form-group col-md-6">
          <label for="link" class="bold my-1">Link</label>
          <input type="text" name="link" id="link" class="form-control" value="<?php if(isset($result['link'])){echo $result['link'];}?>">
        </div>
      </div>

      <div class="form-group">
        <label for="descricao_imagem" class="mb-1 bold">Descrição da imagem (alt)</label>
        <input type="text" name="descricao_imagem" id="descricao_imagem" class="form-control" value="<?php if(isset($result['descricao_imagem'])){echo $result['descricao_imagem'];}?>">
      </div>     

      <button name="editar" class="btn btn-primary btn-lg btn-block bold mb-2" type="submit">Editar</button>
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
        $categoria = $_POST['categoria'];
        $descricao = $_POST['descricao'];
        $descricaoImagem = $_POST['descricao_imagem'];
        $link = $_POST['link'];
        $titulo = $_POST['titulo'];        
        $tituloLink = $_POST['titulo-link'];

        try {   
          $stmt = $pdo->prepare("UPDATE material SET titulo='$titulo',id_categoria='$categoria',descricao='$descricao',titulo_link='$tituloLink',link='$link',descricao_imagem='$descricaoImagem' WHERE id=$id");
          $stmt->execute();                   
          $stmt = null;          
          
          echo "<script>alert('Dados editados com sucesso!'); window.location.href='material.php'</script>";
        }
        catch(PDOException $e) {
          echo $e->getMessage();
        }
      }
    ?>
  </div>  
</body>
</html>