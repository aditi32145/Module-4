<?php
require 'db_connect1.php'; 

if (!isset($_GET['id'])) { // edit_student4.php?id=3
    die("Invalid request");
}

$id = (int) $_GET['id'];

// Fetch student data using prepared statement
$stmt = $conn->prepare("SELECT * FROM students WHERE id = ?");
$stmt->bind_param("i", $id); // i = integer
$stmt->execute();

$result = $stmt->get_result();
$student = $result->fetch_assoc();

if (!$student) {
    die("Student not found");
}

$stmt->close();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="update_student5.php" method="POST">
        <input type="hidden" name="id" value="<?= $student['id']; ?>">

        Name: <input type="text" name="name" value="<?= htmlspecialchars($student['name']); ?>" required><br><br>
        Email: <input type="email" name="email" value="<?= htmlspecialchars($student['email']); ?>" required><br><br>
        Course: <input type="text" name="course" value="<?= htmlspecialchars($student['course']); ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>


<!-- http://localhost/Module-4/mysqli/edit_student4.php -->