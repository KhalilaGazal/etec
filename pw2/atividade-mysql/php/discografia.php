<section>
  <div class="box-index">
    <h1 class="titulo">Discografia</h1>

    <h2 class="titulo-discografia">Álbuns de estúdio</h2>
    <div class="slick-album">
      <?php
        require('php/conexao.php');

        $consultaAlbum = $pdo->query("SELECT * FROM album WHERE id_artista=1 AND id BETWEEN 1 AND 5 ORDER BY lancamento DESC;");
  
        while ($album = $consultaAlbum->fetch(PDO::FETCH_ASSOC))
        {
          echo "<div>";
            echo "<a href='php/album.php?id={$album['id']}'>";
              echo "<img class='img-fluid' src='img/album/{$album['img']}.jpg'>";
              echo "<p>{$album['titulo']}</p>";
              echo "<p>" . date('Y', strtotime($album['lancamento'])) . "</p>";
            echo "</a>";
          echo "</div>";
        }
        
        $pdo = null;
      ?>
    </div>

    <h2 class="titulo-discografia">Álbuns ao vivo</h2>
    <div class="slick-album">
      <?php
        require('php/conexao.php');

        $consultaAlbum = $pdo->query("SELECT * FROM album WHERE id_artista=1 AND id=6 ORDER BY lancamento DESC;");
  
        while ($album = $consultaAlbum->fetch(PDO::FETCH_ASSOC))
        {
          echo "<div>";
            echo "<a href='php/album.php?id={$album['id']}'>";
              echo "<img class='img-fluid' src='img/album/{$album['img']}.jpg'>";
              echo "<p>{$album['titulo']}</p>";
              echo "<p>" . date('Y', strtotime($album['lancamento'])) . "</p>";
            echo "</a>";
          echo "</div>";
        }

        $pdo = null;
      ?>          
    </div>

    <h2 class="titulo-discografia">Reproduções estendidas (EPs)</h2>
    <div class="slick-album">
      <?php
        require('php/conexao.php');

        $consultaAlbum = $pdo->query("SELECT * FROM album WHERE id_artista=1 AND id BETWEEN 7 AND 13 ORDER BY lancamento DESC;");
  
        while ($album = $consultaAlbum->fetch(PDO::FETCH_ASSOC))
        {
          echo "<div>";
            echo "<a href='php/album.php?id={$album['id']}'>";
              echo "<img class='img-fluid' src='img/album/{$album['img']}.jpg'>";
              echo "<p>{$album['titulo']}</p>";
              echo "<p>" . date('Y', strtotime($album['lancamento'])) . "</p>";
            echo "</a>";
          echo "</div>";
        }
        
        $pdo = null;
      ?>
    </div>
        
  </div>      
</section>