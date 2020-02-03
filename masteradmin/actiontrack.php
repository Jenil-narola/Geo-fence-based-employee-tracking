<?php
require ('../dbconfig/config.php');

//action.php

	if($_POST["action"] == "update")
	{
		$output='';
		$id=$_POST['id'];
		$name =$_POST['name'];
		$lat =$_POST['lat'];
        $lng =$_POST['lng'];
		$date =$_POST['date'];
		$type =$_POST['type'];
		$work_hour =$_POST['work_hour'];
		
       
		
		
			$q=mysqli_query($con,"select * from emploc where id='$id'");
			//$r=($con,$q);
			$num=mysqli_num_rows($q);
			
			

		
		
		$query =mysqli_query($con,"UPDATE emploc SET name='".$name."',lat='".$lat."',lng='".$lng."',date='".$date."',type='".$type."',work_hour='".$work_hour."' WHERE id='".$id."' "); 
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
		
		$query ="DELETE FROM emploc WHERE id='$id'";
		if(mysqli_query($con,$query))
		{
		echo $id;
		}
		else
		{
			echo "wrong";
		}
		
	}
	
	
	

?>
