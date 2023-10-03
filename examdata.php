<!DOCTYPE html>
<html>
<head>
	<title>Exam Form</title>
	<style>
		form {
			margin: 20px auto;
			width: 350px;
			border: 1px solid #ccc;
			padding: 30px;
			background-color: #fff;
			box-shadow: 0 0 10px rgba(0,0,0,0.2);
		}
		input[type="text"] {
			padding: 5px;
			margin: 10px 0;
			background-color: #3cbc8d;
			border: none;
			border-radius: 5px;
			width: 100%;
			color: white;
		}
		input[type="submit"] {
			padding: 10px 20px;
			margin-right: 10px;
			background-color: #3cbc8d;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			color: white;
		}
		.btn-group {
			display: flex;
			flex-direction: row;
			justify-content: center;
		}
	</style>


   <script>
    function validateInput() {
  var studentInput = document.getElementById("student_name").value;
  var course = document.getElementById("course").value;

  if(studentInput === "") {
    alert("Please enter a value for Student Name.");
    return false;
  }
  if(course === "") {
    alert("Please enter a value for course.");
    return false;
  }
  if(!/^[a-zA-Z]+$/.test(studentInput)) {
    alert("Student Name should only have characters.");
    return false;
  } else if(studentInput.length > 25) {
    alert("Student Name should not exceed 25 characters.");
    return false;
  }
  
  return true;
}

    </script>

</head>
<body>
  
	<form action="dbInsert.php" method="POST">
		<label for="id">id</label>
		<input type="text" id="id" name="id" >
		<label for="course">Course:</label>
		<input type="text" id="course" name="course" >
		<label for="student_name">Student Name:</label>
		<input type="text" id="student_name" name="student_name" >
		<div class="btn-group">
			<input type="submit" onclick=" validateInput()"  name="insert" value="Insert">
			<form action="dbdisplay.php" method="POST">
				<input type="submit" name="Display" value="Display" formaction="dbdisplay.php">
			</form>
		</div>
	</form>
</body>
</html>
