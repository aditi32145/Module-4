<?php
require 'db_connection1.php';

if (!isset($_GET['id'])) { //edit_student6.php?id=3 
    die("Invalid request");
}

$id = (int) $_GET['id']; //

// Fetch student data
$stmt = $conn->prepare("SELECT * FROM students WHERE id = :id");
$stmt->bindParam(':id', $id);
$stmt->execute();
$student = $stmt->fetch();

if (!$student) {
    die("Student not found");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="update_student7.php" method="POST">
        <input type="hidden" name="id" value="<?= $student['id']; ?>">

        Name: <input type="text" name="name" value="<?= htmlspecialchars($student['name']); ?>" required><br><br>
        Email: <input type="email" name="email" value="<?= htmlspecialchars($student['email']); ?>" required><br><br>
        Course: <input type="text" name="course" value="<?= htmlspecialchars($student['course']); ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
</body>
</html>

<!-- <input type="hidden" name="id" value="5"> -->

<!-- http://localhost/Module-4/edit_student6.php ?id=6 -->