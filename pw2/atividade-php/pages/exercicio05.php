<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exercício 05</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/custom-exercicio.css">
</head>
<body id="exercicio05">
  <?php include "header-exercicio.html"; ?>
  
  <div class="container col-7">
    <h1>Exercício 05</h1>
    <p>
      Criar um programa que leia 5 valores e exiba: o maior valor, o menor valor, o segundo maior valor e o segundo menor valor.
    </p>

    <form method="post" action="#">
      <?php
        for($i=1; $i<=5; $i++)
        {
          echo "<div class='form-group row'>";
            echo "<label for='valor$i' class='col-md-2 col-form-label'>Valor $i:</label>";
            echo "<div class='col-md-10'>";
              echo "<input type='number' class='form-control-lg' name='valor$i' placeholder='$i' required>";
            echo "</div>";
          echo "</div>";
        }
      ?>

      <div class="form-group row">
        <div class="col-12">
          <button class="btn-lg btn-primary" name="result" type="submit">Enviar</button>
        </div>        
      </div>  
    </form>

    <?php
      if(isset($_POST["result"]))
      {
        $c=1;
        for($i=0; $i<=4; $i++)
        {
          $valor[$i] = isset($_POST["valor".$c])?$_POST["valor".$c]:0;
          echo "Valor " . $c++ . ": $valor[$i] <br>";
        }

        rsort($valor);

        echo "<br>Maior valor: $valor[0]";
        echo "<br>Menor valor: $valor[4]";
        echo "<br>Segundo maior valor: $valor[1]";
        echo "<br>Segundo menor valor: $valor[3]";
      }
    ?>
  </div>

  <?php include "footer.html"; ?>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>