<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM IndianTeam WHERE PlayerNo=$id";
    $result = $conn->query($sql);
    $player = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $runs = $_POST['runs'];
    $wickets = $_POST['wickets'];
    $catches = $_POST['catches'];

    $sql = "UPDATE IndianTeam SET Name='$name', Runs='$runs', Wickets='$wickets', Catches='$catches' WHERE PlayerNo=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Player updated successfully!'); window.location='dislay.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Player</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Update Player</h2>
        <form method="post">
            <input type="hidden" name="id" value="<?= $player['PlayerNo'] ?>">
            <input type="text" name="name" value="<?= $player['Name'] ?>" required>
            <input type="number" name="runs" value="<?= $player['Runs'] ?>" required>
            <input type="number" name="wickets" value="<?= $player['Wickets'] ?>" required>
            <input type="number" name="catches" value="<?= $player['Catches'] ?>" required>
            <button type="submit">Update Player</button>
        </form>
    </div>
</body>
</html>
