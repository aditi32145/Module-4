<?php
require 'db_connection1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizes user input from XSS injection
    // https://www.geeksforgeeks.org/ethical-hacking/what-is-cross-site-scripting-xss/

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $course = htmlspecialchars($_POST['course']);

    // Prepares SQL statement and dynamically binds parameters
    $stmt = $conn->prepare("INSERT INTO students (name, email, course) VALUES (:name, :email, :course)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':course', $course);

    $stmt->execute();
}
?>

<!-- http://localhost/Module-4/submit_form3.php -->