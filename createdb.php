<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "exam";




$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = '$dbname'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "Database $dbname already exists";
} else {
    $sql = "CREATE DATABASE $dbname";
    if ($conn->query($sql) === TRUE) {
        echo "Database $dbname created successfully";
    } else {
        echo "Error creating database: " . $conn->error;
    }
}

$conn->close();


?>