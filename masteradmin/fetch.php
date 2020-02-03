<?php
require ('../dbconfig/config.php');
if(isset($_POST["id"]))
{
	$id=$_POST['id'];
	
	$output =array();
	$query = "select * from emp where id = '$id'";
	
	if(mysqli_query($con,$query))
		{
			$result= mysqli_query($con,$query);
			$row = mysqli_fetch_array($result);
		//echo $output["mob_no"];
		 $output['mob_no'] = $row["mob_no"];
		 $output['pass'] = $row["pass"];
		 $output['name'] = $row["name"];
		 $output['gender'] = $row["gender"];
		 $output['email'] = $row["email"];
		 echo json_encode($output);
		}
		else
		{
			echo "wrong";
		}
	
}


?>