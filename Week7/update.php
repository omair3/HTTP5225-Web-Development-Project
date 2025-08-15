<?php
require('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $query = "SELECT * FROM schools WHERE id = $id";
        $result = mysqli_query($connect, $query);
        $school = mysqli_fetch_assoc($result);
    } else {
        echo "No school selected.";
        exit;
    }
}



if (isset($_POST['UpdateSchool'])) {
    $id = $_POST['id'];
    $BoardName = $_POST['BoardName'];
    $SchoolName = $_POST['SchoolName'];
    $Email = $_POST['Email'];

    $query = "UPDATE schools SET 
                `Board Name` = '$BoardName', 
                `School Name` = '$SchoolName', 
                `Email` = '$Email' 
              WHERE id = $id";

    $update = mysqli_query($connect, $query);

    if ($update) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error updating record.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update School</title>
</head>
<body>
    <h1>Update School</h1>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $school['id']; ?>">

        <p>
            <label>Board Name:</label><br>
            <input type="text" name="BoardName" value="<?php echo $school['Board Name']; ?>" required>
        </p>

        <p>
            <label>School Name:</label><br>
            <input type="text" name="SchoolName" value="<?php echo $school['School Name']; ?>" required>
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="Email" value="<?php echo $school['Email']; ?>" required>
        </p>

        <input type="submit" name="UpdateSchool" value="Update">
        <a href="index.php">Cancel</a>
    </form>
</body>
</html>
