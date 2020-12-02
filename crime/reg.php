<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

body {
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1;
  padding: 20px;
  text-align: center;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: lightgreen;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Create three unequal columns that floats next to each other */
.column {
  float: left;
  padding: 10px;
}

/* Left and right column */
.column.side {
  width: 25%;
}

/* Middle column */
.column.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column.side, .column.middle {
    width: 100%;
  }
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
  text-align: center;
}
.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lightgreen;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: pink}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: green;
}body, html {
  height: 100%;
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("2.jpg");

  min-height: 380px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: repeat-x;
  background-size: cover;
  position: relative;
  padding: 500px;
}

/* Add styles to the form container */
.container {
	position: absolute;
	left: 400px;
	margin: 20px;
	max-width: 300px;
	padding: 16px;
	background-color: #94A2A5;
	top: 172px;
	width: 775px;
	height: 700px;
}

/* Full-width input fields */
input[type=text], input[type=password], input[type="text"], input[type="text"] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus, input[type=text]:focus, input[type=text]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit button */
.btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<div class="header">
  <h1>CRIME REPORTING SYSTEM</h1>
</div>
<body background="4.jpg">
<div class="bg-img">
  <form action="" class="container" method="post">
    <h1>REGISTER HERE</h1>
	<label for="name"><b>USERNAME</b></label>
    <input type="text"  name="username" required>
	<label for="pass"><b>PASSWORD</b></label>
    <input type="password"  name="password" required="" id="myInput">
	<input type="checkbox" onClick="myFunction()">Show Password <br><br>
	<label for="gender"><b>GENDER</b></label><br><br>
    <input type="radio"  name="gender" value="male">Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio"  name="gender" value="female">Female<br><br>
    <label for="address"><b>ADDRESS</b></label>
    <input type="text"  name="address" required>
    <label for="con"><b>CONTACT NUMBER</b></label>
    <input type="text"  name="contact" required>
	<button type="submit" name="submit" class="btn">SUBMIT</button>
    </form>
</div>
<script>
function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>
</body>
</html>


<?php
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	
	mysql_connect("localhost","root","");
	mysql_select_db("police");
	mysql_query("insert into register values('$username','$password','$gender','$address','$contact')");
	echo "<script> alert('Inserted Successfully') </script>";
	header("Location:user.php");
	{
		"<script> alert('Not inserted Successfully') </script>";
	}
}
?>
























