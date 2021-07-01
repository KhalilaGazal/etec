<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Exercício 09</title>
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/custom-exercicio.css">
</head>
<body id="exercicio09">
  <?php include "header-exercicio.html"; ?>
  
  <div class="container col-7">
    <h1>Exercício 09</h1>
    <p>
      Criar um programa que apresente os múltiplos de 3 do intervalo de 1 a 200.
    </p>

    <form method="post" action="#">
      <div class="form-group row">
        <div class="col-12">
          <button class="btn-lg btn-primary" name="result" type="submit">Exibir os múltiplos de 3</button>
        </div>        
      </div>
    </form>

    <?php
      if(isset($_POST["result"]))
      {
        echo "- ";
        for($i=1; $i<=200; $i++)
        {
          if($i%3==0)
          {
            echo "$i - ";
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