<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

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
  background-color: #8B7D7D;
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
  background-image: url("4.jpg");

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
	max-width: 400px;
	padding: 16px;
	background-color: white;
	top: 100px;
	width: 400px;
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
  <a href="addcom.php"><b>ADD COMPLAINT<b></a>
  <a href="viewcom.php"><b>VIEW COMPLAINT<b></a>
   <a href="viewup.php"><b>VIEW UPDATED COMPLAINT<b></a>
  <a href="feedback.php"><b>FEEDBACK<b></a>
  <a href="index.html"><b>LOGOUT<b></a>
</div>
<body>
<div class="bg-img">
<form action="" class="container" method="post">
<h2>VIEW UPDATED COMPLAINT</h2>

    <input type="text"  name="cid" placeholder="Enter Your ComplaintID" required>
	
	<button type="submit" name="submit" class="btn">SUBMIT</button><BR><BR>
	
	<?php
	if (isset($_POST['cid']))
	{
$cid=$_POST['cid'];
mysql_connect("localhost","root","");
mysql_select_db("police");
$r=mysql_query("select *from upcomplaint where cid='$cid'");
echo "<center>";
while($row=mysql_fetch_array($r))
{
$a=$row[0];
$b=$row[1];
$c=$row[2];
        echo "<b>COMPLAINT ID:<b><input type='text' value='$a' class='form-control' readonly='readonly'>";
		echo "USERNAME:<input type='text' value='$b' class='form-control' readonly='readonly'>";
		echo "UPDATED COMPLAINT:<input type='text' value='$c' class='form-control' readonly='readonly'>";
}		
}
echo "</center>"

?>

</table>
</div>
</body>
</html>