<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Patrono - Atendimento psicológico e psiquiátrico gratuito ou com preço simbólico</title>
  <link rel="stylesheet" href="/patrono/css/leaflet.css">
  <script src="/patrono/js/leaflet.js"></script>
  <link rel="stylesheet" href="/patrono/css/bootstrap.min.css">
  <link rel="stylesheet" href="/patrono/css/header.css">
  <link rel="stylesheet" href="/patrono/css/style.css">
  <link rel="icon" href="/patrono/img/favicon.png" type="image/ico">
</head>
<body>
  <?php 
    require('db.php');
    require_once('php/header.php');
  ?>
  <div class="container container-light col-12 col-sm-10 col-lg-8">
    <?php require_once('php/local-busca.php');?>
    <div id="map"></div>

    <div class="row text-center mt-3">
      <div class="col-4">
        <span class="span-markers preco-0">
          <img src="/patrono/img/mapa/marker-green.png" alt=""><p>Gratuito</p> 
        </span>
      </div>
      <div class="col-4">
        <span class="span-markers preco-25">
          <img src="/patrono/img/mapa/marker-yellow.png" alt=""><p>Até R$25,00</p> 
        </span>
      </div>
      <div class="col-4">
        <span class="span-markers preco-50">
          <img src="/patrono/img/mapa/marker-red.png" alt=""><p>Até R$50,00</p> 
        </span>
      </div>
    </div>

    <div class="row text-right mr-1 mr-sm-0">
      <div class="col">
        <p>Dê zoom no mapa para ver todos os marcadores.</p>
      </div>
    </div>
  </div>
  
  <script src="/patrono/js/jquery-3.4.1.min.js"></script>
  <script src="/patrono/js/popper.min.js"></script>
  <script src="/patrono/js/bootstrap.min.js"></script>
  <script src="/patrono/js/script.js"></script>
  <script>
    let bairro = [];
    let celular = [];
    let cep = [];
    let cidade = [];
    let complemento = [];
    let descricao = [];
    let email = [];
    let estado = [];
    let horario = [];
    let icon = [];
    let id = [];
    let latitude = [];
    let link = [];
    let linkGoogleMaps = [];
    let logradouro = [];
    let longitude = [];
    let marker = [];
    let nome = [];
    let numero = [];
    let popup = [];
    let preco = [];
    let precoMax = [];
    let precoMin = [];
    let replaceEndereco = [];
    let telefone = [];

    let LeafIcon = L.Icon.extend({
      options: {
          iconAnchor:   [19, 46],
          popupAnchor:  [0, -36]
      }
    });

    let greenIcon = new LeafIcon({iconUrl: '/patrono/img/mapa/marker-green.png'});
    let yellowIcon = new LeafIcon({iconUrl: '/patrono/img/mapa/marker-yellow.png'});
    let redIcon = new LeafIcon({iconUrl: '/patrono/img/mapa/marker-red.png'});

    // Latitude e longitude iniciais para centralização do mapa
    let latI = -16.264684;
    let longI = -56.480988;
    
    let map = L.map('map').setView([latI, longI], 4);
    L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
      subdomains: ['a','b','c']
    }).addTo(map);

    if(window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
  <?php
    $consult = $pdo->query("SELECT * FROM localidade");
          
    while($result = $consult->fetch(PDO::FETCH_ASSOC)) {        
  ?>
  <script>
    // Armazena os dados num array com índice de mesmo valor do id
    bairro[<?php echo $result['id']?>] = '<?php echo $result['bairro']?>';
    celular[<?php echo $result['id']?>] = '<?php echo $result['celular']?>';
    cep[<?php echo $result['id']?>] = '<?php echo $result['cep']?>';
    cidade[<?php echo $result['id']?>] = '<?php echo $result['cidade']?>';
    complemento[<?php echo $result['id']?>] = '<?php echo $result['complemento']?>';
    descricao[<?php echo $result['id']?>] = '<?php echo $result['descricao']?>';
    email[<?php echo $result['id']?>] = '<?php echo $result['email']?>';
    estado[<?php echo $result['id']?>] = '<?php echo $result['estado']?>';
    horario[<?php echo $result['id']?>] = '<?php echo $result['horario']?>';
    id[<?php echo $result['id']?>] = <?php echo $result['id']?>;
    latitude[<?php echo $result['id']?>] = <?php echo $result['latitude']?>;
    link[<?php echo $result['id']?>] = '<?php echo $result['link']?>';
    logradouro[<?php echo $result['id']?>] = '<?php echo $result['logradouro']?>';
    longitude[<?php echo $result['id']?>] = <?php echo $result['longitude']?>;
    nome[<?php echo $result['id']?>] = '<?php echo $result['nome']?>';
    numero[<?php echo $result['id']?>] = '<?php echo $result['numero']?>';     
    precoMax[<?php echo $result['id']?>] = <?php echo $result['preco_max']?>;
    precoMin[<?php echo $result['id']?>] = <?php echo $result['preco_min']?>;      
    telefone[<?php echo $result['id']?>] = '<?php echo $result['telefone']?>';

    // URL Google Maps
    replaceEndereco[<?php echo $result['id']?>] = `${logradouro[<?php echo $result['id']?>].replace(/ /g,"+")}%2C+${numero[<?php echo $result['id']?>]}+${bairro[<?php echo $result['id']?>].replace(/ /g,"+")}+${cidade[<?php echo $result['id']?>].replace(/ /g,"+")}+${estado[<?php echo $result['id']?>].replace(/ /g,"+")}`;

    linkGoogleMaps[<?php echo $result['id']?>] = `<a href="https://www.google.com/maps/search/?api=1&query=${replaceEndereco[<?php echo $result['id']?>]}" target="_blank">Abrir no Google Maps</a>`;

    // Mudar o marcador conforme faixa de preço (marcador gratuito aparece primeiro)
    if(precoMax[<?php echo $result['id']?>] == 0) {
      preco[<?php echo $result['id']?>] = `gratuito`;
      icon[<?php echo $result['id']?>] = greenIcon;
    }
    else {
      if(precoMax[<?php echo $result['id']?>] <= 25) {
      preco[<?php echo $result['id']?>] = `de R$${precoMin[<?php echo $result['id']?>]},00 até R$${precoMax[<?php echo $result['id']?>]},00`;
      icon[<?php echo $result['id']?>] = yellowIcon;
    }
      else {
        preco[<?php echo $result['id']?>] = `de R$${precoMin[<?php echo $result['id']?>]} até R$${precoMax[<?php echo $result['id']?>]}`;
        icon[<?php echo $result['id']?>] = redIcon;
      }
    }

    // Não exibir campos vazios
    if(descricao[<?php echo $result['id']?>] !== "") {
      descricao[<?php echo $result['id']?>] = `<?php echo $result['descricao']?>`;
    }
    if(horario[<?php echo $result['id']?>] !== "") {
      horario[<?php echo $result['id']?>] = `<span class='bold'>Horário:</span> <?php echo $result['horario']?><br>`;
    }
    if(telefone[<?php echo $result['id']?>] !== "") {
      telefone[<?php echo $result['id']?>] = `<span class='bold'>Telefone:</span> <?php echo $result['telefone']?><br>`;
    }
    if(celular[<?php echo $result['id']?>] !== "") {
      celular[<?php echo $result['id']?>] = `<span class='bold'>Celular:</span> <?php echo $result['celular']?><br>`;
    }
    if(email[<?php echo $result['id']?>] !== "") {
      email[<?php echo $result['id']?>] = `<span class='bold'>E-mail: </span> <?php echo $result['email']?><br>`;
    }
    if(link[<?php echo $result['id']?>] !== "") {
      link[<?php echo $result['id']?>] = `<span class='bold'>Site: </span> <?php echo "<a href='" . $result['link'] . "' target='_blank'>" . $result['link'] . "</a>"?>`;
    }
    if(complemento[<?php echo $result['id']?>] !== "") {
      complemento[<?php echo $result['id']?>] = `<?php echo $result['complemento']?> - `;
    }
    
    popup[<?php echo $result['id']?>] = 
      `<p>
        <span class='bold'>${nome[<?php echo $result['id']?>]}</span><br>
      <p>
      <p>
        <span class='bold'>Preço: </span>${preco[<?php echo $result['id']?>]}
      </p>
      <p>
        ${logradouro[<?php echo $result['id']?>]}, 
        ${numero[<?php echo $result['id']?>]} - 
        ${complemento[<?php echo $result['id']?>]} 
        ${bairro[<?php echo $result['id']?>]}<br>
        ${cidade[<?php echo $result['id']?>]} - 
        ${estado[<?php echo $result['id']?>]}<br>CEP: 
        ${cep[<?php echo $result['id']?>]}<br>
        ${linkGoogleMaps[<?php echo $result['id']?>]}
      </p>
      <p>
        ${horario[<?php echo $result['id']?>]}
        ${telefone[<?php echo $result['id']?>]}
        ${celular[<?php echo $result['id']?>]}
        ${email[<?php echo $result['id']?>]}
        ${link[<?php echo $result['id']?>]}
      </p>`;

    marker[<?php echo $result['id']?>] = L.marker([latitude[<?php echo $result['id']?>],longitude[<?php echo $result['id']?>]], {icon: icon[<?php echo $result['id']?>]}).addTo(map).bindPopup(popup[<?php echo $result['id']?>]);
  </script>
  <?php
    }
    if(isset($_POST["btn-procurar"])) {
      $searchLocal = $_POST['procurar-local'];

      $consult = $pdo->query("SELECT * FROM localidade WHERE cidade LIKE '%$searchLocal%' OR estado LIKE '%$searchLocal%' ORDER BY preco_min");

      if(!empty($searchLocal)) {
        $firstRow = $pdo->query("SELECT * FROM localidade WHERE cidade LIKE '%$searchLocal%' OR estado LIKE '%$searchLocal%' ORDER BY preco_min LIMIT 1");
        $firstResult = $firstRow->fetch(PDO::FETCH_ASSOC);

        if($consult->rowCount()) { 
          $lat1 = $firstResult['latitude'];
          $long1 = $firstResult['longitude'];
  ?>
        <script>map.setView([<?php echo $lat1?>, <?php echo $long1?>], 6);</script>
  <?php
        }
      }
      if(!$consult->rowCount()) { 
        echo "<script>alert('Nenhum resultado encontrado!');</script>";
        $consult = $pdo->query("SELECT * FROM localidade");
      }
    }
    $pdo = null;
  ?>
</body>
</html>