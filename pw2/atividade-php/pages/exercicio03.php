<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exercício 03</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/custom-exercicio.css">
</head>
<body id="exercicio03">
  <?php include "header-exercicio.html"; ?>
  
  <div class="container col-7">
    <h1>Exercício 03</h1>
    <p>
      Criar um programa que leia o salário mensal atual de um funcionário e o percentual de reajuste. Calcular e escrever o valor do novo salário.
    </p>

    <form method="post" action="#">
      <div class="form-group row">
        <label for="salarioMensal" class="col-md-3 col-form-label">Salário (R$):</label>
        <div class="col-md-9">
          <input type="number" class="form-control-lg" name="salarioMensal" placeholder="954" step=".01" min="0" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="percentualReajuste" class="col-md-3 col-form-label">Reajuste (%):</label>
        <div class="col-md-9">
          <input type="number" class="form-control-lg" name="percentualReajuste" placeholder="4,61" step=".01" min="0" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-12">
          <button class="btn-lg btn-primary" name="result" type="submit">Calcular</button>
        </div>        
      </div>
    </form>

    <?php
      if(isset($_POST["result"]))
      {
        $salario = $_POST["salarioMensal"];
        $percentualReajuste = $_POST["percentualReajuste"];

        $reajuste = $percentualReajuste;
        $novoSalario = $salario + ($salario * ($reajuste/100));

        echo "Salário atual: R$" . number_format($salario,2,',','.');
        echo "<br>Reajuste: " . number_format($percentualReajuste,2,',','.') . "%";
        echo "<br><br>Novo salário: R$" . number_format($novoSalario,2,',','.');
      }
    ?>
  </div>

  <?php include "footer.html"; ?>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>