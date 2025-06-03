<?php
include 'connect.php';

$sql = "SELECT * FROM IndianTeam ORDER BY PlayerNo DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Players</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Indian Team Players</h2>
        <table>
            <tr>
                <th>Player No</th>
                <th>Name</th>
                <th>Runs</th>
                <th>Wickets</th>
                <th>Catches</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['PlayerNo'] ?></td>
                    <td><?= $row['Name'] ?></td>
                    <td><?= $row['Runs'] ?></td>
                    <td><?= $row['Wickets'] ?></td>
                    <td><?= $row['Catches'] ?></td>
                    <td>
                        <a class="edit-btn" href="display.php?id=<?= $row['PlayerNo'] ?>">Edit</a>
                        <a class="delete-btn" href="delete.php?id=<?= $row['PlayerNo'] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
