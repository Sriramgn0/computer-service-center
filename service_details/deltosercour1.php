<!DOCTYPE HTML>
<html>
<title>
  GST
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
<body bgcolor="sky blue">
<div class="bg">
<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'service_details');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
    
	 $da="2000-01-01";
	 $a="0";		
	 
	  $query="SELECT * from service_details S,item_detail I, courier_details C where S.In_Date!='$da' and S.Delivered_To_Service_Provider_Status='$a' and S.Delivered_To_Service_Provider_Date='$da' and I.Account_Id=S.Account_Id and S.Dispatched_By_Courier=C.Courier_Name and Company_To_ServiceProvider_Dockail_Details!='$a'";
	 $result1 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
	 echo"<table border size=1 >";
     echo"<tr><th>ITEM NAME</th><th> SERVICE REFERENCIAL ID</th><th>ACCOUNT_ID</th> <th>ITEM_ID</th><th>COURIER NAME</th><th>COURIER MOBILE NUMBER</th><th>COURIER ADDRESS</th>";
      while ($brr=mysqli_fetch_row($result1))
	  {
		  echo"<tr><td>$brr[35]</td><td>$brr[0]</td><td>$brr[2]</td> <td>$brr[3]</td> <td>$brr[39]</td><td>$brr[41]</td><td>$brr[40]</td></tr>";
	  } 
	   	  
?>

<h2 style="text"; align="center" ;><font color="red"> update delivery report</font> </h2>
<form method="post" action="deltoserp2.php">
<font color="orange">
<p>
SERVICE REFERENCIAL ID <input type="text" name="Service_ref_Id" value="">
<p>
<p>
PRODUCT DELIVERED TO CUSTOMER:
<select name="status">
			<option value="1">YES</option>
			<option value="0">NO</option>
<p>
<br>
<input type="submit" name="submit">
</br>

<p>
<p>
<p>
<a href="right.html" target="right_col" > <b>Home</b>
</a>
</div>
</body>
</html>