<?php
class Database{
 
    // specify your own database credentials
    private $host = "sql102.epizy.com";
    private $db_name = "epiz_23894575_PHPLearning";
    private $username = "epiz_23894575";
    private $password = "xPj716vBs6Sl";
    public $conn;
 
    // get the database connection
    public function getConnection(){
 
        $this->conn = null;
 
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }
 
        return $this->conn;
    }
}
?>