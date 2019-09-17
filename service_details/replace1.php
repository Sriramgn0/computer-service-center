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
   
   
   $New_SerialNumber_If_Replaced=$_REQUEST['New_SerialNumber_If_Replaced'];;
   $Replace1="1";
   $status="ITEM REPLACED";
   


	
	$query = "update service_details set Replace1=10,New_SerialNumber_If_Replaced='$New_SerialNumber_If_Replaced',Company_TO_Service_Provider_Date=NOW(),Delivered_To_Service_Provider_Date=NOW(),Service_Provider_To_Company_Date=NOW(),Delivered_To_Company_Date=NOW(),Delivered_To_Customer_Date=NOW(),status='$status' where Service_Reference_Id='$Service_Reference_Id'";
	$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
		

?>	

<p>
<a href="right.html" target="right_col" > <b>Home</b>
</a>
</p>
</p>													
</div>
</body>
</html>