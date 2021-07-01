<footer>
  <p>
    <?php
      require('php/conexao.php');

      $consulta = $pdo->query("SELECT biografia FROM artista WHERE id=1;");

      while ($artista = $consulta->fetch(PDO::FETCH_ASSOC))
      {
        echo "${artista['biografia']}";
      }
    ?>  
    <a href="https://pt.wikipedia.org/wiki/Twenty_One_Pilots" target="_blank">Ver mais...</a>
  </p>

  <p class="text-center">
    <a href="http://www.twentyonepilots.com/" target="_blank">Site Oficial</a>
  </p>
</footer>