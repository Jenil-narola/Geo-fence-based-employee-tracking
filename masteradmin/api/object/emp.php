<?php
class Emp{
 
 // database connection and table name
 private $conn;
 private $table_name = "emp";

 // object properties
 public $id;
 public $name;
 public $description;
 

 // constructor with $db as database connection
 public function __construct($db){
     $this->conn = $db;
 }

function search($user,$password)
{
    //echo ($username);
    $s="select * from " . $this->table_name . " where name='$user' and pass='$password'";
    $quer=$this->conn->prepare($s);
    $quer->execute();
    return $quer;
}
}
?>