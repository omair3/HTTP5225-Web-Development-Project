<?php
 // $connect = mysqli_connect('localhost', 'root', '', 'schools');
  $connect = mysqli_connect('127.0.0.1', 'root', '', 'schools', 3307);
  if(!$connect){
    die("Connection Failed: " . mysqli_connect_error());
  }
?>