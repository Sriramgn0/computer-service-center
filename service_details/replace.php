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
?>	

<body bgcolor="white">
<div class="bg" align="center">
<h2 style="text"; align="center" ;><font color="red"> REPLACING PRODUCT DETAILS</font> </h2>
<form method="post" action="replace1.php">
<font color="orange">
<p>
Service_Reference_Id <input type="text" name="Service_Reference_Id" value="<?php $query = "SELECT * FROM Service_Details where Replace1=99";
																				 $var=mysqli_query($dbh,$query);
																			     while ($arr=mysqli_fetch_row($var))
																				 $a=$arr[0];
																					      {echo $a;} ?>">
<p>

<p>
NEW SERIAL NUMBER<input type="text" name="New_SerialNumber_If_Replaced" value="">
<p>
<br>
<input type="submit" name="submit">
</br>
</body>
													
</div>
</body>
</html>