<?php
include 'connect.php';

$sql = "SELECT * FROM Result ORDER BY ExamNo DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>View Student Results</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Student Results</h2>
        <table>
            <tr>
                <th>Exam No</th>
                <th>Name</th>
                <th>AOOT</th>
                <th>OST</th>
                <th>OT</th>
                <th>Actions</th>
            </tr>
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><?= $row['ExamNo'] ?></td>
                    <td><?= $row['Name'] ?></td>
                    <td><?= $row['AOOT'] ?></td>
                    <td><?= $row['OST'] ?></td>
                    <td><?= $row['OT'] ?></td>
                    <td>
                        <a class="edit-btn" href="update_result.php?id=<?= $row['ExamNo'] ?>">Edit</a>
                        <a class="delete-btn" href="delete_result.php?id=<?= $row['ExamNo'] ?>">Delete</a>
                    </td>
                </tr>
            <?php } ?>
        </table>
    </div>
</body>
</html>
