<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Cadastrar local - Patrono</title>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head> 
<body>
  <?php 
    require('../../db.php');
    require_once('header.php');
  ?>
  <div class="container container-light col-12 col-sm-10 col-lg-7">
    <h1 class="titulo">Cadastrar local</h1>
    <p>Digite o endereço e clique em procurar. Selecione uma opção dentre os resultados e preencha o restante dos dados.</p>
          
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
          <input type="text" name="latitude" id="latitude" class="form-control" value="<?php if(isset($_POST['latitude'])){echo $_POST['latitude'];}?>" required>
        </div>
        <div class="form-group col-md-6">
          <label for="longitude" class="bold my-1">Longitude</label>
          <input type="text" name="longitude" id="longitude" class="form-control" value="<?php if(isset($_POST['longitude'])){echo $_POST['longitude'];}?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="logradouro" class="bold my-1">Logradouro</label>
        <input type="text" name="logradouro" id="logradouro" class="form-control" value="<?php if(isset($_POST['logradouro'])){echo $_POST['logradouro'];}?>" required>
      </div>

      <div class="form-row">
        <div class="form-group col-md-4">
          <label for="numero" class="bold my-1">Número</label>
          <input type="text" name="numero" id="numero" class="form-control" value="<?php if(isset($_POST['numero'])){echo $_POST['numero'];}?>" required>
        </div>
        <div class="form-group col-md-8">
          <label for="complemento" class="bold my-1">Complemento</label>
          <input type="text" name="complemento" id="complemento" class="form-control" value="<?php if(isset($_POST['complemento'])){echo $_POST['complemento'];}?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="bairro" class="bold my-1">Bairro</label>
          <input type="text" name="bairro" id="bairro" class="form-control" value="<?php if(isset($_POST['bairro'])){echo $_POST['bairro'];}?>" required>
        </div>
        <div class="form-group col-md-4">
          <label for="cep" class="bold my-1">CEP</label>
          <input type="text" name="cep" id="cep" class="form-control" value="<?php if(isset($_POST['cep'])){echo $_POST['cep'];}?>" required>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-8">
          <label for="cidade" class="bold my-1">Cidade</label>
          <input type="text" name="cidade" id="cidade" class="form-control" value="<?php if(isset($_POST['cidade'])){echo $_POST['cidade'];}?>" required>
        </div>
        <div class="form-group col-md-4">
          <label for="estado" class="bold my-1">Estado</label>
          <input type="text" name="estado" id="estado" class="form-control" value="<?php if(isset($_POST['estado'])){echo $_POST['estado'];}?>" required>
        </div>
      </div>

      <div class="form-group">
        <label for="nome" class="bold my-1">Nome do local</label>
        <input type="text" name="nome" id="nome" class="form-control" value="<?php if(isset($_POST['nome'])){echo $_POST['nome'];}?>" required>
      </div>

      <div class="form-group">
        <label for="descricao" class="mb-1 bold">Descrição</label>
        <textarea name="descricao" id="descricao" class="form-control" rows="3"><?php if(isset($_POST['descricao'])){echo $_POST['descricao'];}?></textarea>
      </div>
      
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="telefone" class="bold my-1">Telefone</label>
          <input type="text" name="telefone" id="telefone" class="form-control" value="<?php if(isset($_POST['telefone'])){echo $_POST['telefone'];}?>">
        </div>
        <div class="form-group col-md-6">
          <label for="celular" class="bold my-1">Celular</label>
          <input type="text" name="celular" id="celular" class="form-control" value="<?php if(isset($_POST['celular'])){echo $_POST['celular'];}?>">
        </div>
      </div>

      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email" class="bold my-1">E-mail</label>
          <input type="email" name="email" id="email" class="form-control" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>">
        </div>
        <div class="form-group col-md-6">
          <label for="link" class="bold my-1">Site</label>
          <input type="text" name="link" id="link" class="form-control" value="<?php if(isset($_POST['link'])){echo $_POST['link'];}?>">
        </div>
      </div>
  
      <div class="form-row">
        <div class="form-group col-md-4">
          <p class="bold">Preço</p>
          <div class="form-check mb-2 mr-sm-2">
            <input type="checkbox" name="gratuito" id="gratuito" class="form-check-input" <?php if(!empty($_POST['gratuito'])) { echo "checked"; } ?>>
            <label class="form-check-label" for="gratuito">Gratuito</label>
          </div>
        </div>
        <div class="div-preco form-group col-md-4">
          <label for="preco-min" class="bold my-1">Preço mínimo</label>
          <input type="text" name="preco-min" id="preco-min" class="form-control" value="<?php if(isset($_POST['preco-min'])){echo $_POST['preco-min'];}?>">
        </div>
        <div class="div-preco form-group col-md-4">
          <label for="preco-max" class="bold my-1">Preço máximo</label>
          <input type="text" name="preco-max" id="preco-max" class="form-control" value="<?php if(isset($_POST['preco-max'])){echo $_POST['preco-max'];}?>">
        </div>
      </div>

      <div class="form-group">
        <label for="horario" class="bold my-1">Horário de funcionamento</label>
        <input type="text" name="horario" id="horario" class="form-control">
      </div> 

      <button name="cadastrar" class="btn btn-primary btn-lg btn-block bold mb-2" type="submit">Cadastrar</button>
    </form>
    <script src="/patrono/js/jquery-3.4.1.min.js"></script>
    <script src="/patrono/js/jquery.mask.min.js"></script>
    <script src="/patrono/js/popper.min.js"></script>
    <script src="/patrono/js/bootstrap.min.js"></script>
    <script src="/patrono/js/script.js"></script>
    <script>
      $(document).ready(function () {
        $('#gratuito').change(function(){
          if(this.checked)
            $('.div-preco').fadeOut('slow');
          else
            $('.div-preco').fadeIn('slow');
        });

        $("#cep").mask('00000-000', {reverse: true});
        // $('#preco-min').mask('#.##0,00', {reverse: true});
        // $('#preco-max').mask('#.##0,00', {reverse: true});
        $('#telefone').mask('(00) 0000-0000');
        $('#celular').mask('(00) 00000-0000');
   
      });

      if(window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
      }
    </script>
    <?php
      if(isset($_POST["cadastrar"])) {
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
            $stmt = $pdo->prepare("INSERT INTO localidade VALUES(null,'$latitude','$longitude','$logradouro','$numero','$complemento','$bairro','$cidade','$estado','$cep','$precoMin','$precoMax','$nome','$descricao','$horario','$telefone','$celular','$email','$link',now())");   
            $stmt->execute();
            $stmt = null;

            echo "<script>alert('Dados cadastrados com sucesso!'); window.location.reload();</script>";          
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