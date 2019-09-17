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
   $Employ_Id=$_REQUEST['Employ_Id'];
   $password=$_REQUEST['password'];  
   $Name = $_REQUEST['Name'];   
   $Address= $_REQUEST['Address']; 
   $Mobile_Number = $_REQUEST['Mobile_Number'];
   $Email_Id = $_REQUEST['Email_Id']; 
   
	
	$query = "UPDATE employ set Employ_Id='$Employ_Id',password='$password',Employ_Name='$Name',Employ_Address='$Address',Phone_Number='$Mobile_Number',Employ_Mail_Id='$Email_Id'";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
?>
<body bgcolor="blue">
<div class="bg">

<h2>
<p align="center" style="color:red;font-size:15px;">
<?php echo"updated inserted"?>
<br>
<a href="index1.html" target=""> <b>Logout</b>
</a>

</div>
</body>
</html>