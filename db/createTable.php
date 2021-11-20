<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sqlDropTables = "DROP TABLE IF EXISTS feedbacks";
$conn->query($sqlDropTables);


$sql = "CREATE TABLE feedbacks (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
email VARCHAR(100) NOT NULL,
phone VARCHAR(50) NOT NULL,
feedback TEXT NOT NULL,
status INT(4) NOT NULL DEFAULT(1) ,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

