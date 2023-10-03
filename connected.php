<?php
require("sidebar.php");

$servername = "localhost"; 
$username = "root"; 
$password = ""; 
 $dbname = $_POST['dbname'];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$connected=true;

?>

<div id="content">
		<h1>Final Exam</h1>
   
        
		<h3>Successfully connected.</h3>
        
        
</div>