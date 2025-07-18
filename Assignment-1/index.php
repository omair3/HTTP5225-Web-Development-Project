<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Salary Admin Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2 class="mb-4">University of Toronto - Salaries</h2>

    <form method="GET" class="mb-3 d-flex" role="search">
    <input type="text" name="search" class="form-control me-2" placeholder="Search by name, job title, employer..." value="<?= isset($_GET['search']) ? htmlspecialchars($_GET['search']) : '' ?>">
    <button class="btn btn-primary">Search</button>
</form>

    <a href="insert.php" class="btn btn-success mb-3">+ Add New</a>
    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>Sector</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Salary</th>
                <th>Benefits</th>
                <th>Employer</th>
                <th>Job Title</th>
                <th>Year</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        <?php
        //$result = $conn->query("SELECT * FROM salaries");
        $search = isset($_GET['search']) ? $conn->real_escape_string($_GET['search']) : '';

if ($search) {
    $query = "SELECT * FROM salaries 
              WHERE `First Name` LIKE '%$search%' 
              OR `Last Name` LIKE '%$search%' 
              OR `Employer` LIKE '%$search%' 
              OR `Job Title` LIKE '%$search%'";
} else {
    $query = "SELECT * FROM salaries";
}

$result = $conn->query($query);

        while($row = $result->fetch_assoc()):
        ?>
            <tr>
                <td><?= $row['Sector'] ?></td>
                <td><?= $row['Last Name'] ?></td>
                <td><?= $row['First Name'] ?></td>
                <td><?= $row['Salary'] ?></td>
                <td><?= $row['Benefits'] ?></td>
                <td><?= $row['Employer'] ?></td>
                <td><?= $row['Job Title'] ?></td>
                <td><?= $row['Year'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="delete.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this entry?')">Delete</a>
                </td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>
</body>
</html>
