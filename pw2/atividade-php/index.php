<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Página Inicial</title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/custom-home.css">
</head>
<body>
  <?php include "pages/header-home.html"; ?>

    <div id="carouselExercicios" class="carousel slide carousel-fade" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExercicios" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExercicios" data-slide-to="1"></li>
        <li data-target="#carouselExercicios" data-slide-to="2"></li>
        <li data-target="#carouselExercicios" data-slide-to="3"></li>
        <li data-target="#carouselExercicios" data-slide-to="4"></li>
        <li data-target="#carouselExercicios" data-slide-to="5"></li>
        <li data-target="#carouselExercicios" data-slide-to="6"></li>
        <li data-target="#carouselExercicios" data-slide-to="7"></li>
        <li data-target="#carouselExercicios" data-slide-to="8"></li>
      </ol>

      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="img/exercicio01.jpg">
          <div class="carousel-caption">
            <h2>Exercício 01</h2>
            <p>Criar um programa em que o usuário digite um valor para a variável A, um valor para a variável B, troque os valores das variáveis de forma que A tenha o valor de B e B tenha o valor de A. Apresentar os valores de A e B.</p>
            <a href="pages/exercicio01.php"><button class="btn-lg btn-primary">Entrar</button></a>           
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/exercicio02.jpg">
          <div class="carousel-caption">
            <h2>Exercício 02</h2>
            <p>Criar um programa em que o usuário digite uma quantidade de dias e seja exibido o total em ano(s), mês(es) e dia(s). Considerar um ano com 365 dias e um mês com 30 dias.</p>
            <a href="pages/exercicio02.php"><button class="btn-lg btn-primary">Entrar</button></a>            
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/exercicio03.jpg">
          <div class="carousel-caption">
            <h2>Exercício 03</h2>
            <p>Criar um programa que leia o salário mensal atual de um funcionário e o percentual de reajuste. Calcular e escrever o valor do novo salário.</p>
            <a href="pages/exercicio03.php"><button class="btn-lg btn-primary">Entrar</button></a>            
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/exercicio04.jpg">
          <div class="carousel-caption">
            <h2>Exercício 04</h2>
            <p>Criar um programa que calcule uma equação de segundo grau.</p>
            <a href="pages/exercicio04.php"><button class="btn-lg btn-primary">Entrar</button></a>            
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/exercicio05.jpg">
          <div class="carousel-caption">
            <h2>Exercício 05</h2>
            <p>Criar um programa que leia 5 valores e exiba: o maior valor, o menor valor, o segundo maior valor e o segundo menor valor.</p>
            <a href="pages/exercicio05.php"><button class="btn-lg btn-primary">Entrar</button></a>            
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/exercicio06.jpg">
          <div class="carousel-caption">
            <h2>Exercício 06</h2>
            <p>Criar um programa que leia o nome de 2 times e o número de gols marcados na partida (para cada time). Escrever o nome do vencedor. Caso não haja vencedor deverá ser impressa a palavra EMPATE.</p>
            <a href="pages/exercicio06.php"><button class="btn-lg btn-primary">Entrar</button></a>            
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/exercicio07.jpg">
          <div class="carousel-caption">
            <h2>Exercício 07</h2>
            <p>Criar um programa que leia um valor numérico e seja exibido a menor quantidade de notas possível para o valor.</p>
            <a href="pages/exercicio07.php"><button class="btn-lg btn-primary">Entrar</button></a>            
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/exercicio08.jpg">
          <div class="carousel-caption">
            <h2>Exercício 08</h2>
            <p>Criar um programa que leia um número inicial e um número final e apresente todas as tabuadas do intervalo.</p>
            <a href="pages/exercicio08.php"><button class="btn-lg btn-primary">Entrar</button></a>            
          </div>
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="img/exercicio09.jpg">
          <div class="carousel-caption">
            <h2>Exercício 09</h2>
            <p>Criar um programa que apresente os múltiplos de 3 do intervalo de 1 a 200.</p>
            <a href="pages/exercicio09.php"><button class="btn-lg btn-primary">Entrar</button></a>            
          </div>
        </div>

      </div>
      <a class="carousel-control-prev" href="#carouselExercicios" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExercicios" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
    </div>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>