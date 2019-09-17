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
   $Account_Id=$_REQUEST['Account_Id'];
   $Item_Id=$_REQUEST['Item_Id'];
   $Item_Name=$_REQUEST['Item_Name'];
   $Item_Barcode_Number= $_REQUEST['Item_Barcode_Number'];
   $Item_Description=$_REQUEST['Item_Description'];
	
   $abc=0;		
	$a=0;
   $query = "SELECT * FROM item_detail where Item_Id='$Item_Id'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
															 $abc=$arr[1];	
														      if($abc==$Item_Id)
																	{
																	 $query = "update item_detail set Account_Id='$Account_Id',Item_Name='$Item_Name',Item_Barcode_Number='$Item_Barcode_Number',Item_Description='$Item_Description' where Item_Id='$Item_Id'";
                                                                     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
																	
																	}	
  
																	else
																	{
																		$query = "INSERT INTO item_detail VALUES ('$Account_Id','$Item_Id','$Item_Name','$Item_Barcode_Number','$Item_Description')";
																		$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
																	}

																	?>

<body bgcolor="white">
<div class="bg" align="center">
<h2 style="text"; align="center" ;><font color="red"> SERVICE DETAILS</font> </h2>
<form method="post" action="3.php">
<font color="orange">
<p>
Service_Reference_Id <input type="text" name="Service_Reference_Id" value="<?php  
																					$query = "SELECT MAX(Service_Reference_Id)+1 FROM Service_Details";
																					 $var=mysqli_query($dbh,$query);
																					    while ($arr=mysqli_fetch_row($var))
																					    $a=$arr[0];
																					      {echo $a;} ?>">
<p>

<p>
ITEM ID<input type="text" name="Item_Id" value="<?php echo"$Item_Id"?>">
<p>
<p>
Account ID<input type="text" name="Account_Id" value="<?php echo"$Account_Id"?>">
<p>

<p>
Serial_No:<input type="text" name="Serial_No" value="">
</p>

Narration:<input type="text" name="Narration" value="">
</p>
<p>
Memo:<input type="text" name="Memo" value="">
</p>
<p>
Purchase info:<input type="text" name="Purchase_Info" value="">
</p>


<br>
<input type="submit" name="submit">
</br>
</body>

</div>
</body>
</html>