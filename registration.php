<?php
       
require 'dbconfig/config.php';	   
	   
	   
	   
	   

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

    <div class="main">
<section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username"  placeholder="Your Name" required />
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email"  placeholder="Your Email" required />
                            </div>
                            <div class="form-group">
                                <label for="contact_no"><i class="zmdi zmdi-phone"></i></label>
                                <input type="tel"  name="phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" placeholder="Enter only 10 digit" required />                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password"  placeholder="Password" required />
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="cpassword"  placeholder="Repeat your password" required />
                            </div>
                            
                            <div class="form-group form-button">
                                <input name="submit_btn" type="submit" id="signup_btn" class="form-submit" value="Register"  />
                            </div>
							   
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="index.php" >I am already member</a>
                    </div>
                </div>
				   
            </div>
        </section>
        
    

<!-- JS -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/js/main.js"></script>

<?php

if(isset($_POST['submit_btn']))
{
	//echo '<script type="text/javascript"> alert("sign up button clicked")</script>';
	
	$username = $_POST['username'];
	$email= $_POST['email'];
	$phone= $_POST['phone'];
	$password = $_POST['password'];
	$cpassword = $_POST['cpassword'];
	
	
	
	if($password==$cpassword)
	{
	   $query= "select * from registration WHERE username='$username'";
       $query_run=mysqli_query($con,$query);
	   $num=mysqli_num_rows($query_run);
	   
	   if($num>0)
	   {
		   ?><script type="text/javascript"> alert("<?php echo "username is already exist";?> ") </script><?php
	   }
	   else
	   {
		   $query= "insert into registration values('$username','$email','$phone','$password')";
		   $query_run = mysqli_query($con,$query);
		   header("location:index.php");
	      
		}
	}
else{
			?><script type="text/javascript"> alert("<?php echo "password not match";?> ") </script><?php
	}	
      
	   		   
		
	
	
	
}

?>
 </div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>