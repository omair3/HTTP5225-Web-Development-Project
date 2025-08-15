<?php
  include('connect.php');

  
  $query = 'SELECT * FROM schools';
  $schools = mysqli_query($connect, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Toronto Board Schools</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-4">
  <h1 class="mb-3">Toronto Board Schools</h1>
  <p>This is a website to showcase all Toronto schools.</p>

  <a href="add.php" class="btn btn-primary mb-3">Add New School</a>

  <?php
    foreach($schools as $school){
      echo '<div class="mb-2 p-2 border rounded">
              <strong>'.$school['School Name'].'</strong>
              <form action="update.php" method="GET" style="display:inline;">
                <input type="hidden" name="id" value="'.$school['id'].'">
                <input type="submit" name="edit" value="Edit" class="btn btn-warning btn-sm">
              </form>
              <form action="delete.php" method="GET" style="display:inline;">
                <input type="hidden" name="id" value="'.$school['id'].'">
                <input type="submit" name="delete" value="Delete" class="btn btn-danger btn-sm">
              </form>
            </div>';
    }
  ?>
</body>
</html>
