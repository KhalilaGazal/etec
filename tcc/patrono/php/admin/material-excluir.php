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
      $stmt = $pdo->prepare("DELETE FROM material WHERE id=$id");    
      $stmt->execute();                   
      $stmt = null;

      echo "<script>alert('Material excluído com sucesso!'); window.location.href='material.php'</script>";     
    }
    catch(PDOException $e)
    {
      echo 'Error: ' . $e->getMessage();
    }
  }
?>