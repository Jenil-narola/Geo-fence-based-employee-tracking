<html>

<?php

require ('../dbconfig/config.php');

$output = ' ';
$id=$_POST["id"];

$date1=$_POST["date1"];
$date2=$_POST["date2"];
$type=$_POST["type"];
$date_1=strtotime($date1);
$date_2=strtotime($date2);
$d1=date("Y-m-d",$date_1);
$d2=date("Y-m-d",$date_2);
$item=array();
$all_seconds=0;


$query = " select * from history  where user_id='$id' and type='$type' and start >= '$d1 00:00:00' and end <= '$d2 23:59:59'";
	$result= mysqli_query($con,$query);
	$row=mysqli_fetch_array($result);

	$output .='    
            <table class="table table-striped table-bordered first">
			<h3> Name:   '.$row["name"].'</h3>
				<thead>
    
                               <tr>				<th>Date</th>
                                                <th>Entry</th>
                                                <th>Exit</th>
												<th>Duration</th>
												
                                                    
                                 </tr>
                  </thead>';
	if(mysqli_num_rows($result)>0)
	{

		while($row=mysqli_fetch_array($result))
		{
			$item[]= $row['duration'];
			$output .= '<tr> 						<td>'.$row["date"].'</td>
                                                    <td>'.$row["start"].'</td>
													<td>'.$row["end"].'</td>
													<td>'.$row["duration"].'</td>
													
													
													
                                                    
													 </tr>';
						
			}
		
			
			
			
			foreach($item as $time)
			{
				list($hour,$minute,$second)=explode(':',$time);
				$all_seconds+=$hour*3600;
				$all_seconds+=$minute*60;
				$all_seconds+=$second;
			}
			$total_minutes = floor($all_seconds/60); 
			$seconds = $all_seconds % 60;  
			$hours = floor($total_minutes / 60); 
			$minutes = $total_minutes % 60;
			$output.='<tr><td></td><td></td><td><h4 >Total Duration :</h4></td>><td>'.$hours.":".$minutes.":".$seconds.'</td></tr></table>
			<button class="btn btn-primary" id="pdf" style="margin-left: 85%;margin-top: 2%;">Download PDF</button>';
		
		
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
?>