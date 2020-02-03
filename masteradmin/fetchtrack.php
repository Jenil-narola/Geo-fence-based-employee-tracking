<?php
require ('../dbconfig/config.php');
if(isset($_POST["id"]))
{
	$id=$_POST['id'];
	
	$output =array();
	$query = "select * from emploc where id = '$id'";
	
	if(mysqli_query($con,$query))
		{
			$result= mysqli_query($con,$query);
			$row = mysqli_fetch_array($result);
		//echo $output["mob_no"];
		 $output['name'] = $row["name"];
		 $output['lat'] = $row["lat"];
		 $output['lng'] = $row["lng"];
		 $output['date'] = $row["date"];
		 $output['type'] = $row["type"];
		 $output['work_hour'] = $row["work_hour"];
		// $output['email'] = $row["email"];
		 echo json_encode($output);
		}
		else
		{
			echo "wrong";
		}
	
}


?>