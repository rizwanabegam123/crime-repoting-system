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
  background-color: #CBA75E;
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
  background-image: url("5.jpg");

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
	max-width: 200px;
	padding: 16px;
	background-color: white;
	top: 100px;
	width: 1200px;
	height:200px;
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
  <a href="viewcomplaint.php"><b>VIEW COMPLAINT OF THE PUBLIC<b></a>
     <a href="viewupdated.php"><b>VIEW UPDATED COMPLAINT<b></a>
	 <a href="viewfeed.php"><b>VIEW FEEDBACK<b></a>
   <a href="index.html"><b>LOGOUT<b></a>
</div>
<body>
<div class="bg-img">
<form action="" class="container" method="post">
<?php
         if(isset($_POST['delete'])) {
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = '';
            $conn = mysql_connect($dbhost, $dbuser, $dbpass);
            
            if(! $conn ) {
               die('Could not connect: ' . mysql_error());
            }
				
            $comid = $_POST['comid'];
            
            $sql = "DELETE FROM complaint WHERE comid = '$comid'" ;
            mysql_select_db('police');
            $retval = mysql_query( $sql, $conn );
            
            if(! $retval ) {
               die('Could not delete data: ' . mysql_error());
            }
            
            echo "<center>Deleted data successfully\n</center>";
            
            mysql_close($conn);
         }else {
            ?>
              
<center>
<table>
                     
                     <tr>
                  <center>      <td width = "100">COMPLAINT ID</td>
                        <td><input name = "comid" type = "text" 
                           id = "r"></td>
                     </tr></center>
                     
                     <tr>
                        <td width = "100"> </td>
                        <td> </td>
                     </tr>
                     
                  <center>       <tr>
                        <td width = "100"> </td>
                        <td>
                       <input name = "delete" type = "submit" 
                              id = "delete" value = "Delete">
                        </td>
                     </tr>
					 </center>
                 
                </table>
               </form>
			   
			   </body>
			   </html>
            
			
			<?php
         }
      ?>
