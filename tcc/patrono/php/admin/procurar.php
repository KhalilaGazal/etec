<?php
  if(!isset($_SESSION['email'])) {
    header('location:index.php');
  }
  else { 
?>

<p>
  
</p>

<div class="my-3">
  <form method="post" class="form-inline mx-auto text-center">
    <label for="txt-procurar">Procure por qualquer um dos campos e clique no ID para exibir todas as informações.</label>
    <input name="txt-procurar" id="txt-procurar" class="form-control col-12 col-sm-4 col-lg-5 col-xl-3 mb-2 mb-sm-0 mr-sm-2 mx-xl-2" type="text" pattern="[^'\x22]+">
    <button name="btn-procurar" class="btn btn-primary bold col-12 col-sm-2 col-xl-1" type="submit">Procurar</button>
  </form>    
</div>

<?php } ?>
