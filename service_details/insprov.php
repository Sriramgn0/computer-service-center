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
   $Place= $_REQUEST['Place']; 
   $Pin= $_REQUEST['Pin']; 
   $Address1= $_REQUEST['Address1']; 
   $Address2= $_REQUEST['Address2']; 
   $Address3= $_REQUEST['Address3']; 
   $Mobile_Number = $_REQUEST['Mobile_Number'];
   $Land_Line_number = $_REQUEST['Landline_number'];
   $Email_Id = $_REQUEST['Email_Id']; 
   $Gstin_Number = $_REQUEST['Gstin_Number']; 
	
	$query = "INSERT INTO service_provider VALUES ('$ServiceProvider_Id','$proname','$Address1','$Address2','$Address3','$Place','$Pin','$Mobile_Number','$Land_Line_number','$Email_Id','$Gstin_Number')";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
														
?>
<body bgcolor="blue">
<div class="bg">

<h2>
<p align="center" style="color:red;font-size:15px;">
<?php echo"successfully inserted"?>
<br>
<a href="right.html" target="right_col"> <b>Logout</b>
</a>

</div>
</body>
</html>