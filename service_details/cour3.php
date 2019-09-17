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
   
   
   
   
   $Service_Reference_Id=$_REQUEST['Service_ref_Id'];
   $Cou_Name=$_REQUEST['Cou_Name'];
   $Cou_Doc=$_REQUEST['Cou_Doc'];
   $abc="sent_to_customer";
  	  	  
		
			$query = "update service_details set Company_TO_Customer_Status=1,Courier_name='$Cou_Name',Company_TO_Customer_Dockail_Details='$Cou_Doc' where Service_Reference_Id='$Service_Reference_Id'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
		 
?>
<?php

	 $query="select * from employ where Number=99";
     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
      while ($arr=mysqli_fetch_row($result))
	  {		  	  
			$query = "update service_details set Company_To_Customer_Name='$arr[2]',status='$abc' where Service_Reference_Id='$Service_Reference_Id'";
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