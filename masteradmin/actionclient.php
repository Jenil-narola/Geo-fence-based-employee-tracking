<?php
require ('../dbconfig/config.php');

//action.php
if(isset($_POST["action"]))
{
	if($_POST["action"] == "insert")
	{
		$output='';
		
		$name =$_POST['name'];
		$lat =$_POST['lat'];
        $lng =$_POST['lng'];
		$q=mysqli_query($con,"select * from client where name='$name'");
			//$r=($con,$q);
			$num=mysqli_num_rows($q);
		
			
		if($num>0)
		{
			echo "user already exist with this name please try with different name";
		}
			
			
		
		else{
			
			
			
				

		
		
		$query ="insert into client (name,lat,lng) values('$name','$lat','$lng')";
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
		$name =$_POST['name'];
		$lat =$_POST['lat'];
        $lng =$_POST['lng'];
       
		
		
			$q=mysqli_query($con,"select * from client where id='$id'");
			//$r=($con,$q);
			$num=mysqli_num_rows($q);
			
			

		
		
		$query1=mysqli_query($con,"UPDATE client SET name='".$name."',lat='".$lat."',lng='".$lng."' WHERE id='".$id."'"); 
        if(mysqli_query($con,$query1))
		{
		//echo "updated";
		}
		else
		{
			//echo "wrong";
		}
	}
	if($_POST["action"] == "delete")
	{
		$id=$_POST['id'];
		
		$query ="DELETE FROM client WHERE id='$id'";
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
