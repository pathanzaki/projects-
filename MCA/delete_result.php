<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM Result WHERE ExamNo=$id";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Result deleted successfully!'); window.location='view_results.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
