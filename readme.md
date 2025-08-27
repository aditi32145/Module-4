Create a database --> CREATE DATABASE student_db;
Create a table --> CREATE TABLE students (
    id     INT          AUTO_INCREMENT PRIMARY KEY,
    name   VARCHAR(100) NOT NULL,
    email  VARCHAR(100),
    course VARCHAR(50)
);

Without FETCH_ASSOC
[
  0 => 1,
  "id" => 1,
  1 => "Aditi",
  "name" => "Aditi"
]

echo $row[1];  // works, but unclear
echo $row["name"]; // also works

With FETCH_ASSOC
[
  "id" => 1,
  "name" => "Aditi",
  "email" => "aditi@example.com"
]

echo $row["name"]; // Aditi

