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
   
   $name=$_REQUEST['name'];  
   $password = $_REQUEST['password'];   													
?>
<body bgcolor="cream">
<div class="bg">
<h2 style="text"; align="center" ;><font color="red"> UPDATE PROVIDER DETAILS</font> </h2>
<form method="post" action="updemp1.php">
<font color="orange">
<p>

<p>
EMPLOY ID:<input type="number" name="Employ_Id" value="<?php $query = "SELECT * FROM employ where Employ_Name='$name' and password='$password'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
														    {echo $arr[0];}?>">
 
<p>
PASSWORD:<input type="TEXT" name="password" value="<?php $query = "SELECT * FROM employ where Employ_Name='$name' and password='$password'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
														    {echo $arr[1];}?>">
</p>

<p>
<p>
NAME:<input type="text" name="Name" value="<?php $query = "SELECT * FROM employ where Employ_Name='$name' and password='$password'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
														    {echo $arr[2];}?>">
</p>
</p>

<p>
ADDRESS.:<input type="text" name="Address" value="<?php $query = "SELECT * FROM employ where Employ_Name='$name' and password='$password'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
														    {echo $arr[3];}?>"> 
<p>

</p>
MOBILE NO:<input type="text" name="Mobile_Number" value="<?php $query = "SELECT * FROM employ where Employ_Name='$name' and password='$password'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
														    {echo $arr[4];}?>"> 

<p>
EMAIL ID:<input type="text" name="Email_Id" value="<?php $query = "SELECT * FROM employ where Employ_Name='$name' and password='$password'";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
														    {echo $arr[5];}?>"> 

<input type="submit" name="submit"> <br>
</font>
</form>

</div>
</body>
</html>