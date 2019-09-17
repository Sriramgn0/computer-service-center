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
  
   $sriram=$_REQUEST['sriram'];
   $Date="2000-01-01";
   
    $query = "SELECT * FROM account_details
			   WHERE Mobile_NO='$sriram'";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
      while ($arr=mysqli_fetch_row($result))
	  {
		$a=$arr[25];
		$b=$arr[16];
		$c=$arr[26];
	  }
		
	if($c==$Date and $b!=0)
			{
				echo $e;              
			}
																	
?>	

<body bgcolor="white">
<div class="bg" align="center">
<h2 style="text"; align="center" ;><font color="red"> SERVICE DETAILS</font> </h2>
<form method="post" action="4.php">
<font color="orange">
<p>
Service_Reference_Id <input type="text" name="Service_Reference_Id" value="">
<p>
<p>
Account ID<input type="text" name="Account_Id" value="">
<p>
<br>
Issue of stand by product
<input type="submit" name="Issue of STAND BY PRODUCT">
</br>
</body>
<p>
<p>
<a href="right.html" target="right_col" > <b>Home</b>
</a>
</p>
</p>													
</div>
</body>
</html>