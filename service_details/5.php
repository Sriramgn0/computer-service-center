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
   
   
   
   
   $Service_Reference_Id=$_REQUEST['Service_Reference_Id'];
   $Stand_By_Product_Serial_No=$_REQUEST['Stand_By_Product_Serial_No'];
   $Stand_By_Product_Details=$_REQUEST['Stand_By_Product_Details'];
   $Stand_By_Product=1;
   $Account_Id=$_REQUEST['Account_Id'];
   
	$query = "update service_details set Stand_By_Product_Serial_No='$Stand_By_Product_Serial_No',Stand_By_Product_Details='$Stand_By_Product_Details',Stand_By_Product='$Stand_By_Product' where Account_Id='$Account_Id' and Service_Reference_Id='$Service_Reference_Id'";
	$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
?>	
<p>
<p>
<a href="right.html" target="right_col" > <b>Home</b>
</a>
</p>
</p>													
</div>
</body>
</html>