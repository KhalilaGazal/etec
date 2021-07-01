<?php session_start(); ?>
<header>
  <nav class="navbar navbar-expand-xl navbar-dark bg-header">
    <a href="/patrono/index.php" class="navbar-brand ml-3 mr-3">
      <img src="/patrono/img/logo.png" height="50" class="d-inline-block align-middle" alt="Patrono">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarAdmin" aria-controls="navbarAdmin" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div id="navbarAdmin" class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/patrono/index.php" class="nav-link ml-3 mr-5">Página Inicial</a>
        </li>
        <li class="nav-item">
          <a href="/patrono/php/preciso-de-ajuda.php" class="nav-link ml-3">Preciso de ajuda</a>
        </li>
        <li class="nav-item">
          <a href="/patrono/php/quero-ajudar.php"class="nav-link ml-3">Quero ajudar</a>
        </li>      
      
        <li class="nav-item dropdown">
          <a id="navbarDropdownMenuLink" class="nav-link dropdown-toggle ml-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Materiais</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a href="/patrono/php/link.php" class="dropdown-item">Links úteis</a>
            <a href="/patrono/php/texto.php" class="dropdown-item">Textos</a>
            <a href="/patrono/php/blog.php" class="dropdown-item">Blogs</a>
            <a href="/patrono/php/livro.php" class="dropdown-item">Livros</a>
            <a href="/patrono/php/video.php" class="dropdown-item">Vídeos</a>
            <a href="/patrono/php/filme.php" class="dropdown-item">Filmes</a>
            <a href="/patrono/php/serie.php" class="dropdown-item">Séries</a>
            <a href="/patrono/php/podcast.php" class="dropdown-item">Podcasts</a>
          </div>   
        </li>
        <li class="nav-item">
          <a href="/patrono/php/contato.php" class="nav-link ml-3">Contato</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="/patrono/php/sobre.php" class="nav-link ml-3 mr-3">Sobre</a>
        </li>
        <?php if($_SESSION) { ?>        
          <li class="nav-item dropdown">
            <a id="navbarCadastrar" class="nav-link dropdown-toggle mr-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['email']; ?></a>
            <div class="dropdown-menu" aria-labelledby="navbarCadastrar">
              <?php if($_SESSION['nivel'] != 3) {?>
                <a href="/patrono/php/admin/local.php" class="dropdown-item">Administração</a>
              <?php } ?>
              <a href="/patrono/php/admin/logout.php" class="dropdown-item">Sair</a>
            </div>
          </li>
        <?php } else { ?>
          <li class="nav-item">
            <a href="/patrono/php/admin/cadastro.php" class="nav-link ml-3">Cadastrar</a>
          </li>
          <li class="nav-item">
          <a href="/patrono/php/admin/index.php" class="nav-link ml-3">Entrar</a>
          </li>
        <?php } ?>
      </ul>      
    </div>
  </nav>
</header>