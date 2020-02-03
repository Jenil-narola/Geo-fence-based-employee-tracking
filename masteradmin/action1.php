<?php
require ('../dbconfig/config.php');
function createGUID() { 
    
    // Create a token
    $token      = $_SERVER['HTTP_HOST'];
    $token     .= $_SERVER['REQUEST_URI'];
    $token     .= uniqid(rand(), true);
    
    // GUID is 128-bit hex
    $hash        = strtoupper(md5($token));
    
    // Create formatted GUID
    $guid        = '';
    
    // GUID format is XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX for readability    
   
}
//action.php
if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$output='';
		$id=$_POST['id'];
		$phone =$_POST['phone'];
		$password =$_POST['password'];
        $name =$_POST['name'];
        $email =$_POST['email'];
		$gender =$_POST['gender'];
		$q=mysqli_query($con,"select * from emp where mob_no='$phone'");
			//$r=($con,$q);
			$num=mysqli_num_rows($q);
		if(!preg_match("/^[0-9]*$/",$phone)){
			echo "allow only numbers";
		}
			elseif(!preg_match("/^[a-zA-Z0-9.!#$%&'*+?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/",$email))
		{
					echo "email";
		}
		elseif($num>0)
		{
			echo "user already exist with this number please try again";
		}
			
			
		
		else{
			
			
			
				

		
		
		$query ="insert into client (id,name,lat,lng) values('$id','$name','$lat','$lng')";
        if(mysqli_query($con,$query))
		{
		//echo $name,$lat,$lng;
		}
		else
		{
			//echo "wrong";
		}
	}}
	if($_POST["action"] == "update")
	{
		$output='';
		$id=$_POST['id'];
		$phone =$_POST['name'];
		$password =$_POST['lat'];
        $name =$_POST['lng'];
       
		
		
			$q=mysqli_query($con,"select * from client where name='$name'");
			//$r=($con,$q);
			$num=mysqli_num_rows($q);
			
			

		
		
		$query =mysqli_query($con,"UPDATE client SET name='".$name."',lat='".$lat."',lng='".$lng."' WHERE id='".$id."'"); 
        if(mysqli_query($con,$query))
		{
		echo "updated";
		}
		else
		{
			echo "wrong";
		}
	}
	if($_POST["action"] == "delete")
	{
		$id=$_POST['id'];
		
		$query ="DELETE FROM emp WHERE id='$id'";
		if(mysqli_query($con,$query))
		{
		echo $id;
		}
		else
		{
			echo "wrong";
		}
		
	}
	
	
	
}
?>
