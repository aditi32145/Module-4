<?php
// Declare db connection variables at top
$host = "localhost";
$dbname = "student_db";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "Database Connected Successfully!";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}
?>

<!-- http://localhost/Module-4/db_connection1.php -->

