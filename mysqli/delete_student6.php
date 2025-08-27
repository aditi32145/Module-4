<?php
require 'db_connect1.php'; // this should have mysqli connection ($conn)

if (isset($_GET['id'])) {
    $id = (int) $_GET['id'];

    // Prepare SQL statement
    $stmt = $conn->prepare("DELETE FROM students WHERE id = ?");
    $stmt->bind_param("i", $id); // i = integer

    if ($stmt->execute()) {
        header("Location: view_students4.php?msg=Student deleted successfully");
        exit();
    } else {
        echo "Error deleting record: " . $stmt->error;
    }

    $stmt->close();
} else {
    die("Invalid request");
}

$conn->close();
?>

<!-- http://localhost/Module-4/mysqli/delete_student6.php -->