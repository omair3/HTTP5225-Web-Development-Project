<?php
require('connect.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    

    $query = "DELETE FROM salaries WHERE id = $id";
    mysqli_query($connect, $query);
}

header('Location: index.php');
exit;
?>
