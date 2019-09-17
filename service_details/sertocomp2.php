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
   
   
   
   
   $Service_ref_Id=$_REQUEST['Service_ref_Id'];
   $status = $_REQUEST['status'];
   $abc="Sent from service provider";
  	  	  
		if($status==1)
		{
			$query = "update service_details set Service_Provider_To_Company_Status=1,Service_Provider_TO_Company_Date=NOW(),status='$abc' where Service_Reference_Id='$Service_ref_Id'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
		} 
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