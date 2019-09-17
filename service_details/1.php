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
   $Item_Barcode_Number= $_REQUEST['Item_Barcode_Number'];
	
   $abc="";													
   $query = "SELECT * FROM item_detail where Item_Barcode_Number='$Item_Barcode_Number' and Account_Id='$Account_Id'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
															 $c=$arr[1];	
	?>

<body bgcolor="white">
<div class="bg" align="center">
<h2 style="text"; align="center" ;><font color="red"> ITEM DETAILS</font> </h2>
<form method="post" action="2.php">
<font color="orange">
<p>
ACCOUNT ID <input type="text" name="Account_Id" value="<?php echo"$Account_Id" ?>">
<p>
<p>
ITEM ID :<input type="text" name="Item_Id" value="<?php  
															$query = "SELECT * FROM item_detail where Item_Barcode_Number='$Item_Barcode_Number' and Account_Id='$Account_Id'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var)) 
																 $abc=$arr[3];
																	if($abc!=$Item_Barcode_Number)
																	{
																		$query = "SELECT Max(Item_Id)+1 FROM item_detail"; 
															            $var1=mysqli_query($dbh,$query);
															            while ($arr=mysqli_fetch_row($var1))
																		{echo $arr[0];} 
																	}
																	
																	else
																		{echo $c; }
																	?>">
</p>
<p>
ITEM NAME<input type="text" name="Item_Name" value="<?php  
															$query = "SELECT * FROM item_detail where Item_Barcode_Number='$Item_Barcode_Number' and Account_Id='$Account_Id'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
															   {echo $arr[2];} ?>">
<p>


<p>
ITEM BARCODE:<input type="text" name="Item_Barcode_Number" value="<?php  echo"$Item_Barcode_Number" ?>">
</p>

ITEM DESCRIPTION:<input type="text" name="Item_Description" value="<?php  
															$query = "SELECT * FROM item_detail where Item_Barcode_Number='$Item_Barcode_Number' and Account_Id='$Account_Id'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
                                                              {echo $arr[4];} ?>">
</p>




<br>
<input type="submit" name="submit">
</br>
</body>

</div>
</body>
</html>