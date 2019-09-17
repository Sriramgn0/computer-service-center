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
   
   
   
   
   $Service_ref_Id=$_REQUEST['Service_ref_Id'];
   $ServiceProvide_Name=$_REQUEST['ServiceProvide_Name'];
   
     $query = "update service_details set ServiceProvide_Name='$ServiceProvide_Name' where Service_Reference_Id='$Service_ref_Id'";
	 $result2 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
  	  	  
	
?>
<?php


	 $query="select * from service_details where Service_Reference_Id='$Service_ref_Id'";
     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
      while ($arr=mysqli_fetch_row($result))
	  {		  	  
		$def=$arr[7];
	  }
?>	
<h2 style="text"; align="center" ;><font color="red"> update send status</font> </h2>
<form method="post" action="toservicep2.php">
<font color="orange">
<p>
Service_Reference_Id <input type="text" name="Service_Reference_Id" value="<?php echo"$Service_ref_Id" ?>">
<p>

<p>
</P>
<p>
COURIOR NAME <input type="text" name="Cou_Name" value="">
</P>
<p>
COURIOR DOCKAIL DETAILS <input type="text" name="Cou_Doc" value="">
</P>
<p>
SERVICE PROVIDER ADDRESS<input type="text" name="Ser_Name" value="<?php $query = "select * from service_provider where proname='$def'";
																		$var=mysqli_query($dbh,$query);
																		while ($arr=mysqli_fetch_row($var))
																		{echo $arr[1];}
																		?>">
						<input type="text" name="Ser_Name" value="<?php $query = "select * from service_provider where proname='$def'";
																		$var=mysqli_query($dbh,$query);
																		while ($arr=mysqli_fetch_row($var))
																		{echo $arr[2];}
																		?>">
						<input type="text" name="Ser_Name" value="<?php $query = "select * from service_provider where proname='$def'";
																		$var=mysqli_query($dbh,$query);
																		while ($arr=mysqli_fetch_row($var))
																		{echo $arr[3];}
																		?>">
<p> 
<p>
product sent to servic provider:
<select name="status">
			<option value="1">YES</option>
			<option value="0">NO</option>
</p>
<br>
<input type="submit" name="submit">
</br>
<p>
<a href="right.html" target="right_col" > <b>Home</b>
</a>
</p>
</p>													
</div>
</body>
</html>