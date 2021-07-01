<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exercício 08</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/custom-exercicio.css">
</head>
<body id="exercicio08">
  <?php include "header-exercicio.html"; ?>
  
  <div class="container col-7">
    <h1>Exercício 08</h1>
    <p>
      Criar um programa que leia um número inicial e um número final e apresente todas as tabuadas do intervalo.
    </p>

    <form method="post" action="#">
      <div class="form-group row">
        <label for="numeroInicial" class="col-md-3 col-form-label">Número Inicial:</label>
        <div class="col-md-9">
          <input type="text" class="form-control-lg" name="numeroInicial" placeholder="2" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="numeroFinal" class="col-md-3 col-form-label">Número Final:</label>
        <div class="col-md-9">
          <input type="text" class="form-control-lg" name="numeroFinal" placeholder="5" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-12">
          <button class="btn-lg btn-primary" name="result" type="submit">Exibir tabuada</button>
        </div>        
      </div>
    </form>

    <?php
      if(isset($_POST["result"]))
      {
        $inicial = $_POST["numeroInicial"];
        $final = $_POST["numeroFinal"];

        if($inicial<=$final)
        {
          for($i=$inicial; $i<=$final; $i++)
          {
            for($j=1; $j<=10; $j++)
            {
              $mult=$i*$j;
              echo "$i x $j = $mult <br>";
            }
            echo "<br>";
          }
        }
        else
        {
          for($i=$final; $i<=$inicial; $i++)
          {
            for($j=1; $j<=10; $j++)
            {
              $mult=$i*$j;
              echo "$i x $j = $mult<br>";
            }
            echo "<br>";
          }
        }      
      }     
    ?>
  </div>

  <?php include "footer.html"; ?>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>