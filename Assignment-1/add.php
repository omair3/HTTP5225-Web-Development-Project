<?php
if (isset($_POST['AddSalary'])) {
    require('db.php'); 

    $sector = $_POST['sector'];
    $lastName = $_POST['last_name'];
    $firstName = $_POST['first_name'];
    $salary = $_POST['salary'];
    $benefits = $_POST['benefits'];
    $employer = $_POST['employer'];
    $jobTitle = $_POST['job_title'];
    $year = $_POST['year'];

    $query = "INSERT INTO salaries (`Sector`, `Last Name`, `First Name`, `Salary`, `Benefits`, `Employer`, `Job Title`, `Year`) 
              VALUES ('$sector', '$lastName', '$firstName', $salary, $benefits, '$employer', '$jobTitle', $year)";
    
    $result = mysqli_query($conn, $query);

    if ($result) {
        header('Location: index.php');
        exit;
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($conn) . "</div>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Salary</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Add New Salary Entry</h2>
    <form method="post" action="">
        <div class="row g-3">
            <div class="col-md-6">
                <input type="text" class="form-control" name="sector" placeholder="Sector" required>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="employer" placeholder="Employer" required>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="last_name" placeholder="Last Name" required>
            </div>
            <div class="col-md-6">
                <input type="text" class="form-control" name="first_name" placeholder="First Name" required>
            </div>
            <div class="col-md-6">
                <input type="number" step="0.01" class="form-control" name="salary" placeholder="Salary" required>
            </div>
            <div class="col-md-6">
                <input type="number" step="0.01" class="form-control" name="benefits" placeholder="Benefits" required>
            </div>
            <div class="col-12">
                <input type="text" class="form-control" name="job_title" placeholder="Job Title" required>
            </div>
            <div class="col-12">
                <input type="number" class="form-control" name="year" placeholder="Year" required>
            </div>
        </div>
        <button type="submit" name="AddSalary" class="btn btn-primary mt-3">Add</button>
        <a href="index.php" class="btn btn-secondary mt-3">Back</a>
    </form>
</div>
</body>
</html>
