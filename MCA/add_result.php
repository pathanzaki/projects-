<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $aoot = $_POST['aoot'];
    $ost = $_POST['ost'];
    $ot = $_POST['ot'];

    $sql = "INSERT INTO Result (Name, AOOT, OST, OT) VALUES ('$name', '$aoot', '$ost', '$ot')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Result added successfully!'); window.location='view_results.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Student Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Add Student Result</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Student Name" required>
            <input type="number" name="aoot" placeholder="AOOT Marks" required>
            <input type="number" name="ost" placeholder="OST Marks" required>
            <input type="number" name="ot" placeholder="OT Marks" required>
            <button type="submit">Add Result</button>
        </form>
    </div>
</body>
</html>
