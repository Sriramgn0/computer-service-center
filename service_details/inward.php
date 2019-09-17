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
    
   $phone_no = $_REQUEST['phone_no'];
   $abc=0;
  $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
																 $c=$arr[0];
?>

<body bgcolor="white">
<div class="bg" align="center">
<h2 style="text"; align="center" ;><font color="red"> CITIZEN DETAILS</font> </h2>
<form method="post" action="inward1.php">
<font color="orange">
<p>
ACCOUNT ID :<input type="text" name="Account_Id" value="<?php     $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
															      $var=mysqli_query($dbh,$query);
															      while ($arr=mysqli_fetch_row($var))
															      $abc=$arr[7];
																  if($abc!=$phone_no) 
															       {
																    $query = "SELECT Max(Account_Id)+1 FROM account_details";
															        $var=mysqli_query($dbh,$query);
																    while ($arr=mysqli_fetch_row($var))
																	$abc=$arr[0];
																    { echo $abc; }
																 }	
																 
																 
																if($abc==$phone_no)
																 { echo $c; }
																 ?>">
</p>

<p>
ACCOUNT NAME<input type="text" name="Account_name" value="<?php 
															 $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
                                                             { echo $arr[1]; } ?>">
														 

<p>
ADDRESS LINE 1:<input type="text" name="Address_Line_1" value="<?php $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
                                                             { echo $arr[2]; } ?>">
</p>



<p>
ADDRESS LINE 2:<input type="text" name="Address_Line_2" value="<?php  $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
                                                             { echo $arr[3]; } ?>">
<p>
ADDRESS LINE 3:<input type="text" name="Address_Line_3" value="<?php  $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
                                                             { echo $arr[4]; } ?>">
</p>
PLACE:<input type="text" name="Place" value="<?php $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
                                                             { echo $arr[5]; } ?>">
</p>

<p>
PIN.:<input type="text" name="Pin" value="<?php $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
                                                             { echo $arr[6]; } ?>"> 
<p>

</p>
MOBILE NO:<input type="text" name="Mobile_Number" value="<?php  echo"$phone_no" ?>"> 
</p>
LANDLINE NUMBER:<input type="text" name="Landline_number" value="<?php $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
						      									$var=mysqli_query($dbh,$query);
																while ($arr=mysqli_fetch_row($var))
					     										{ echo $arr[8]; } ?>"> 
</p>
<p>
EMAIL ID:<input type="text" name="Email_Id" value="<?php $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
														$var=mysqli_query($dbh,$query);
														while ($arr=mysqli_fetch_row($var))
														{ echo $arr[9]; } ?>"> 
</p>
GSTIN:<input type="text" name="Gstin_Number" value="<?php  $query = "SELECT * FROM account_details where Mobile_Number='$phone_no'";
															$var=mysqli_query($dbh,$query);
															while ($arr=mysqli_fetch_row($var))
															{ echo $arr[10]; } ?>"> 
</p>



<br>
<input type="submit" name="submit">
</br>
</body>

</div>
</body>
</html>