<!doctype html>
<html>
<head>
  <title>Introduction to PHP (Variables & Arrays)</title>
</head>
<body>

  <?php
    echo '<h1>Hello World!</h1>';
    echo '<h2>Welcome to PHP</h2>';
    echo '<hr>';

    echo '<h2>Variables</h2>';
    $fname = "Mohd";
    $lname = "Omair";
    echo 'Hello !  ' . $fname . ' ' . $lname;
    echo '<hr>';

    echo '<h2>Arrays</h2>';

    // List of favorite sports
    $sports = array("Cricket", "Football", "Tennis");
    $sports[3] = "Basketball";
    

    echo '<ul>';
    echo '<li>' . $sports[0] . '</li>';
    echo '<li>' . $sports[1] . '</li>';
    echo '<li>' . $sports[2] . '</li>';
    echo '<li>' . $sports[3] . '</li>';
  
    echo '</ul>';
  ?>

</body>
</html>
