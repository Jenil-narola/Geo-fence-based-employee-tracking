
<?php
class Database{
 
    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "geofence";
    private $username = "root";
    private $password = "";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
            //echo("successfully run");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
	//$obj = new Database();
   // $obj->getConnection();
   
   
?>