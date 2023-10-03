<?php
require("sidebar.php");
?>

<div id="content">
		<h1>Final Exam</h1>
</div>
	<div class="container">
		<input type="text" id="result" disabled>
		<button onclick="addToResult('1')">1</button>
		<button onclick="addToResult('2')">2</button>
		<button onclick="addToResult('3')">3</button>
		<button onclick="addToResult('4')">4</button>
		<button onclick="addToResult('5')">5</button>
		<button onclick="addToResult('6')">6</button>
		<button onclick="addToResult('7')">7</button>
		<button onclick="addToResult('8')">8</button>
		<button onclick="addToResult('9')">9</button>
		<button onclick="addToResult('+')">+</button>
		<button onclick="addToResult('0')">0</button>
		<button onclick="addToResult('-')">-</button>
		<button onclick="addToResult('*')">*</button>
		<button onclick="addToResult('/')">/</button>
		<button onclick="clearResult()">C</button>
		<button onclick="calculateResult()">=</button>
	</div>
	
	<script>
		function addToResult(value) {
			document.getElementById("result").value += value;
		}
		
		function clearResult() {
			document.getElementById("result").value = "";
		}
		
		function calculateResult() {
			var result = eval(document.getElementById("result").value);
			document.getElementById("result").value = result;
		}
	</script>

