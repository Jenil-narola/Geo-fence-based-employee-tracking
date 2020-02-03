<!DOCTYPE html>
<?php
session_start();
error_reporting(0);
    require("dbconfig/config.php");
    
	if (isset($_SESSION['username']))
	{
		header("location:masteradmin/index.php");
    }
    $username = $password = "";
   
      
        
        
    
	
	  

	if(isset($_POST['signin']))
	{
	$username = $_POST['username'];
	$password = $_POST['password'];

	$sql = "select * from registration where username='$username' and password='$password'";
	$res = mysqli_query($con,$sql);
	$num = mysqli_num_rows($res);
	
	if($num==1)
	{
		$_SESSION['username']=$_POST['username'];
		header("location:masteradmin/index.php");
		
	}
	else
	{
		$msg = "Oops..Invalid Email or Password";
	}
    }
    
?>
      

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign in</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Geofence Admin</title>
    <link rel="icon" href="images/beacon_location.png"  type="image/png">
</head>
<body>

    <div class="main">

      

        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <figure><img src="images/signin-image.jpg" alt="sing in image"></figure>
                        <a href="registration.php" class="signup-image-link">Create an account</a>
                        <div style="    margin-left: 44px;font-style: initial;font-weight: 650;color: red;"><?php echo $msg;?></div>
                                    
                       
                    </div>
                    
                    

                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="register-form"  id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" required id="your_name" placeholder="Your Name" />
                                 
                                

                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" required  id="your_pass" placeholder="Password"/>
                                

                            </div>
                           
                            <div class="form-group form-button">
                                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>