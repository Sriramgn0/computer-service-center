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
   
   $proname=$_REQUEST['proname'];  
   $order1 = $_REQUEST['order1'];   													
?>
<body bgcolor="cream">
<div class="bg">
<h2 style="text"; align="center" ;><font color="red"> INSERT PROVIDER DETAILS</font> </h2>
<form method="post" action="updprov1.php">
<font color="orange">
<p>

<p>
SERVICE PROVIDER ID:<input type="number" name="ServiceProvider_Id" value="<?php 
																				$query = "select * from service_provider where proname='$proname'and order1='$order1'";
																				$var=mysqli_query($dbh,$query);
																				while ($arr=mysqli_fetch_row($var))
																			    {echo $arr[0];}
																				?>" >
</p>  
<p>
NAME:<input type="TEXT" name="proname" value="<?php 
													$query = "select * from service_provider where proname='$proname'and order1='$order1'";
													$var=mysqli_query($dbh,$query);
													while ($arr=mysqli_fetch_row($var))
													{echo $arr[1];}
													?>" >
</p>

<p>
<p>
PLACE:<input type="text" name="Place" value="<?php 
													$query = "select * from service_provider where proname='$proname'and order1='$order1'";
													$var=mysqli_query($dbh,$query);
													while ($arr=mysqli_fetch_row($var))
													{echo $arr[3];}
													?>">
</p>
</p>

<p>
PIN.:<input type="text" name="Pin" value="<?php 
												$query = "select * from service_provider where proname='$proname'and order1='$order1'";
												$var=mysqli_query($dbh,$query);
												while ($arr=mysqli_fetch_row($var))
												{echo $arr[4];}
												?> "> 
<p>

</p>
MOBILE NO:<input type="text" name="Mobile_Number" value="<?php 
															$query = "select * from service_provider where proname='$proname'and order1='$order1'";
															$var=mysqli_query($dbh,$query);
															while ($arr=mysqli_fetch_row($var))
															{echo $arr[5];}
															?>"> 
</p>
LANDLINE NUMBER:<input type="text" name="Landline_number" value="<?php 
																	$query = "select * from service_provider where proname='$proname'and order1='$order1'";
																	$var=mysqli_query($dbh,$query);
																	while ($arr=mysqli_fetch_row($var))
																	{echo $arr[6];}
																	?>"> 
</p>
<p>
EMAIL ID:<input type="text" name="Email_Id" value="<?php 
														$query = "select * from service_provider where proname='$proname'and order1='$order1'";
														$var=mysqli_query($dbh,$query);
														while ($arr=mysqli_fetch_row($var))
														{echo $arr[7];}
														?>"> 
</p>
GSTIN:<input type="text" name="Gstin_Number" value="<?php 
														$query = "select * from service_provider where proname='$proname'and order1='$order1'";
														$var=mysqli_query($dbh,$query);
														while ($arr=mysqli_fetch_row($var))
														{echo $arr[8];}
														?>" > 
</p>
<p>
ORDER:<input type="text" name="order1" value="<?php 
														$query = "select * from service_provider where proname='$proname'and order1='$order1'";
														$var=mysqli_query($dbh,$query);
														while ($arr=mysqli_fetch_row($var))
														{echo $arr[2];}
														?>" > 	
</p> 

<input type="submit" name="submit"> <br>
</font>
</form>

</div>
</body>
</html>