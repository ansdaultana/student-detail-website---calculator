<?php

$servername="localhost";
$username="root";
$password="";
$dbname = "exam";
$tablename="finalexam";


$conn= new mysqli($servername,$username,$password,$dbname);
$sql = "SELECT * FROM $tablename";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Course</th><th>Student Name</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>" . $row["examid"] . "</td><td>" . $row["course"] . "</td><td>" . $row["studentname"] . "</td></tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

mysqli_close($conn);
?>
