<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Result WHERE ExamNo=$id";
    $result = $conn->query($sql);
    $student = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $aoot = $_POST['aoot'];
    $ost = $_POST['ost'];
    $ot = $_POST['ot'];

    $sql = "UPDATE Result SET Name='$name', AOOT='$aoot', OST='$ost', OT='$ot' WHERE ExamNo=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Result updated successfully!'); window.location='view_results.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Student Result</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Update Student Result</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?= $student['ExamNo'] ?>">
            <input type="text" name="name" value="<?= $student['Name'] ?>" required>
            <input type="number" name="aoot" value="<?= $student['AOOT'] ?>" required>
            <input type="number" name="ost" value="<?= $student['OST'] ?>" required>
            <input type="number" name="ot" value="<?= $student['OT'] ?>" required>
            <button type="submit">Update Result</button>
        </form>
    </div>
</body>
</html>
