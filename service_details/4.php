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
?>	

<body bgcolor="white">
<div class="bg" align="center">
<h2 style="text"; align="center" ;><font color="red"> STAND BY PRODUCT DETAILS</font> </h2>
<form method="post" action="5.php">
<font color="orange">
<p>
Service_Reference_Id <input type="text" name="Service_Reference_Id" value="<?php echo"$Service_Reference_Id" ?>">
<p>
<p>
Account ID<input type="text" name="Account_Id" value="<?php $query = "select * from service_details where Service_Reference_Id='$Service_Reference_Id'";
																		$var=mysqli_query($dbh,$query);
																		while ($arr=mysqli_fetch_row($var))
																		{echo $arr[2];}
																		?>">
<p>
<p>
SERIAL_NO<input type="text" name="Stand_By_Product_Serial_No" value="">
<p>
<p>
DETAILS<input type="text" name="Stand_By_Product_Details" value="">
<p>
<br>
<input type="submit" name="submit">
</br>
</body>
													
</div>
</body>
</html>