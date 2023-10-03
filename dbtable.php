<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "exam";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL statement to create table

$tableName = "finalexam";
$sql = "SELECT * FROM information_schema.tables WHERE table_schema = '$dbname' AND table_name = '$tableName' LIMIT 1";

$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result) == 1) {
    echo "Table $tableName exists.";
} else {
 
    $sql = "CREATE TABLE $tableName (
        examid int(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY NOT NULL,
        course varchar(20) NOT NULL,
        studentname varchar(50) NOT NULL
        )";
        
        // Execute SQL statement
        if ($conn->query($sql) === TRUE) {
            echo "Table $tableName created successfully";
        } else {
            echo "Error creating table: " . $conn->error;
        }
        

}

$conn->close();
?>
