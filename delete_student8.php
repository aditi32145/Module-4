<?php
require 'db_connection1.php';

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    $stmt = $conn->prepare("DELETE FROM students WHERE id = :id");
    $stmt->bindParam(':id', $id);

    if ($stmt->execute()) {
        header("Location: view_students5.php?msg=Student deleted successfully");
        exit();
    } else {
        echo "Error deleting record.";
    }
} else {
    die("Invalid request");
}
?>

<!-- http://localhost/Module-4/delete_student8.php -->