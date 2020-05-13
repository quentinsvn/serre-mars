<?php
class Dust{
  
    private $conn;
    private $table_name = "dust";
  
    public $id;
    public $date;
    public $lpo_time;
    public $lpo_percentage;
    public $pcs;

    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
    
        $query = "SELECT * FROM dust";
    
        $stmt_dht11 = $this->conn->prepare($query);
    
        $stmt_dht11->execute();
    
        return $stmt_dht11;
    }

    function last_read(){
    
        $query = "SELECT * FROM dust ORDER BY id DESC LIMIT 1";
    
        $stmt_dht11 = $this->conn->prepare($query);
    
        $stmt_dht11->execute();
    
        return $stmt_dht11;
    }

}

class DHT11{
  
    private $conn;
    private $table_name = "humidity_temp";
  
    public $id;
    public $date;
    public $humidity;
    public $temp;

    public function __construct($db){
        $this->conn = $db;
    }

    function read(){
    
        $query = "SELECT * FROM humidity_temp";
    
        $stmt = $this->conn->prepare($query);
    
        $stmt->execute();
    
        return $stmt;
    }

    function last_read(){
    
        $query = "SELECT * FROM humidity_temp ORDER BY id DESC LIMIT 1";
    
        $stmt_dht11 = $this->conn->prepare($query);
    
        $stmt_dht11->execute();
    
        return $stmt_dht11;
    }
}
?>