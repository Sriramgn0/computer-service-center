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
   $Account_name=$_REQUEST['Account_name'];  
   $Address_Line_1 = $_REQUEST['Address_Line_1'];   
   $Address_Line_2= $_REQUEST['Address_Line_2'];
   $Address_Line_3 = $_REQUEST['Address_Line_3']; 	
   $Place= $_REQUEST['Place']; 
   $Pin= $_REQUEST['Pin']; 
   $Mobile_Number = $_REQUEST['Mobile_Number'];
   $Land_Line_number = $_REQUEST['Landline_number'];
   $Email_Id = $_REQUEST['Email_Id']; 
    $Gstin_Number = $_REQUEST['Gstin_Number']; 
    $abc=0;
	$query = "SELECT * FROM account_details where Mobile_Number='$Mobile_Number'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
																	$abc=$arr[7];
																	if($abc==$Mobile_Number)
																	{
																	 $query = "update account_details set Account_name='$Account_name',Address_Line_1='$Address_Line_1',Address_Line_2='$Address_Line_2',Address_Line_3='$Address_Line_3',Place='$Place',Pin='$Pin',Mobile_Number='$Mobile_Number',Land_Line_number='$Land_Line_number',Email_Id='$Email_Id',Gstin_Number='$Gstin_Number' where Account_Id='$Account_Id'";
                                                                     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
																	
																	}	
  
																	else
																	{
																		$query = "INSERT INTO account_details VALUES ('$Account_Id','$Account_name','$Address_Line_1','$Address_Line_2','$Address_Line_3','$Place','$Pin','$Mobile_Number','$Land_Line_number','$Email_Id','$Gstin_Number')";
																		$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
																	}
?>

<body bgcolor="white">
<div class="bg" align="center">
<h2 style="text"; align="center" ;><font color="red"> ITEM DETAILS</font> </h2>
<form method="post" action="1.php">
<font color="orange">
<p>
ACCOUNT ID <input type="text" name="Account_Id" value="<?php echo"$Account_Id" ?>">
<p>
<p>
ITEM BARCODE:<input type="text" name="Item_Barcode_Number" value="">
</p>






<br>
<input type="submit" name="submit">
</br>
</body>

</div>
</body>
</html>