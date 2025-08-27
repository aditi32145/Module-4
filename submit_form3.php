<?php
require 'db_connection1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']); 
    $email = htmlspecialchars($_POST['email']);
    $course = htmlspecialchars($_POST['course']);

    $stmt = $conn->prepare("INSERT INTO students (name, email, course) VALUES (:name, :email, :course)");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':course', $course);

    $stmt->execute();

}
?>

<!-- http://localhost/Module-4/submit_form3.php -->