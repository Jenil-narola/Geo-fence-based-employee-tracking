<?php
include_once '../config/database.php';
include_once '../object/emp.php';
$response=array();
$database = new Database();
$db = $database->getConnection();
$emp = new Emp($db);
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
$stmt = $emp->search($username,$password);
$num = $stmt->rowCount();
if($num==1)
{
    echo("found");
}
else{
    echo("not fount");
}
 


?>