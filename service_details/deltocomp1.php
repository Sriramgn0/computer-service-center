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
    
	 $name1 = $_REQUEST['name1'];
	 $da="2000-01-01";
	 
	 
	 $query = "SELECT * from item_detail where Item_Name='$name1'";
     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
      while ($arr=mysqli_fetch_row($result))
	  {		  
		$baa=$arr[3];
		$a=$arr[1];
				
	 $query="SELECT * from service_details where Item_Id='$a' and Delivered_To_Company_Date ='$da' and Service_Provider_To_Company_Date!='$da'";
	 $result1 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
	 echo"<table border size=1 >";
     echo"<tr><th>ITEM NAME</th><th> SERVICE REFERENCIAL ID</th><th>BARCODE NO</th><th>ACCOUNT_ID</th> <th>ITEM_ID</th><th>SENT DATE</th><th>SERVICE PROVIDER RETURNED DATE</th><th>SENT BY EMPLOYE</th>";
      while ($brr=mysqli_fetch_row($result1))
	  {
		  echo"<tr> <td>$name1</td><td>$brr[0]</td> <td>$baa</td><td>$brr[2]</td> <td>$brr[3]</td><td>$brr[10]</td><td>$brr[14]</td><td>$brr[13]</td></tr>";
	  } 
			}	  
?>

<h2 style="text"; align="center" ;><font color="red"> update delivery report</font> </h2>
<form method="post" action="deltocomp2.php">
<font color="orange">
<p>
SERVICE REFERENCIAL ID <input type="text" name="Service_ref_Id" value="">
<p>
<p>
PRODUCT DELIVERED TO COMPANY:
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