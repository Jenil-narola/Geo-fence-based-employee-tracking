<?php
require ('../dbconfig/config.php');
$id =$_POST['id'];


$date=$_POST['date'];
		$lat =$_POST['l'];
        $lng =$_POST['l1'];
        $radius =$_POST['radius'];
        $type =$_POST['type'];
        $time =$_POST['time'];

        
        $s1=mysqli_query($con,"select name from emp where id='$id' ");
        $row=mysqli_fetch_array($s1);
        $s=$row['name'];
        $r=mysqli_query($con,"insert into  emploc (user_id,name,lat,lng,type,radius,date,work_hour) values ('$id','$s','$lat','$lng','$type','$radius','$date','$time')");
        echo ($time);



        ?>