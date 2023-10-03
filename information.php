<?php
require("sidebar.php");
?>



	<div id="content">
		<h1>Final Exam</h1>
        <form action='submit_information.php' method='post'>
  <label for='name'>Name:</label>
  <input type='text' id='name' name='name'><br>

  <label for='id'>ID:</label>
  <input type='text' id='id' name='id'><br>

  <label for='date'>Date of Exam:</label>
  <input type='date' id='date' name='date'><br>

  <input type='submit' value='Submit'>
</form>

	</div>

