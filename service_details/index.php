<?php
   include("config.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
	// passwor is taken from db or authentication
	   
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
	  
	   $query = "update employ set Number=1";
       $result = mysqli_query($db,$query) or die('Error: ' . mysqli_error($db));
	  
	   $query = "update employ set Number=99 where Employ_Name='$myusername' and Password='$mypassword'";
       $result = mysqli_query($db,$query) or die('Error: ' . mysqli_error($db));
      
      $sql = "SELECT Employ_Id FROM employ WHERE Employ_Name = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        // session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: index1.html");
      }else {
          

          $message = "Your Login Name or Password is invalid";
          echo "<script type='text/javascript'>alert('$message');</script>";
      }
   }
?>

<!DOCTYPE html>
<html lang="zxx">
<!-- Head -->

<head>
    <title>Service details | log in</title>
    
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta-Tags -->
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">
    <!-- //Custom-Stylesheet-Links -->
    <!--fonts -->
    <!-- //fonts -->
    <link rel="stylesheet" href="css/font-awesome.css" type="text/css" media="all">
    <!-- //Font-Awesome-File-Links -->
	
	

</head>
<!-- //Head -->
<!-- Body -->

<body>
        <div class="content-bottom">
			<h2>Sign In Here</h2>
            <form action="#" method="post">
                <div class="field-group">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="username" id="text1" type="text" value="" pla
    <h1 class="title-agile text-center">MAHALAKSHMI COMPUTECH</h1>
>
    <div class="content-w3ls">ceholder="Username" required>
                    </div>
                </div>
                <div class="field-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <div class="wthree-field">
                        <input name="password" id="myInput" type="Password" placeholder="Password">
                    </div>
                </div>
                <div class="field-group">
                    <div class="check">
                        <label class="checkbox w3l">
                            <input type="checkbox" onclick="myFunction()">
                            <i> </i>show password</label>
                    </div>
                    <!-- script for show password -->
                    <script>
                        function myFunction() {
                            var x = document.getElementById("myInput");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                    <!-- //script for show password -->
                </div>
                <div class="wthree-field">
                    <input id="saveForm" name="saveForm" type="submit" value="sign in" />
                </div>
                <ul class="list-login">
                    <li class="switch-agileits">
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                            keep signed in
                        </label>
                    </li>
                    <li>
                        
                        
                        
                        
                        <script type="text/javascript">
                            function confirm_alert(node) {
                                return confirm("Please contact admin");
                            }
                        </script>
                        <a href="#" onclick="return confirm_alert(this);">forgot password?</a>
                        
                        
                        
                        
                    </li>
                    <li class="clearfix"></li>
                </ul>
            </form>
        </div>
    </div>
    <div class="copyright text-center">
        <p>
            
        </p>
    </div>
</body>
<!-- //Body -->
</html>
