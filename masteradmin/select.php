<html>

<?php

require ('../dbconfig/config.php');

$output = ' ';
if(isset($_POST["action"]))
{
	$query = " select * from emp  ";
	$result= mysqli_query($con,$query);
	$output .='
			<table class="table table-striped table-bordered first" >
				<thead>
    
                               <tr>
                                                <th>ID</th>
                                                <th>Phone</th>
                                                <th>Password</th>
                                                <th>Name</th>
												<th>Email</th>
                                                <th>Gender</th>
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
													<td>'.$row["mob_no"].'</td>
													<td>'.$row["pass"].'</td>
													<td>'.$row["name"].'</td>
													<td>'.$row["email"].'</td>
													<td>'.$row["gender"].'</td>
                                                    
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

 