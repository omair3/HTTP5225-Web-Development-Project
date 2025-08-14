<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Week 5-Php & MySql</title>
    <style>
        .colorDiv {
            height: 50px;
            width: 100%;
            color: white;
            font-weight: bold;
            padding-left: 10px;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <?php
    //$connect = mysqli_connect('localhost', 'mohdomair', '123dbs', 'colors');
    $connection = mysqli_connect('127.0.0.1', 'root', '', 'colors', 3307);
    if (!$connection) {
        die("Connection Unsuccesful: " . mysqli_connect_error());
    }

    $query = 'SELECT * FROM colors';
    $colors = mysqli_query($connection, $query);

    if ($colors) {
        foreach ($colors as $color) {
            echo '<div class="colorDiv" style="background:' . $color['Hex'] . '">' . $color['Name'] . '</div>';
        }
    }
    ?>
</body>
</html>
