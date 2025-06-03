<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $runs = $_POST['runs'];
    $wickets = $_POST['wickets'];
    $catches = $_POST['catches'];

    $sql = "INSERT INTO IndianTeam (Name, Runs, Wickets, Catches) VALUES ('$name', '$runs', '$wickets', '$catches')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Player added successfully!'); window.location='display.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Player</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Add Player</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Player Name" required>
            <input type="number" name="runs" placeholder="Runs" required>
            <input type="number" name="wickets" placeholder="Wickets" required>
            <input type="number" name="catches" placeholder="Catches" required>
            <button type="submit">Add Player</button>
        </form>
    </div>
</body>
</html>
