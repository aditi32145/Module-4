<?php
require 'db_connection1.php';

try {
    // Fetch all students
    $stmt = $conn->query("SELECT id, name, email, course FROM students ORDER BY id ASC");
    $students = $stmt->fetchAll();
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <h2>Student Records</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
        </tr>
        <?php if ($students): ?>
            <?php foreach ($students as $student): ?> 
                <tr>
                    <td><?= htmlspecialchars($student['id']); ?></td>
                    <td><?= htmlspecialchars($student['name']); ?></td>
                    <td><?= htmlspecialchars($student['email']); ?></td>
                    <td><?= htmlspecialchars($student['course']); ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4">No students found.</td>
            </tr>
        <?php endif; ?>
    </table>
</body>
</html>


<!-- http://localhost/Module-4/view_students4.php -->