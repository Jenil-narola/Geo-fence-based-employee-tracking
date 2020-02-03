<html>

<?php

require ('../dbconfig/config.php');

$output = ' ';
if(isset($_POST["action"]))
{
	$query = " select * from client  ";
	$result= mysqli_query($con,$query);
	$output .='
			<table class="table table-striped table-bordered first" >
				<thead>
    
                               <tr>
                                                <th>ID</th>
                                                <th>Name</th>
												<th>lat</th>
                                                <th>lng</th>
												<th></th>
                                                <th></th>
                                                    
                                 </tr>
                  </thead>';
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			$output .= '<tr> 
                                                    <td>'.$row["id"].'</td>
													<td>'.$row["name"].'</td>
													<td>'.$row["lat"].'</td>
													<td>'.$row["lng"].'</td>
													
                                                    
													<td><button type ="button" name = "update" id="update" value="'.$row["id"].'" class="btn btn-rounded btn-success">Update</button></td>
													<td><button type ="button" name = "delete" id="delete" value="'.$row["id"].'" class="btn btn-rounded btn-danger">Delete</button></td>
                        </tr>';
						
		}	
	}	
	else
	{
		$output .='
				<tr>
					<td colspan="8">Data not found</td>
				</tr>
				';
	}
	$output .='</table>';
	echo $output;
}



?>

 