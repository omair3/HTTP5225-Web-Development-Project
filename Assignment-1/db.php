<?php

 $conn = mysqli_connect('127.0.0.1', 'root', '', 'assignment-1', 3307);
//$conn = new mysqli($host, $user, $pass, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
