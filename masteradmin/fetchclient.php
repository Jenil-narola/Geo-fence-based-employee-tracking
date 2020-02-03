<?php
require ('../dbconfig/config.php');
if(isset($_POST["id"]))
{
	$id=$_POST['id'];
	
	$output =array();
	$query = "select * from client where id = '$id'";
	
	if(mysqli_query($con,$query))
		{
			$result= mysqli_query($con,$query);
			$row = mysqli_fetch_array($result);
		//echo $output["mob_no"];
		 $output['name'] = $row["name"];
		 $output['lat'] = $row["lat"];
		 $output['lng'] = $row["lng"];
		 //$output['gender'] = $row["gender"];
		// $output['email'] = $row["email"];
		 echo json_encode($output);
		}
		else
		{
			echo "wrong";
		}
	
}


?>