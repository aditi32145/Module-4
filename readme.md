# Module 4

### Create a database

```sql
CREATE DATABASE student_db;
```

### Create a table

```sql
CREATE TABLE students (
    id     INT          AUTO_INCREMENT PRIMARY KEY,
    name   VARCHAR(100) NOT NULL,
    email  VARCHAR(100),
    course VARCHAR(50)
);
```

### Without `FETCH_ASSOC`

```php
[
  0 => 1,
  "id" => 1,
  1 => "Aditi",
  "name" => "Aditi"
]

echo $row[1];  // works, but unclear
echo $row["name"]; // also works
```

### With `FETCH_ASSOC`

```php
[
  "id" => 1,
  "name" => "Aditi",
  "email" => "aditi@example.com"
]

echo $row["name"]; // Aditi
```

### Create all the data

```sql
CREATE TABLE all_data (
    id          INT          AUTO_INCREMENT PRIMARY KEY,
    name        VARCHAR(100) NOT NULL,
    email       VARCHAR(100) NOT NULL UNIQUE,
    password    VARCHAR(255) NOT NULL,
    age         INT,
    gender      VARCHAR(10),
    hobbies     TEXT,
    course      VARCHAR(50),
    dob         DATE,
    address     TEXT,
    profile_pic VARCHAR(255),
    created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## Task

- Prevent duplicate emails in the students table.
