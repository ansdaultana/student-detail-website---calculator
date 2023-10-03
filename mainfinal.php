<!DOCTYPE html>
<html>
  <head>
    <title>Final Exam Page</title>
    <style>
        body {
  margin: 0;
  padding: 0;
}

.header {
  border: 1px solid black;
  text-align: center;
}

.header img {
  width: 50%;
}

.content {
  text-align: center;
}

h1 {
  font-size: 36px;
}

.box {
  background-color: cream;
  padding: 20px;
  display: inline-block;
  border: 1px solid black;
}

h2 {
  font-size: 24px;
}

.buttons {
  margin-top: 20px;
}

button {
  background-color: #d2b48c;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  font-size: 18px;
  margin-right: 10px;
}

button:hover {
  background-color: #8b5a2b;
  cursor: pointer;
}

input[type="date"] {
  margin-top: 20px;
  padding: 10px;
  font-size: 18px;
  border-radius: 5px;
  border: 1px solid #ccc;
  width: 250px;
}

        </style>
  </head>
  <body>
    <div class="header">
      <img src="image.jpg" alt="Image">
    </div>
    <div class="content">
      <h1>Final Exam</h1>
      <div class="box">
        <h2>Choose an option:</h2>
        <div class="buttons">
            <a href="./calculator.php">
          <button class="calculator">Calculator</button>
</a>
<a href="./examdata.php">
          <button class="database">Database</button>
</a ></div>
        <input type="date" id="date">
      </div>
    </div>
    <!-- <script src="script.js"></script> -->
  </body>
</html>
