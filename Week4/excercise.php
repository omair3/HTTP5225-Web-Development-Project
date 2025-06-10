<?php
// -------------------- Get user data from JSONPlaceholder API --------------------
function fetchUserData() {
    $apiUrl = "https://jsonplaceholder.typicode.com/users";
    $jsonData = file_get_contents($apiUrl);
    return json_decode($jsonData, true);    
}

$usersList = fetchUserData();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Users List - PHP For Loop</title>
</head>
<body>
    <h1>Displaying User Info using PHP For Loop</h1>

    <?php
    // Loop through the users using a for loop
    for ($i = 0; $i < count($usersList); $i++) {
        $user = $usersList[$i];

        echo "<hr>"; 
        echo "<h2>User #" . $user["id"] . "</h2>";
        echo "<p><strong>Name:</strong> " . $user["name"] . "</p>";
        echo "<p><strong>Username:</strong> " . $user["username"] . "</p>";
        echo "<p><strong>Email:</strong> <a href='mailto:" . $user["email"] . "'>" . $user["email"] . "</a></p>";

        echo "<h3>Address</h3>";
        echo "<p>Street: " . $user["address"]["street"] . "</p>";
        echo "<p>Suite: " . $user["address"]["suite"] . "</p>";
        echo "<p>City: " . $user["address"]["city"] . "</p>";
        echo "<p>Zipcode: " . $user["address"]["zipcode"] . "</p>";
    }
    ?>
</body>
</html>
