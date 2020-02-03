<?php
require ('../../dbconfig/config.php');
 



$response=array();

 //for login we need the username and password 
 
 //getting values 
 
 //$lat = isset($_POST['lat'])?$_POST['lat']:'';
 //$lng = isset($_POST['lng'])?$_POST['lng']:'';
 $id = isset($_POST['id'])?$_POST['id']:'';
 //$user_id = isset($_POST['user_id'])?$_POST['user_id']:'';
 $status= isset($_POST['status'])?$_POST['status']:'';
 $start=isset($_POST['start'])?$_POST['start']:'';
 //$end="NULL";
 //$id = isset($_POST['id'])?$_POST['id']:'';
 //$t_id=isset($_POST['t_id'])?$_POST['t_id']:'';
 //$s="select * from emp where id='$user_id'";
 $e="select * from emploc where id='$id'";
$quer=$con_pdo->prepare($e);
$quer->execute();
$res=$quer->fetch(PDO::FETCH_ASSOC);
$name=$res['name'];
$type=$res['type'];
$date=$res['date'];
$user_id=$res['user_id'];

if($status==1)
{
   $sql=mysqli_query($con,"insert into history (user_id,id,name,start,status,type,date) values ('$user_id','$id','$name','$start','$status','$type','$date')");

   //$sql1=mysqli_query($con,"update history set end='$start' where id='$id' and status=0 and user_id='$user_id' and t_id='$t_id'");

   $response['message'] = 'inserted';
 echo json_encode($response); 
}
else if($status==0){
   $sql=mysqli_query($con,"update history set end='$start' where user_id='$user_id' and id='$id' and end='null'");
   $sql1=mysqli_query($con,"select * from history where user_id='$user_id' and id='$id' and end='$start'");
   $result=mysqli_fetch_array($sql1);
   $st=$result['start'];
   $en=$result['end'];
  
   $sql2=mysqli_query($con,"update history set duration=TIMEDIFF(end,start) where end='$start' and  user_id='$user_id' and id='$id'");
   


   
   
   //$sql1=mysqli_query($con,"update history set end='$start' where id='$id' and status=1 and user_id='$user_id' and t_id='$t_id'");

   $response['message'] = 'inserted and update with new';
   //echo json_encode($response);
   echo json_encode($st); 
   echo json_encode($en);
   
   //echo json_encode($val); 
   //echo json_encode($en); 

}

else{

   $response['message'] = 'error';
   echo json_encode($response); 
}


 ?>