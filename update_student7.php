<?php
require 'db_connection1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int) $_POST['id'];
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $course = htmlspecialchars($_POST['course']);

    $stmt = $conn->prepare("UPDATE students SET name = :name, email = :email, course = :course WHERE id = :id");
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':course', $course);
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: view_students5.php?msg=Student updated successfully");
        exit();
    } else {
        echo "Error updating record.";
    }
}
?>


<!-- http://localhost/Module-4/update_student7.php -->