<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exercício 07</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/custom-exercicio.css">
</head>
<body id="exercicio07">
  <?php include "header-exercicio.html"; ?>
  
  <div class="container col-7">
    <h1>Exercício 07</h1>
    <p>
      Criar um programa que leia um valor numérico e seja exibido a menor quantidade de notas possível para o valor.
    </p>

    <form method="post" action="#">
      <div class="form-group row">
        <label for="valor" class="col-md-4 col-form-label">Digite um valor (R$):</label>
        <div class="col-md-8">
          <input type="text" class="form-control-lg" name="valor" placeholder="188" step="1" min="0" required>
        </div>
      </div>

      <div class="form-group row">
        <div class="col-12">
          <button class="btn-lg btn-primary" name="result" type="submit">Calcular notas</button>
        </div>        
      </div>
    </form>

    <?php
      if(isset($_POST["result"]))
      {
        $valor = $_POST["valor"];

        $cedula100=$valor/100;
        $cedula50=($valor%100)/50;
        $cedula20=(($valor%100)%50)/20;
        $cedula10=((($valor%100)%50)%20)/10;
        $cedula5=(((($valor%100)%50)%20)%10)/5;
        $cedula2=((((($valor%100)%50)%20)%10)%5)/2;
        $cedula1=((((($valor%100)%50)%20)%10)%5)%2;

        echo "R$" . number_format($valor, 2, ",", ".") . "<br>";
        echo "<br>Notas de R$100,00: " . floor($cedula100);
        echo "<br>Notas de R$50,00: " . floor($cedula50);
        echo "<br>Notas de R$20,00: " . floor($cedula20);
        echo "<br>Notas de R$10,00: " . floor($cedula10);
        echo "<br>Notas de R$5,00: " . floor($cedula5);
        echo "<br>Notas de R$2,00: " . floor($cedula2);
        echo "<br>Notas de R$1,00: " . floor($cedula1);
      }     
    ?>
  </div>

  <?php include "footer.html"; ?>

  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>