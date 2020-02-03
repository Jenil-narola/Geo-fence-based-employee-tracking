<?php
require ('../../dbconfig/config.php');
 $response=array();
 $history=array();

 $user_id = isset($_POST['user_id'])?$_POST['user_id']:'';
 
if(empty($user_id)){
    $response['error'] = false; 
 $response['message'] = 'Missing User_id.';
 echo json_encode($response); 
 return false;
}

$q="select * from history where user_id='$user_id'";
$quer=$con_pdo->prepare($q);
$quer->execute();

$results=$quer->fetchAll(PDO::FETCH_ASSOC); 
$r=$quer->rowCount();
if($r>=1)
{     
        foreach($results as $result)
        {
            //$loc[]=array($result['id']);
                $history[]=$result;
            // $loc3[]=$result['type'];
            //$loc4[]=$result['date'];
            //$loc1[]=$result['lat'];
            //$loc2[]=$result['lng'];
            //$loc1[]=$result['type'];
   
        }
        $user = array(
             
            'userid'=>$user_id
            );
 
 
    $response['error'] = false; 
    $response['message'] = 'Login successfull'; 
    $response['user'] = $user; 
    $response['history']=$history;
    $response['row']=$r;


echo json_encode($response);
//echo json_encode($loc);
}
else{
   $response['error'] = true; 
$response['message'] = 'Invalid userid';
echo json_encode($response); 
}
