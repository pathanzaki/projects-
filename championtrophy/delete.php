<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM IndianTeam WHERE PlayerNo=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Player deleted successfully!'); window.location='display.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
