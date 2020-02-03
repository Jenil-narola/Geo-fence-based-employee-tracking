<?php


$con = mysqli_connect("localhost","root","")or die("unable to connect");
mysqli_select_db($con,"geofence");
$servername = "localhost";
$database = "geofence"; 
$username = "root";
$password = "";
$sql = "mysql:host=$servername;dbname=$database;";
$dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
// Create a new connection to the MySQL database using PDO, $my_Db_Connection is an object
try { 
    $con_pdo = new PDO($sql, $username, $password, $dsn_Options);
    //echo "Connected successfully";
  } catch (PDOException $error) {
    //echo 'Connection error: ' . $error->getMessage();
  }



?>