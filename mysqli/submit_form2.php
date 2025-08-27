<?php
require 'db_connect1.php'; // this file should use MySQLi connection ($conn)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']); 
    $email = htmlspecialchars($_POST['email']);
    $course = htmlspecialchars($_POST['course']);

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO students (name, email, course) VALUES (?, ?, ?)");
    
    // Bind parameters: s = string
    $stmt->bind_param("sss", $name, $email, $course);

    // Execute query
    if ($stmt->execute()) {
        echo "New student record inserted successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}

// Close connection (optional here, good practice)
$conn->close();
?>

<!-- http://localhost/Module-4/mysqli/submit_form2.php -->