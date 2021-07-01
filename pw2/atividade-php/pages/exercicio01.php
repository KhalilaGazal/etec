<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exercício 01</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">   
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link rel="stylesheet" type="text/css" href="../css/custom-exercicio.css">
</head>
<body id="exercicio01">
  <?php include "header-exercicio.html"; ?>
  
  <div class="container col-7">
    <h1>Exercício 01</h1>
    <p>
      Criar um programa em que o usuário digite um valor para a variável A, um valor para a variável B, troque os valores das variáveis de forma que A tenha o valor de B e B tenha o valor de A. Apresentar os valores de A e B.
    </p>

    <form method="post" action="#">
      <div class="form-group row">
        <label for="valor1" class="col-md-2 col-form-label">Variável A:</label>
        <div class="col-md-10">
          <input type="number" class="form-control-lg" name="valor1" placeholder="5" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="valor2" class="col-md-2 col-form-label">Variável B:</label>
        <div class="col-md-10">
          <input type="number" class="form-control-lg" name="valor2" placeholder="3" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-12">
          <button class="btn-lg btn-primary" name="result" type="submit">Trocar</button>
        </div>        
      </div>
    </form>

    <?php
      if(isset($_POST["result"]))
      {
        $valor1 = $_POST["valor1"];
        $valor2 = $_POST["valor2"];

        $aux = $valor1;
        $valor1 = $valor2;
        $valor2 = $aux;

        echo "Variável A: $valor1<br>";
        echo "Variável B: $valor2<br>";
      }
    ?>
  </div>

  <?php include "footer.html"; ?>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>