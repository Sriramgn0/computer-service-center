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
?>

<body bgcolor="white">
<div class="bg" align="center">
<h2 style="text"; align="center" ;><font color="red"> INSERT PROVIDER1000 DETAILS</font> </h2>
<form method="post" action="insprov.php">
<font color="orange">
	
<p>
Service Provider_Id:<input type="number" name="ServiceProvider_Id" value="<?php $query ="SELECT MAX(ServiceProvider_Id)+1 FROM service_provider";
																						 $var=mysqli_query($dbh,$query);
																					     while ($arr=mysqli_fetch_row($var))
																					      $a=$arr[0];
																					      {echo $a;} ?>">
<p>
NAME1:<input type="TEXT" name="proname" value="">
</p>

<p>
<p>
PLACE:<input type="text" name="Place" value="">
</p>
</p>
<p>
ADDRESS1:<input type="text" name="Address1" value="">
</p>
<p>
ADDRESS2:<input type="text" name="Address2" value="">
</p>
<p>
ADDRESS3:<input type="text" name="Address3" value="">
</p>
<p>
PIN.:<input type="text" name="Pin" value=""> 
<p>

</p>
MOBILE NO:<input type="text" name="Mobile_Number" value=""> 
</p>
LANDLINE NUMBER:<input type="text" name="Landline_number" value=""> 
</p>
<p>
EMAIL ID:<input type="text" name="Email_Id" value=""> 
</p>
GSTIN:<input type="text" name="Gstin_Number" value=""> 
</p>
<input type="submit" name="submit"> <br>
</font>
</form>

</div>
</body>
</html>