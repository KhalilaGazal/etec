<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exercício 06</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/custom-exercicio.css">
</head>
<body id="exercicio06">
  <?php include "header-exercicio.html"; ?>
  
  <div class="container col-7">
    <h1>Exercício 06</h1>
    <p>
      Criar um programa que leia o nome de 2 times e o número de gols marcados na partida (para cada time). Escrever o nome do vencedor. Caso não haja vencedor deverá ser impressa a palavra EMPATE.
    </p>

    <form method="post" action="#">
      <div class="form-group row">
        <label for="nomeTime1" class="col-md-2 col-form-label">Time 1:</label>
        <div class="col-md-5">
          <input type="text" class="form-control-lg" name="nomeTime1" placeholder="Nome" required>
        </div>
        <div class="col-md-5">
          <input type="number" class="form-control-lg" name="placarTime1" placeholder="Gols" min="0" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="nomeTime2" class="col-md-2 col-form-label">Time 2:</label>
        <div class="col-md-5">
          <input type="text" class="form-control-lg" name="nomeTime2" placeholder="Nome" required>
        </div>
        <div class="col-md-5">
          <input type="number" class="form-control-lg" name="placarTime2" placeholder="Gols" min="0" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-12">
          <button class="btn-lg btn-primary" name="result" type="submit">Mostrar vencedor</button>
        </div>        
      </div>
    </form>

    <?php
      if(isset($_POST["result"]))
      {
        $nomeTime1 = $_POST["nomeTime1"];
        $nomeTime2 = $_POST["nomeTime2"];
        $placarTime1 = $_POST["placarTime1"];
        $placarTime2 = $_POST["placarTime2"];

        if($placarTime1>$placarTime2)
        {
          $vencedor=$nomeTime1;
        }
        elseif($placarTime2>$placarTime1)
        {
          $vencedor=$nomeTime2;
        }
        else
        {
          $vencedor="EMPATE";
        }

        echo "Vencedor: " . strtoupper($vencedor);
      }      
    ?>
  </div>

  <?php include "footer.html"; ?>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>