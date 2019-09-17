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
   $ServiceProvider_Id=$_REQUEST['ServiceProvider_Id'];
   $proname=$_REQUEST['proname'];  
   $order1 = $_REQUEST['order1'];   
   $Place= $_REQUEST['Place']; 
   $Pin= $_REQUEST['Pin']; 
   $Mobile_Number = $_REQUEST['Mobile_Number'];
   $Land_Line_number = $_REQUEST['Landline_number'];
   $Email_Id = $_REQUEST['Email_Id']; 
   $Gstin_Number = $_REQUEST['Gstin_Number']; 
	
	$query = "update service_provider set ServiceProvider_Id='$ServiceProvider_Id',Place='$Place',Pin='$Pin',Mobile_Number='$Mobile_Number',Land_Line_number='$Land_Line_number',Email_Id='$Email_Id',Gstin_Number='$Gstin_Number' where proname='$proname' and order1='$order1'";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
														
?>
<body bgcolor="blue">
<div class="bg">

<h2>
<p align="center" style="color:red;font-size:15px;">
<?php echo"successfully inserted"?>
<br>
<a href="index1.html" target="full"> <b>Logout</b>
</a>

</div>
</body>
</html>