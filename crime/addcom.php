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
	max-width: 300px;
	padding: 16px;
	background-color: white;
	top: 100px;
	width: 775px;
	height: 850px;
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
   <label for="id"><b>COMPLAINT ID</b></label>
    <input type="text"  name="comid" id="random-number"/>
	<label for="police"><b>POLICE STATION NAME</b></label><br><br>
    <select name="station">
  <option value="Sellur Police Station">Sellur Police Station</option>
  <option value="Keerathurai Police Station">Keerathurai Police Station</option>
  <option value="AnnaNagar Police Station">AnnaNagar Police Station</option>
  <option value="Sivagangai Road Checkpost Police Station">Sivagangai Road Checkpost Police Station</option>
  <option value="Karimedu Police Station">Karimedu Police Station</option>
   </select><br><br>
	<label for=""><b>SUBJECT</b></label>
    <input type="text"  name="sub" required>
	<label for=""><b>COMPLAINT TYPE</b></label><br><br>
    <select name="cotype">
  <option value="Land Abusingcase">Land Abusing Case</option>
  <option value="Robberycase">Robbery Case</option>
  <option value="Murdercase">Murder Case</option>
  <option value="Accidentcase">Accident Case</option>
     </select><br><br>
	<label for="name"><b>NAME</b></label>
    <input type="text"  name="name" required>
	<label for="addr"><b>ADDRESS</b></label>
    <input type="text"  name="addr" required>
	<label for="city"><b>CITY</b></label>
    <input type="text"  name="city" required>
	<label for="pincode"><b>PINCODE</b></label>
    <input type="text"  name="pincode" required>
	<label for="phone"><b>PHONE</b></label>
    <input type="text"  name="phone" required>
	<label for="com"><b>YOUR COMPLAINT</b></label><br><br>
   <textarea name="complaint" rows="5" cols="30"></textarea><br><br>
 <button type="submit" name="submit" class="btn" onclick="getElementById('random-number').value=Math.floor(Math.random()*1000)">SUBMIT</button>
	</div>
	</body>
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
 $comid=$_POST['comid'];
 $station=$_POST['station'];
 $sub=$_POST['sub'];
 $cotype=$_POST['cotype'];
 $name=$_POST['name'];
 $addr=$_POST['addr'];
  $city=$_POST['city'];
  $pincode=$_POST['pincode'];
 $phone=$_POST['phone'];
 $complaint=$_POST['complaint'];
  mysql_query("insert into complaint values('$comid','$station','$sub','$cotype','$name','$addr','$city','$pincode','$phone','$complaint')");
  echo "<script> alert('Inserted Successfully') </script>";
		{
		"<script> alert('Not inserted Successfully') </script>";
	}
}
?>