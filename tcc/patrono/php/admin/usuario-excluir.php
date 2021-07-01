<?php
  require('../../db.php');

  session_start();

  if(!isset($_SESSION['email'])) {
    header('location:index.php');
  }
  else {
    $id=$_GET['id'];
    if($id!=1) {
      try
      {    
        $stmt = $pdo->prepare("DELETE FROM usuario WHERE id=$id");    
        $stmt->execute();                   
        $stmt = null;

        echo "<script>alert('Usuário excluído com sucesso!'); window.location.href='usuario.php'</script>";     
      }
      catch(PDOException $e)
      {
        echo 'Error: ' . $e->getMessage();
      }
    }
    else {
      echo "<script>alert('Erro! Não é possível excluir o administrador.'); window.location.href='usuario.php'</script>";
    }   
  }
?>