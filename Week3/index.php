<!DOCTYPE html>
<html lang="en">
<head>
    <title>Zoo Feeding & Magic Number Game</title>
</head>
<body>
    <?php
    // ------------------ Challenge 1: Quirky Zoo Management System ------------------

    echo '<h2>Welcome to the Quirky Zoo Management System!</h2>';

    $currentHour = date("G"); 
    echo "<p>Current time (hour): <strong>$currentHour:00</strong></p>";


    $breakfastMenu = "Bananas, Apples, and Oats";
    $lunchMenu = "Fish, Chicken, and Vegetables";
    $dinnerMenu = "Steak, Carrots, and Broccoli";

    // Check time and display appropriate meal
    if ($currentHour >= 5 && $currentHour <= 9) {
        echo "<p><strong>It's breakfast time!</strong> The animals will eat: $breakfastMenu</p>";
    } elseif ($currentHour >= 12 && $currentHour <= 14) {
        echo "<p><strong>It's lunch time!</strong> The animals will eat: $lunchMenu</p>";
    } elseif ($currentHour >= 19 && $currentHour <= 21) {
        echo "<p><strong>It's dinner time!</strong> The animals will eat: $dinnerMenu</p>";
    } else {
        echo "<p><strong>No feeding right now.</strong> The animals are not being fed at this time.</p>";
    }

    echo "<hr>";

    // ------------------ Challenge 2: PHP Control Structures - Magic Number Game ------------------

    echo "<h2>Magic Number Game</h2>";

    $userNumber = rand(1, 100); // Generate a random number for demonstration
    echo "<p>The number is: <strong>$userNumber</strong></p>";

    // Determine the magic number using FizzBuzz logic
    if ($userNumber % 3 === 0 && $userNumber % 5 === 0) {
        echo "<p>Magic Number: <strong>FizzBuzz</strong></p>";
    } elseif ($userNumber % 3 === 0) {
        echo "<p>Magic Number: <strong>Fizz</strong></p>";
    } elseif ($userNumber % 5 === 0) {
        echo "<p>Magic Number: <strong>Buzz</strong></p>";
    } else {
        echo "<p>Magic Number: <strong>$userNumber</strong></p>";
    }
    ?>
</body>
</html>
