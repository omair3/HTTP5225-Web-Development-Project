<?php
  require('connect.php');

  if(isset($_GET['id']) && is_numeric($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM schools WHERE id = ".$id;
    $deleted = mysqli_query($connect, $query);


    header('Location: index.php');
    exit;
  } else {
    
    header('Location: index.php');
    exit;
  }
?>
