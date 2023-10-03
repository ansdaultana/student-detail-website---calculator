<!DOCTYPE html>
<html>
<head>
	<title>PHP/SQL Form</title>
	<style>
		body {
			background-color: #f2f2f2;
			font-family: Arial, sans-serif;
			padding: 20px;
		}
        .header {
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
  }		.form {
			background-color: white;
			border: 2px solid black;
			padding: 20px;
			width: 200px;
			margin: 0 auto;
		}
		button {
			background-color: #3cbc8d;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 10px;
			cursor: pointer;
			border-radius: 5px;
		}
		button:hover {
			background-color: #6c757d;
		}
		.grey {
			background-color: grey;
		}
	</style>
	<script>
		function changeColor(button) {
			button.classList.add("grey");
		}
	</script>
</head>
<body>
    
<div class="header">
  <h1>PHP/SQL Form</h1>
</div><div class="form">
<a href="./connectdb.php">
        
		<button onclick="changeColor(this)">Connect</button>
    </a>
        <br>
        <a href="./createdb.php">

        <button onclick="changeColor(this)">Create Database</button>
    </a>
        <br>
        <a href="./dbtable.php">
		<button onclick="changeColor(this)">Insert Table</button>
    </a><br>
    <a href="./examdata.php">
		<button onclick="changeColor(this)">Insert Record</button>
    </a>
	</div>
</body>
</html>
