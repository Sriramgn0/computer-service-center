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
	 $query="SELECT * from service_details S,account_details A where S.In_Date!='$da' and S.Company_To_ServiceProvider_Status='$a' and S.Company_To_Service_Provider_Date='$da' and A.ACCOUNT_ID=S.ACCOUNT_ID";
	 $result1 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
	 echo"<table border size=1 >";
     echo"<tr><th>NAME</th><th> SERVICE REFERENCIAL ID</th><th>ACCOUNT_ID</th> <th>ITEM_ID</th><th>SERVICE PROVIDER NAME</th><th>MOBILE NO CUSTOMER</th>";
      while ($brr=mysqli_fetch_row($result1))
	  {
		  echo"<tr><td>$brr[34]</td><td>$brr[0]</td><td>$brr[2]</td> <td>$brr[3]</td> <td>$brr[7]</td><td>$brr[40]</td></tr>";
	  } 
	   	  
?>


<p>
<p>
<p>
<a href="right.html" target="right_col" > <b>Home</b>
</a>
</div>
</body>
</html>