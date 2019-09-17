<!DOCTYPE HTML>
<html>
<title>
  GST
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
<body bgcolor="sky blue">
<div class="bg">
<?php
 $dbh =mysqli_connect('localhost','root','') or die(mysqli_error());
 $db_select=mysqli_select_db($dbh,'service_details');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
    
	 $name1 = $_REQUEST['name1'];
	 
	 $query = "SELECT * from item_detail where Item_Name='$name1'";
     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
      while ($arr=mysqli_fetch_row($result))
	  {		  
		$bad=$arr[0];
	  }
	?>
	<?php 
	 
	 $query = "SELECT * from service_details where ACCOUNT_ID='$bad'";
     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
      while ($crr=mysqli_fetch_row($result))
	  {		  
		$bac=$crr[0];
	  }
	  
	$query = "update service_details set Replace1='1'";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($db));
	  
	$query = "update service_details set Replace1='99' where Service_Reference_Id='$bac' ";
    $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($db));
	 ?>
	 <?php
	 $query = "SELECT * from item_detail where Item_Name='$name1'";
     $result = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
      while ($arr=mysqli_fetch_row($result))
	  {		  
		$baa=$arr[3];
		$a=$arr[1];
				
	 $query="SELECT * from service_details where Item_Id='$a'";
	 $result1 = mysqli_query($dbh,$query) or die('Error: ' . mysqli_error($dbh));
	 echo"<table border size=1 >";
     echo"<tr><th>CUSTOMER NAME</th><th>ITEM NAME</th><th> SERVICE REFERENCIAL ID</th><th>BARCODE NO</th><th>ACCOUNT_ID</th> <th>ITEM_ID</th><th>IN DATE</th><th>PRODUCT RECEIVED BY EMPLOYEE</th>";
      while ($brr=mysqli_fetch_row($result1))
	  {
		  echo"<tr> <td>$bac</td><td>$name1</td><td>$brr[0]</td> <td>$baa</td><td>$brr[2]</td> <td>$brr[3]</td><td>$brr[1]</td><td>$brr[8]</td></tr>";
	  } 
	   }	  
?>

<h2 style="text"; align="center" ;><font color="red"> check product status</font> </h2>
<form method="post" action="replace.php">
<font color="orange">
<p>
SERVICE REFERENCIAL ID <input type="text" name="Service_Reference_Id" value="">
<p>
<input type="submit" name="submit">
</br>

<p>
<p>
<p>
<a href="right.html" target="right_col" > <b>Home</b>
</a>
</div>
</body>
</html>