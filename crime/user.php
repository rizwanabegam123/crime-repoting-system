<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body, html {
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
	left: 500px;
	margin: 20px;
	max-width: 300px;
	padding: 16px;
	background-color: white;
	top: 226px;
	width: 775px;
	height: 400px;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
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


<div class="bg-img">
  <form action="" class="container" method="post">
    <h1>LOGIN</h1>
    <label for="user"><b>USERNAME</b></label>
    <input type="text"  name="username" required>
    <label for="pass"><b>PASSWORD</b></label>
    <input type="password"  name="password" required="" id="myInput">
	<input type="checkbox" onClick="myFunction()">Show Password <br><br>
    <button type="submit" name="submit" class="btn">SUBMIT</button>
	<p><font color="blue"><a href="reg.php"><b>NEW USER?</b></a></p>
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
session_start();
if(isset($_POST['submit']))
{
 mysql_connect('localhost','root','') or die(mysql_error());
 mysql_select_db('police') or die(mysql_error());
 $username=$_POST['username'];
 $password=$_POST['password'];
 if($username!=''&&$password!='')
 {
   $query=mysql_query("select * from register where username='".$username."' and password='".$password."'") or die(mysql_error());
   $res=mysql_fetch_row($query);
   if($res)
   {
    $_SESSION['username']=$username;
   header('location:addcom.php');
   }
   else
   {
    echo "<script> alert('You entered username or password is incorrect')</script>";
   }
 }
 else
 {
  echo "<script>alert('Enter both username and password')></script>";
 }
}
?>