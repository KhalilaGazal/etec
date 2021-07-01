<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Editar local - Patrono</title>
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

    $stmt = $pdo->prepare("SELECT * FROM localidade WHERE id=$id");
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
  ?>

  <div class="container container-light col-12 col-sm-10 col-lg-7">
    <h1 class="titulo">Editar local</h1>
    <div class="form-group row">
      <label for="id" class="col-sm-2 col-form-label bold">ID</label>
      <div class="col-sm-2">
        <input type="text" id="id" class="form-control" value="<?php if(isset($result['id'])){echo $result['id'];}?>" readonly>
      </div>
    </div>
          
    <div class="form-group row">
      <label for="endereco" class="col-form-label bold col-sm-2 col-lg-2 col-xl-2">Endereço</label>
      <div class="col-sm-7 col-lg-6 col-xl-7">
        <input type="text" name="endereco" id="endereco" class="form-control">
      </div>
      <div class="col-sm-3 col-lg-4 col-xl-3">
        <button name="endereco" class="btn btn-primary btn-block bold mt-3 mt-sm-0" type="submit" onclick="searchAddress();">Procurar</button>
      </div>
      <div>
        <div id="result" class="mt-2 mb-0"></div>
      </div>
    </div>

    <form action="" method="post" class="mx-auto">
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="latitude" class="bold my-1">Latitude</label>
          <input type="text" name="latitude" id="latitude" class="form-control" value="<?php if(isset($result['latitude'])){echo $result['latitude'];}?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="longitude" class="bold my-1">Longitude</label>
          <input type="text" name="longitude" id="longitude" class="form-control" value="<?php if(isset($result['longitude'])){echo $result['longitude'];}?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="logradouro" class="bold my-1">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro" class="form-control" value="<?php if(isset($result['logradouro'])){echo $result['logradouro'];}?>" required>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="numero" class="bold my-1">Número</label>
          <input type="text" name="numero" id="numero" class="form-control" value="<?php if(isset($result['numero'])){echo $result['numero'];}?>" required>
        </div>
        <div class="form-group col-md-8">
          <label for="complemento" class="bold my-1">Complemento</label>
          <input type="text" name="complemento" id="complemento" class="form-control" value="<?php if(isset($result['complemento'])){echo $result['complemento'];}?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="bairro" class="bold my-1">Bairro</label>
          <input type="text" name="bairro" id="bairro" class="form-control" value="<?php if(isset($result['bairro'])){echo $result['bairro'];}?>" required>
        </div>
        <div class="form-group col-md-4">
          <label for="cep" class="bold my-1">CEP</label>
          <input type="text" name="cep" id="cep" class="form-control" value="<?php if(isset($result['cep'])){echo $result['cep'];}?>" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="cidade" class="bold my-1">Cidade</label>
          <input type="text" name="cidade" id="cidade" class="form-control" value="<?php if(isset($result['cidade'])){echo $result['cidade'];}?>" required>
        </div>
        <div class="form-group col-md-4">
          <label for="estado" class="bold my-1">Estado</label>
          <input type="text" name="estado" id="estado" class="form-control" value="<?php if(isset($result['estado'])){echo $result['estado'];}?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="nome" class="bold my-1">Nome do local</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php if(isset($result['nome'])){echo $result['nome'];}?>" required>
      </div>

      <div class="form-group">
        <label for="descricao" class="mb-1 bold">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" rows="3"><?php if(isset($result['descricao'])){echo $result['descricao'];}?></textarea>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telefone" class="bold my-1">Telefone</label>
          <input type="text" name="telefone" id="telefone" class="form-control" value="<?php if(isset($result['telefone'])){echo $result['telefone'];}?>">
        </div>
        <div class="form-group col-md-6">
          <label for="celular" class="bold my-1">Celular</label>
          <input type="text" name="celular" id="celular" class="form-control" value="<?php if(isset($result['celular'])){echo $result['celular'];}?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email" class="bold my-1">E-mail</label>
          <input type="email" name="email" id="email" class="form-control" value="<?php if(isset($result['email'])){echo $result['email'];}?>">
        </div>
        <div class="form-group col-md-6">
          <label for="link" class="bold my-1">Site</label>
          <input type="text" name="link" id="link" class="form-control" value="<?php if(isset($result['link'])){echo $result['link'];}?>">
        </div>
      </div>
  
      <div class="form-row">
        <div class="form-group col-md-4">
          <p class="bold">Preço</p>
          <div class="form-check mb-2 mr-sm-2">
            <input type="checkbox" name="gratuito" id="gratuito" class="form-check-input" <?php if($result['preco_min'] == 0 && $result['preco_max'] == 0) { echo "checked"; }?>>
            <label class="form-check-label" for="gratuito">Gratuito</label>
          </div>
        </div>
        <div id="div-preco-min" class="form-group col-md-4">
          <label for="preco-min" class="bold my-1">Preço mínimo</label>
          <input type="text" name="preco-min" id="preco-min" class="form-control" value="<?php if(isset($result['preco_min'])){echo $result['preco_min'];}?>">
        </div>
        <div id="div-preco-max" class="form-group col-md-4">
          <label for="preco-max" class="bold my-1">Preço máximo</label>
          <input type="text" name="preco-max" id="preco-max" class="form-control" value="<?php if(isset($result['preco_max'])){echo $result['preco_max'];}?>">
        </div>
      </div>

      <div class="form-group">
        <label for="horario" class="bold my-1">Horário</label>
        <input type="text" name="horario" id="horario" class="form-control">
      </div> 

      <button name="editar" class="btn btn-primary btn-lg btn-block bold mb-2" type="submit">Editar</button>
    </form>
    <script src="/patrono/js/jquery-3.4.1.min.js"></script>
    <script src="/patrono/js/jquery.mask.min.js"></script>
    <script src="/patrono/js/popper.min.js"></script>
    <script src="/patrono/js/bootstrap.min.js"></script>
    <script src="/patrono/js/script.js"></script>
    <script>
      $(document).ready(function () {
        //! doesn't work
        // $('#gratuito').change(function(){
        //   if(this.checked)
        //     $('.div-preco').fadeOut('slow');
        //   else
        //     $('.div-preco').fadeIn('slow');
        // });

        $("#cep").mask('00000-000', {reverse: true});
        // $('#preco-min').mask('#.##0,00', {reverse: true});
        // $('#preco-max').mask('#.##0,00', {reverse: true});
        $('#telefone').mask('(00) 0000-0000');
        $('#celular').mask('(00) 00000-0000');
        });
      });

      if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
    <?php
      if(!empty($gratuito)) {
        $precoMin = number_format(0, 2, ',', '.');
        $precoMax = number_format(0, 2, ',', '.');
      } 
      if(isset($_POST["editar"])) {
        $bairro = $_POST['bairro'];
        $celular = $_POST['celular'];
        $cep = $_POST['cep'];
        $cidade = $_POST['cidade'];
        $complemento = $_POST['complemento'];
        $descricao = $_POST['descricao'];
        $email = $_POST['email'];
        $estado = $_POST['estado'];
        $horario = $_POST['horario'];
        $latitude = $_POST['latitude'];
        $longitude = $_POST['longitude'];      
        $nome = $_POST['nome'];
        $numero = $_POST['numero'];
        $precoMin = $_POST['preco-min'];
        $precoMax = $_POST['preco-max'];
        $logradouro = $_POST['logradouro'];
        $link = $_POST['link'];
        $telefone = $_POST['telefone'];

        if($logradouro == "undefined") {
          echo '<div class="alert alert-danger mt-3">Erro! Campo <span class="bold">logradouro</span> não pode ser <span class="bold">"undefined"</span>.</div>';
        }
        elseif($numero == "undefined") {
          echo '<div class="alert alert-danger mt-3">Erro! Campo <span class="bold">número</span> não pode ser <span class="bold">"undefined"</span>.</div>';
        }
        elseif($bairro == "undefined") {
          echo '<div class="alert alert-danger mt-3">Erro! Campo <span class="bold">bairro</span> não pode ser <span class="bold">"undefined"</span>.</div>';
        }
        elseif($cep == "undefined") {
          echo '<div class="alert alert-danger mt-3">Erro! Campo <span class="bold">CEP</span> não pode ser <span class="bold">"undefined"</span>.</div>';
        }
        elseif($cidade == "undefined") {
          echo '<div class="alert alert-danger mt-3">Erro! Campo <span class="bold">cidade</span> não pode ser <span class="bold">"undefined"</span>.</div>';
        }
        elseif($estado == "undefined") {
          echo '<div class="alert alert-danger mt-3">Erro! Campo <span class="bold">estado</span> não pode ser <span class="bold">"undefined"</span>.</div>';
        }
        elseif(!isset($_POST['gratuito']) && empty($precoMin) && $precoMin != "0") { 
          echo '<div class="alert alert-danger mt-3">Erro! Por favor, preencha o campo <span class="bold">preço mínimo</span>.</div>';
        }
        elseif(!isset($_POST['gratuito']) && (empty($precoMax) && $precoMax != "0")) {
          echo '<div class="alert alert-danger mt-3">Erro! Por favor, preencha o campo <span class="bold">preço máximo</span>.</div>';
        }
        elseif(($precoMin > $precoMax) && ($precoMin != "0" || $precoMax != "0")) {
          echo '<div class="alert alert-danger mt-3">Erro! Preço mínimo <span class="bold">não</span> pode ser maior do que o preço máximo.</div>';
        }
        elseif($precoMax > 50) {
          echo '<div class="alert alert-danger mt-3">Erro! Preço máximo <span class="bold">não</span> pode ser maior do que R$50,00.</div>';
        }
        else {
          if(isset($_POST['gratuito'])) { 
            $precoMin = 0;
            $precoMax = 0;
          }
          if(empty($precoMin)) {
            $precoMin = 0;
          }
          if(empty($precoMax)) {
            $precoMax = 0;
          }

          try {
            $stmt = $pdo->prepare("UPDATE localidade SET latitude='$latitude',longitude='$longitude',logradouro='$logradouro',numero='$numero',complemento='$complemento',bairro='$bairro',cidade='$cidade',estado='$estado',cep='$cep',preco_min='$precoMin',preco_max='$precoMax',nome='$nome',descricao='$descricao',horario='$horario',telefone='$telefone',celular='$celular',email='$email', link='$link' WHERE id=$id");
            $stmt->execute();                   
            $stmt = null;          
            
            echo "<script>alert('Dados editados com sucesso!'); window.location.href='local.php'</script>";
          }
          catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
          }
        }
      }
    ?>
  </div>  
</body>
</html>