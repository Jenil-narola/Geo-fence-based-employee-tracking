<?php


require ('../../dbconfig/config.php');
 



$response=array();
$loc=array();
$loc1=array();

 //for login we need the username and password 
 
 //getting values 
 
 $username = isset($_POST['username'])?$_POST['username']:'';
 $password = isset($_POST['password'])?$_POST['password']:''; 

if(empty($username)){
    $response['error'] = false; 
 $response['message'] = 'Missing Username.';
 echo json_encode($response); 
 return false;
}
if(empty($password)){
    $response['error'] = false; 
 $response['message'] = 'Missing Password.';
 echo json_encode($response); 
 return false;
}
$s="select * from emp where name='$username' and pass='$password'";
$quer=$con_pdo->prepare($s);
$quer->execute();
$res=$quer->fetch(PDO::FETCH_ASSOC);
$id=$res['id'];


//$s=mysqli_query($con,"select * from emp where name='$username' and pass='$password'");
//$num=mysqli_num_rows($s);

//if($num==1)
if($quer->rowCount()==1)
{
   //session_start();
   
   $sql="select * from emploc where user_id='$id'";
   //echo json_encode($sql);
   $t_date=$today = date("d-m-Y");
   $query=$con_pdo->prepare($sql);
   $query->execute();
   $results=$query->fetchAll(PDO::FETCH_ASSOC);
   foreach($results as $result)
   {
      //$loc[]=array($result['id']);
      if($result['type']=="visited" && $result['date']==$t_date)
      {
         $loc[]=$result;
      }
      if($result['type']=="permanent")
      {
         $loc1[]=$result;
      }
     // $loc3[]=$result['type'];
      //$loc4[]=$result['date'];
      //$loc1[]=$result['lat'];
      //$loc2[]=$result['lng'];
      //$loc1[]=$result['type'];
      
   }
 
 $user = array(
 'username'=>$username, 
 'email'=>$res['email'],
 'mobile'=>$res['mob_no'],
 'gender'=>$res['gender'],
 'date'=>$t_date
 );
 
 
 $response['error'] = false; 
 $response['message'] = 'Login successfull'; 
 $response['user'] = $user; 
 $response['info for visited']=$loc;
 $response['info for permanent']=$loc1;
 
 //$response['lat']=$loc1;
 //$response['lng']=$loc2;
 //$response['type']=$loc3;
 //$response['date']=$loc4;

 echo json_encode($response);
 //echo json_encode($loc);
}
 else{
    $response['error'] = true; 
 $response['message'] = 'Invalid username or password';
 echo json_encode($response); 
 }
 
 
 
 
?>
 
   
 