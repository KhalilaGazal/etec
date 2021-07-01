<?php
  session_start();
  if(!isset($_SESSION['email'])) {        
    echo "<script>alert('Você não está logado!'); window.location.href='/patrono/php/admin/index.php'</script>";
  } 
  else if($_SESSION['nivel'] == 3) {
    echo "<script>window.location.href='/patrono/index.php'</script>";
  }
  else {
?>
<header>
  <nav class="navbar navbar-expand-xl navbar-dark bg-header">
    <a href="/patrono/index.php" class="navbar-brand ml-3 mr-3">
      <img src="/patrono/img/logo.png" height="50" class="d-inline-block align-middle" alt="Patrono">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="/patrono/index.php" class="nav-link ml-3 mr-5">Página Inicial</a>
        </li>
        <li class="nav-item">
          <a href="/patrono/php/admin/mensagem.php" class="nav-link ml-3">Visualizar mensagens</a>
        </li>   
        <li class="nav-item dropdown">
          <a id="navbarCadastrar" class="nav-link dropdown-toggle ml-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastrar</a>
          <div class="dropdown-menu" aria-labelledby="navbarCadastrar">
            <a href="/patrono/php/admin/local-cadastrar.php" class="dropdown-item">Local</a>
            <a href="/patrono/php/admin/material-cadastrar.php" class="dropdown-item">Material</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a id="navbarEditar" class="nav-link dropdown-toggle ml-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Editar</a>
          <div class="dropdown-menu" aria-labelledby="navbarEditar">
            <a href="/patrono/php/admin/local.php" class="dropdown-item">Local</a>
            <a href="/patrono/php/admin/material.php" class="dropdown-item">Material</a>
            <?php if($_SESSION['nivel'] == 1) { ?>
              <a href="/patrono/php/admin/usuario.php" class="dropdown-item">Usuário</a>
            <?php } ?>
          </div>   
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a id="navbarCadastrar" class="nav-link dropdown-toggle mr-3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['email']; ?></a>
          <div class="dropdown-menu" aria-labelledby="navbarCadastrar">
            <a href="/patrono/php/admin/logout.php" class="dropdown-item">Sair</a>
          </div>   
        </li>
      </ul>
    </div>
  </nav>
</header>
<?php } ?>