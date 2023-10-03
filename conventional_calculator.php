<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
  <style>
    body {
      background-color: cream;
      font-family: Arial, sans-serif;
    }
    
    .container {
      width: 300px;
      margin: 50px auto;
      background-color: white;
      border: 1px solid brown;
      padding: 20px;
      box-sizing: border-box;
    }
    input[type="number"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 10px;
      box-sizing: border-box;
    }
    .buttons {
  display: inline-block;
}

button {
  display: inline-block;

  width: 100px;
  padding: 8px;
  margin-right: 25px;
  margin-bottom: 10px;
  margin-top: 10 px;
  border: 2px solid #A52A2A;
  border-radius: 5px;
  background-color: #A52A2A;
  color: #fff;
  cursor: pointer;
}

button:hover {
  background-color: #F5DEB3;
  color: #A52A2A;
}



    .result {
  
      padding: 20px;
      border: 1px solid brown;
      margin-top: 10px;
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
    
  <div class="container">
  <h1>Calculator</h1>
  <label for="first-number">First Number:</label>
    <input type="number" id="num1" placeholder="Enter first number">
    <label for="second-number">Second Number:</label>
    <input type="number" id="num2" placeholder="Enter second number">
  <label for="result">Result:</label>
   
    <div class="result" id="result"></div>
    <div class="btn-group">
      <button class="btn" onclick="add()">+</button>
      <button class="btn" onclick="subtract()">-</button>
      <button class="btn" onclick="multiply()">*</button>
      <button class="btn" onclick="divide()">/</button>
    </div>
  </div>
  
  <script>
    function add() {
      var num1 = parseFloat(document.getElementById("num1").value);
      var num2 = parseFloat(document.getElementById("num2").value);
      document.getElementById("result").innerHTML = num1 + num2;
    }
    
    function subtract() {
      var num1 = parseFloat(document.getElementById("num1").value);
      var num2 = parseFloat(document.getElementById("num2").value);
      document.getElementById("result").innerHTML = num1 - num2;
    }
    
    function multiply() {
      var num1 = parseFloat(document.getElementById("num1").value);
      var num2 = parseFloat(document.getElementById("num2").value);
      document.getElementById("result").innerHTML = num1 * num2;
    }
    
    function divide() {
      var num1 = parseFloat(document.getElementById("num1").value);
      var num2 = parseFloat(document.getElementById("num2").value);
      document.getElementById("result").innerHTML = num1 / num2;
    }
  </script>
</body>
</html>
