<?php
  require('../../db.php');

  session_start();

  if(!isset($_SESSION['email'])) {
    header('location:index.php');
  }
  else {
    $id=$_GET['id'];

    try
    {    
      $stmt = $pdo->prepare("DELETE FROM localidade WHERE id=$id");    
      $stmt->execute();                   
      $stmt = null;

      echo "<script>alert('Local excluído com sucesso!'); window.location.href='local.php'</script>";     
    }
    catch(PDOException $e)
    {
      echo 'Error: ' . $e->getMessage();
    }
  }
?>