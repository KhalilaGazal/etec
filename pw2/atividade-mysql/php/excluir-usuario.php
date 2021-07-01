<?php
  $id=$_GET['id'];

  require('conexao.php');
  
  try
  {   
    $stmt = $pdo->prepare("DELETE FROM usuario WHERE id=$id");    
    $stmt->execute();                   
    $stmt = null;    
    echo "<script>window.location.href='editar-usuario.php'</script>";
  }
  catch(PDOException $e)
  {
    echo 'Error: ' . $e->getMessage();
  }
?>