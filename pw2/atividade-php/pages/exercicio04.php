<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exercício 04</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/custom-exercicio.css">
</head>
<body id="exercicio04">
  <?php include "header-exercicio.html"; ?>
  
  <div class="container col-7">
    <h1>Exercício 04</h1>
    <p>
      Criar um programa que calcule uma equação de segundo grau.
    </p>

    <form method="post" action="#">
      <div class="form-group row">
        <label for="variavelA" class="col-md-1 col-form-label">a:</label>
        <div class="col-md-11">
          <input type="number" class="form-control-lg" name="variavelA" placeholder="-2" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="variavelB" class="col-md-1 col-form-label">b:</label>
        <div class="col-md-11">
          <input type="number" class="form-control-lg" name="variavelB" placeholder="3" required>
        </div>
      </div>

      <div class="form-group row">
        <label for="variavelC" class="col-md-1 col-form-label">c:</label>
        <div class="col-md-11">
          <input type="number" class="form-control-lg" name="variavelC" placeholder="5" required>
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
        $a = $_POST["variavelA"];
        $b = $_POST["variavelB"];
        $c = $_POST["variavelC"];

        if($a!=0)
        {
          $delta = pow($b,2) - 4*$a*$c;

          $x1 = (-$b + sqrt($delta))/(2*$a);
          $x2 = (-$b - sqrt($delta))/(2*$a);

          echo "(" . $a . "x<sup>2</sup>) + (" . $b . "x) + (".$c.") = 0";
          echo "<br><span>&Delta;</span> = $delta";

          if($delta>0)
          {
            echo "<br>Duas raízes reais diferentes e distintas.";
            echo "<br>x' = $x1";
            echo "<br>x'' = $x2";          
          }
          else if($delta==0)
          {
            echo "<br>Duas raízes reais e iguais.";
            echo "<br>x = $x1";
          }
          else
          {
            echo "<br>Raiz inexistente, pois o valor de delta é negativo.";
          }
        }
        else
        {
          echo "Valor de A não pode ser 0.";
        }           
      }
    ?>
  </div>

  <?php include "footer.html"; ?>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>