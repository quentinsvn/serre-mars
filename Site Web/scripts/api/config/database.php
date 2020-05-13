<?php
class Database{
  
    // specify your own database credentials
    private $host = "xx.xx.xx.xx";
    private $db_name = "xxx";
    private $username = "xxx";
    private $password = "xxx";
    public $conn;
  
    // get the database connection
    public function getConnection(){
  
        $this->conn = null;
  
        try{
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }catch(PDOException $exception){
            echo "Erreur de connexion: " . $exception->getMessage();
        }
  
        return $this->conn;
    }
}
?>