<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exercício 02</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/custom-exercicio.css">
</head>
<body id="exercicio02">
  <?php include "header-exercicio.html"; ?>

  <div class="container col-7">
    <h1>Exercício 02</h1>
    <p>
      Criar um programa em que o usuário digite uma quantidade de dias e seja exibido o total em ano(s), mês(es) e dia(s). Considerar um ano com 365 dias e um mês com 30 dias.
    </p>

    <form method="post" action="#">
      <div class="form-group row">
        <label for="valor" class="col-md-2 col-form-label">Dias:</label>
        <div class="col-md-10">
          <input type="number" class="form-control-lg" name="valor" placeholder="1365" step="1" min="0" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-12">
          <button class="btn-lg btn-primary" name="result" type="submit">Exibir</button>
        </div>        
      </div>
    </form>

    <?php
      if(isset($_POST["result"]))
      {
        $valor = $_POST["valor"];

        $ano=$valor/365;
        $mes=($valor%365)/30;
        $dia=($valor%365)%30;

        echo "$valor dias = ";
        echo floor($ano) . " ano(s), ";
        echo floor($mes) . " mês(es) e ";
        echo floor($dia) . " dia(s)";
      }
    ?>
  </div>

  <?php include "footer.html"; ?>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>