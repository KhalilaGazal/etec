<?php
  $id=$_GET['id'];

  require('conexao.php');
  
  try
  {   
    $stmt = $pdo->prepare("DELETE FROM noticia WHERE id=$id");    
    $stmt->execute();                   
    $stmt = null;    
    echo "<script>window.location.href='editar-noticia.php'</script>";
  }
  catch(PDOException $e)
  {
    echo 'Error: ' . $e->getMessage();
  }
?>