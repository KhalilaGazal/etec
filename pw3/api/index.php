<?php
  $url = file_get_contents('https://api.hgbrasil.com/weather');
  $json = json_decode($url, true);

  echo '<p>';
    echo $json['results']['city'] . '<br>';
    echo '<img src="' . $json['results']['condition_slug'] . '.jpg" width="30"> ';
    echo $json['results']['date'] . ' ';
    echo $json['results']['time'] . '<br>';
    echo 'Temperatura: ' . $json['results']['temp'] . 'º<br>';
    echo 'Descrição: ' . $json['results']['description'];
  echo '</p>';

  foreach($json ['results']['forecast'] as $value)
  {
    echo '<p>';
      echo '<img src="' . $value['condition'] . '.jpg" width="30"> ';
      echo $value['date'];
      echo ' (' . $value['weekday'] . ')<br>';
      echo 'Máxima: ' . $value['max'] . 'º<br>';
      echo 'Mínima: ' . $value['min'] . 'º<br>';
      echo 'Descrição: ' . $value['description'] . '<br>';      
    echo '</p>';
  }
?>
