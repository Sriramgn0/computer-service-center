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
   $Item_Id=$_REQUEST['Item_Id'];
   $Serial_No=$_REQUEST['Serial_No'];
   $Narration= $_REQUEST['Narration'];
   $Memo=$_REQUEST['Memo'];
   $Service_Provider_Name="0";
   $In_Date="2000-01-01";
   $Customer_TO_Company_Name="0";
  
   $Company_TO_ServiceProvider_Status="0";
   $Company_TO_Service_Provider_Date="2000-01-01";
   $Delivered_To_Service_Provider_Status="0";
   $Delivered_To_Service_Provider_Date="2000-01-01";
   $Company_TO_Service_Provider_Id="0";
   
   $Service_Provider_To_Company_Status="0";
   $Service_Provider_To_Company_Date="2000-01-01";
   $Delivered_To_Company_Date="2000-01-01";
   $Delivered_To_Company_Status="0";
   $ServiceProvider_To_Company_Id="0";
	 
   $Company_TO_Customer_Status="0";
   $Delivered_To_Customer_Date="2000-01-01";
   $Company_TO_Customer_Id="0";
   
   $New_SerialNumber_If_Replaced="0";
   $Stand_By_Product_Serial_No="0";
   $Stand_By_Product_Details="0";
   $Stand_By_Product="0";
   
   $Purchase_Info=$_REQUEST['Purchase_Info'];
   $Dispatched_By_Courier="0";
   $Courier_Id="0";
   
   $Company_TO_ServiceProvider_Dockail_Details="0";
   $Company_TO_Customer_Dockail_Details="0";
   $status="received";
   $Replace1="0";
   
   $Account_Id=$_REQUEST['Account_Id'];
   
	$query = "INSERT INTO service_details VALUES ('$Service_Reference_Id',NOW(),'$Account_Id','$Item_Id','$Serial_No','$Narration','$Memo','$Service_Provider_Name','$Customer_TO_Company_Name','$Company_TO_ServiceProvider_Status','$Company_TO_Service_Provider_Date','$Delivered_To_Service_Provider_Date','$Delivered_To_Service_Provider_Status','$Company_TO_Service_Provider_Id','$Service_Provider_To_Company_Date','$Service_Provider_To_Company_Status','$ServiceProvider_To_Company_Id','$Delivered_To_Company_Status','$Delivered_To_Company_Date','$Company_TO_Customer_Status','$Delivered_To_Customer_Date','$Company_TO_Customer_Id','$New_SerialNumber_If_Replaced','$Stand_By_Product_Serial_No','$Stand_By_Product_Details','$Stand_By_Product','$Purchase_Info','$Dispatched_By_Courier','$Courier_Id','$Company_TO_ServiceProvider_Dockail_Details','$Company_TO_Customer_Dockail_Details','$status','$Replace1')";
	$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
	
    $query = "SELECT Employ_Name FROM employ where Number=99";
	$var=mysqli_query($dbh,$query);
    while ($arr=mysqli_fetch_row($var))
	
	$query = "update service_details set Customer_TO_Company_Name='$arr[0]' where Service_Reference_Id='$Service_Reference_Id' and Item_Id='$Item_Id'";
	$result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
		
	$query = "update service_details set Replace1='1'";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($db));
	  
	$query = "update service_details set Replace1='99' where Service_Reference_Id='$Service_Reference_Id' ";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($db));
?>	

<body bgcolor="white">
<div class="bg" align="center">
<h2 style="text"; align="center" ;><font color="red"> SERVICE DETAILS</font> </h2>
<form method="post" action="replace.php">
<font color="orange">
<p>
Service_Reference_Id <input type="text" name="Service_Reference_Id" value="<?php echo"$Service_Reference_Id" ?>">
<p>
<br>
Issue of stand by product
<input type="submit" name="Issue of STAND BY PRODUCT">
</br>
</body>
<p>
<p>
<a href="replace.php" target="right_col" > <b>REPLACING THE NEW PRODUCT</b>
</a>
<p>
<a href="right.html" target="right_col" > <b>Home</b>
</a>
</p>
</p>													
</div>
</body>
</html>