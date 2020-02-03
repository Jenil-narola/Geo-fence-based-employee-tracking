<?php
require ('../dbconfig/config.php');
$name1 =$_POST['name1'];
$output = array();
		//echo $name1;
        $r=mysqli_query($con,"select * from client where name = '$name1'");
        $row=mysqli_fetch_array($r);
		$output['lat']=$row['lat'];
		$output['lng']=$row['lng'];
		//echo '<pre>';
		//print_r($output);
		echo json_encode($output);
		
		



     ?>