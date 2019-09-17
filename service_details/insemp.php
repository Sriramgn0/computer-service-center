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
<h2 style="text"; align="center" ;><font color="red"> INSERT EMPLOY DETAILS</font> </h2>
<form method="post" action="insemp1.php">
<font color="orange">

<p>
EMPLOY ID:<input type="number" name="Employ_Id" value="<?php $query = "SELECT MAX(Employ_Id)+1 FROM employ";
															 $var=mysqli_query($dbh,$query);
															 while ($arr=mysqli_fetch_row($var))
														    {echo $arr[0];}?>">
 
<p>
PASSWORD:<input type="TEXT" name="password" value="">
</p>

<p>
<p>
NAME:<input type="text" name="Name" value="">
</p>
</p>

<p>
ADDRESS.:<input type="text" name="Address" value=""> 
<p>

</p>
MOBILE NO:<input type="text" name="Mobile_Number" value=""> 

<p>
EMAIL ID:<input type="text" name="Email_Id" value=""> 

 

<input type="submit" name="submit"> <br>
</font>
</form>

</div>
</body>
</html>