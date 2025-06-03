<?php
$servername = "localhost";
$username = "root"; // Change if necessary
$password = "";
$database = "ChampionsTrophy2025";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
