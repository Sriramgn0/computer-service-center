<!DOCTYPE HTML>
<html>
<title>
  Mahalakshmi
</title>
<style>body, html {
    height: 100%;
    margin: 0;
}

.bg {
   
    background-image: url("s1.jpg");

  
    height: 100%; 

    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}
table, th, td {
    border: 2px solid pink;
  font-family: Arial, Helvetica, sans-serif;
  color:green;
}
</style>
<body >
<div class="bg">
<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'service_details');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
   
   $name=$_REQUEST['name'];  
   $password = $_REQUEST['password'];   
   
	$query = "DELETE FROM employ where Employ_Name='$name'and Password='$password'";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
														
?>
<body bgcolor="blue">
<div class="bg">

<h2>
<p align="center" style="color:red;font-size:15px;">
<?php echo"successfully deleted"?>
<br>
<a href="index1.html" target="full"> <b>Logout</b>
</a>

</div>
</body>
</html>