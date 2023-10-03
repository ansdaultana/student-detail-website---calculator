<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "exam";
$tablename="finalexam";



$conn = mysqli_connect($servername, $username, $password,$dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$course = $_POST['course'];
$student_name = $_POST['student_name'];
$id = $_POST['id'];
if (empty($course)) {
    echo "Course name cannot be empty";
}
else if (empty($student_name)) {
    echo "Student name cannot be empty";
}else if (empty($id) || !is_numeric($id)) {
    echo "Exam ID must be a valid number";
}
else{
$sql = "SELECT examid FROM $tablename WHERE examid = $id";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "Exam with ID $id exists in database.";
} else {
    if (isset($_POST['insert'])) {
       
        
        $sql = "INSERT INTO $tablename (course, studentname,examid) VALUES ('$course', '$student_name','$id')";
        
        if ($conn->query($sql) === TRUE) {
            echo "Record added successfully";
        } else {
            echo "Error adding record: " . $conn->error;
        }
        }
        
    }}
$conn->close();





?>