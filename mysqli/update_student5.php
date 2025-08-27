<?php
require 'db_connect1.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = (int) $_POST['id'];
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $course = htmlspecialchars($_POST['course']);

    // Prepare SQL with placeholders
    $stmt = $conn->prepare("UPDATE students SET name = ?, email = ?, course = ? WHERE id = ?");
    $stmt->bind_param("sssi", $name, $email, $course, $id); // s=string, i=integer

    if ($stmt->execute()) {
        header("Location: view_students4.php?msg=Student updated successfully");
        exit();
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!-- http://localhost/Module-4/mysqli/update_student5.php -->