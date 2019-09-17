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
    
	 $phno = $_REQUEST['phno'];
	 $da="2000-01-01";
	 $query = "SELECT * from account_details where Mobile_Number='$phno'";
     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
      while ($arr=mysqli_fetch_row($result))
	  {		  
		$baa=$arr[1];
		$a=$arr[0];
		$abc="NO";
		$xxx="";
		$yyy="";
		
			$query="SELECT * from service_details where ACCOUNT_Id='$a'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
			while ($crr=mysqli_fetch_row($result2))	
				if($crr[25]==1)
						{
							$abc="YES";
						}
	  }
?>
<?php	  
			$query="SELECT * from service_details where ACCOUNT_Id='$a'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
			while ($crr=mysqli_fetch_row($result2))
			{
				$zzz=$crr[31];	
				$a1=$crr[21];
				$a2=$crr[20];
					if($zzz=="delivered_to_customer")
					{
						$xxx=$a1;
						$yyy=$a2;
					}
			}
			?>
<?php
			$query="SELECT * from service_details where ACCOUNT_Id='$a'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
			while ($crr=mysqli_fetch_row($result2))
			{
				$zzz=$crr[31];	
				$a1=$crr[16];
				$a2=$crr[18];
					if($zzz=="Delivered to company ready to dispatch")
					{
						$xxx=$a1;
						$yyy=$a2;
					}
			}
			?>
			<?php
			$query="SELECT * from service_details where ACCOUNT_Id='$a'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
			while ($crr=mysqli_fetch_row($result2))
			{
				$zzz=$crr[31];	
				$a1=$crr[13];
				$a2=$crr[11];
					if($zzz=="Delivered to service provider")
					{
						$xxx=$a1;
						$yyy=$a2;
					}
			}
			?>
			<?php
			$query="SELECT * from service_details where ACCOUNT_Id='$a'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
			while ($crr=mysqli_fetch_row($result2))
			{
				$zzz=$crr[31];	
				$a1=$crr[13];
				$a2=$crr[10];
					if($zzz=="sent_to_service_provider")
					{
						$xxx=$a1;
						$yyy=$a2;
					}
			}
			?>
			<?php
			$query="SELECT * from service_details where ACCOUNT_Id='$a'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
			while ($crr=mysqli_fetch_row($result2))
			{
				$zzz=$crr[31];	
				$a1=$crr[13];
				$a2=$crr[14];
					if($zzz=="Sent from service provider")
					{
						$xxx=$a1;
						$yyy=$a2;
					}
			}
			?>
			<?php
			$query="SELECT * from service_details where ACCOUNT_Id='$a'";
			$result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
			while ($crr=mysqli_fetch_row($result2))
			{
				$zzz=$crr[31];	
				$a1=$crr[8];
				$a2=$crr[1];
					if($zzz=="received")
					{
						$xxx=$a1;
						$yyy=$a2;
					}	
			}					
	  
?>
<?php	
	 $query="SELECT * from service_details where ACCOUNT_Id='$a' and New_SerialNumber_If_Replaced=0";
	 $result1 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
	 echo"<table border size=1 >";
     echo"<tr><th>CUSTOMER NAME</th><th>ACCOUNT_ID</th><th> SERVICE REFERENCIAL ID</th><th>ITEM_ID</th><th>STATUS</th><th>STAND BY PRODUCT</th><th>IN DATE</th><th>LAST UPDATE DATE</th><th>LAST UPDATED BY</th>";
	  while ($brr=mysqli_fetch_row($result1))
	  {
		  echo"<tr> <td>$baa</td><td>$brr[2]</td><td>$brr[0]</td> <td>$brr[3]</td><td>$brr[31]</td><td>$abc</td><td>$brr[1]</td><td>$yyy</td><td>$xxx</td></tr>";
	  }   	  
?>

<h2 style="text"; align="center" ;><font color="red"> Deliverd to customer details</font> </h2>
<form method="post" action="comptocus2.php">
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