<html>

<?php

require ('../dbconfig/config.php');

$output = ' ';
if(isset($_POST["action"]))
{
	//$query1="update history set duration= TIMEDIFF(end,start)";
	$query = " select * from history  ";
	
	$result= mysqli_query($con,$query);
	$output .='
			<table class="table table-striped table-bordered first" >
				<thead>
    
                               <tr>
                                                
                                                <th>Name</th>
												<th>Entry time</th>
												<th>Exit time</th>
												<th>Duration</th>
												<th>Type</th>
												<th>Date</th>
												<th>Server_entry</th>
                                                <th>Server_exit</th>
                                                    
                                 </tr>
                  </thead>';
	if(mysqli_num_rows($result)>0)
	{
		while($row=mysqli_fetch_array($result))
		{
			$output .= '<tr> 
                                                    
													<td>'.$row["name"].'</td>
													<td>'.$row["start"].'</td>
													<td>'.$row["end"].'</td>
													<td>'.$row["duration"].'</td>
													<td>'.$row["type"].'</td>
													<td>'.$row["date"].'</td>
                                                    <td>'.$row["server_insert"].'</td>
													<td>'.$row["server_update"].'</td>
													
                                                    
													
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

 