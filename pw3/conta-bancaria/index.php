<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conta Bancária</title>
</head>
<body>
  <?php
    require_once('conta-bancaria.php');

    $conta1 = new Conta();
    $conta1->setNumero(12345);
    $conta1->setSaldo(1000);
    $conta1->depositar(500);
    $conta1->sacar(250);

    echo "<p>Número da conta: " . $conta1->getNumero() . "</p>";
    echo "<p>Saldo: R$" . $conta1->getSaldo() . "</p>";
  ?>
</body>
</html>