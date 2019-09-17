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
   $status = $_REQUEST['status'];
   $Cou_Name=$_REQUEST['Cou_Name'];
   $Cou_Doc=$_REQUEST['Cou_Doc'];
   $abc="sent_to_service_provider";
  	  	  
		if($status==1)
		{
			$query = "update service_details set Company_TO_ServiceProvider_Status=1, Company_TO_Service_Provider_Date=NOW(),Dispatched_By_Courier='$Cou_Name',Company_TO_ServiceProvider_Dockail_Details='$Cou_Doc' where Service_Reference_Id='$Service_Reference_Id'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
		} 
?>
<?php

	if($status==1)
	{
		$query="select * from employ where Number=99";
     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
      while ($arr=mysqli_fetch_row($result))
	  {		  	  
			$query = "update service_details set Company_To_Service_Provider_Name='$arr[2]',status='$abc' where Service_Reference_Id='$Service_Reference_Id'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
		
	  }
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