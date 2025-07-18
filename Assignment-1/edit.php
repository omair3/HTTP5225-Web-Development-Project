<?php
require 'db.php';

if (!isset($_GET['id'])) {
    echo "No record selected.";
    exit;
}

 $id = $_GET['id'];

if (isset($_POST['UpdateSalary'])) {
    $sector = $_POST['sector'];
    $lastName = $_POST['last_name'];
    $firstName = $_POST['first_name'];
    $salary = $_POST['salary'];
    $benefits = $_POST['benefits'];
    $employer = $_POST['employer'];
    $jobTitle = $_POST['job_title'];
    $year = $_POST['year'];

    $query = "UPDATE salaries SET 
              `Sector`='$sector', 
              `Last Name`='$lastName', 
              `First Name`='$firstName', 
              `Salary`=$salary, 
              `Benefits`=$benefits, 
              `Employer`='$employer', 
              `Job Title`='$jobTitle', 
              `Year`=$year 
              WHERE id=$id";

    if (mysqli_query($connect, $query)) {
        header('Location: index.php');
        exit;
    } else {
        echo "Error updating record: " . mysqli_error($connect);
    }
}

$result = mysqli_query($conn, "SELECT * FROM salaries WHERE id=$id");
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Salary Record</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Salary Record</h2>
    <form method="post">
        <div class="row g-3">
            <div class="col-md-6"><input class="form-control" name="sector" placeholder="Sector" value="<?= htmlspecialchars($row['Sector']) ?>" required></div>
            <div class="col-md-6"><input class="form-control" name="employer" placeholder="Employer" value="<?= htmlspecialchars($row['Employer']) ?>" required></div>
            <div class="col-md-6"><input class="form-control" name="last_name" placeholder="Last Name" value="<?= htmlspecialchars($row['Last Name']) ?>" required></div>
            <div class="col-md-6"><input class="form-control" name="first_name" placeholder="First Name" value="<?= htmlspecialchars($row['First Name']) ?>" required></div>
            <div class="col-md-6"><input type="number" step="0.01" class="form-control" name="salary" placeholder="Salary" value="<?= $row['Salary'] ?>" required></div>
            <div class="col-md-6"><input type="number" step="0.01" class="form-control" name="benefits" placeholder="Benefits" value="<?= $row['Benefits'] ?>" required></div>
            <div class="col-12"><input class="form-control" name="job_title" placeholder="Job Title" value="<?= htmlspecialchars($row['Job Title']) ?>" required></div>
            <div class="col-12"><input type="number" class="form-control" name="year" placeholder="Year" value="<?= $row['Year'] ?>" required></div>
        </div>
        <button type="submit" name="UpdateSalary" class="btn btn-primary mt-3">Update</button>
        <a href="index.php" class="btn btn-secondary mt-3">Cancel</a>
    </form>
</div>
</body>
</html>
