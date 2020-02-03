<?php

require ('../../dbconfig/config.php');
$response=array();

$name = isset($_POST['name'])?$_POST['name']:'';
 
if(empty($_FILES['user_image']['tmp_name']) || !is_uploaded_file($_FILES['user_image']['tmp_name']))
{
    $response['error'] = false; 
 $response['message'] = 'Missing file';
 echo json_encode($response); 
 return false;
}
if(empty($name)){
    $response['error'] = false; 
 $response['message'] = 'Missing name';
 echo json_encode($response); 
 return false;
}
 $tmp_file=$_FILES['user_image']['tmp_name'];
 $img_name=$_FILES['user_image']['name'];
 move_uploaded_file($tmp_file,"image/" . $img_name);
 $photo="image/" . $_FILES["user_image"]["name"];
 $sql="insert into imagedelete (name,img) values('$name','$photo')";
 $quer=$con_pdo->prepare($sql);
$quer->execute();
$response['error'] = false; 
    $response['message'] = 'Login successfull'; 
    echo json_encode($response); 
 return false;

?>