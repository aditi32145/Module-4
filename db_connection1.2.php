<?php
// Declare db connection variables at top
$host = "localhost";
$dbname = "student_db";
$username = "root";
$password = "";

// Create connection using MySQLi
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set charset (optional but recommended)
$conn->set_charset("utf8");

// Success message
echo "Database Connected Successfully!";
?>

<!-- http://localhost/Module-4/db_connection1.php -->
