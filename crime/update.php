<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}
{
  margin: 0;
}

/* Style the header */
.header {
  background-color: #f1f1f1 ;
  padding: 20px;
  text-align: center;
}

.navbar {
  overflow: hidden;
  background-color:#969187;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: black ;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: white   ;
}


.column {
  float: left;
  width: 33%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}
{
  box-sizing: border-box;
}

.bg-img {
  /* The image used */
  background-image: url("8.jpg");

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
	background-color: white;
	top: 100px;
	width: 775px;
	height: 500px;
}

/* Full-width input fields */
input[type=text], input[type=text], input[type="text"] {
  width: 100%;
  padding: 5px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=text]:focus,  input[type=text]:focus {
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
<body>
<div class="header">
  <h1>WELCOME TO CRIME REPORTING SYSTEM</h1>
</div>
<div class="navbar">
  <a href="viewcomp.php"><b>VIEW COMPLAINT OF THE PUBLIC<b></a>
  <a href="update.php"><b>UPDATE THE COMPLAINT STATUS<b></a>
    <a href="index.html"><b>LOGOUT<b></a>
	</div>
<body>


<div class="bg-img">
  <form action="" class="container" method="post">
	<h1>UPDATE THE COMPLAINT</h1>
	 <label for="cid"><b>COMPLAINT ID</b></label>
    <input type="text"  name="cid" required>
	<label for="username"><b>USERNAME</b></label><br><br>
     <input type="text"  name="username" required>
	<label for="upcom"><b>UPDATED COMPLAINT</b></label><br><br>
    <textarea name="upcom" rows="5" cols="30">
	</textarea><br><br>
	<button type="submit" name="submit" class="btn">SUBMIT</button>
</div>
	</body>
	</form>
	</html>
	<?php
	if(isset($_POST['submit']))
	{
$host="localhost";
 $username="root";
 $password="";
 $databasename="police";
 $connect=mysql_connect($host,$username,$password);
 $db=mysql_select_db($databasename);
 $cid=$_POST['cid'];
 $username=$_POST['username'];
 $upcom=$_POST['upcom'];
   mysql_query("insert into upcomplaint values('$cid','$username','$upcom')");
  echo "<script> alert('Inserted Successfully') </script>";
		{
		"<script> alert('Not inserted Successfully') </script>";
	}
}
?>
	
	