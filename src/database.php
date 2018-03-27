<?php 
require_once("base_config.php");
class Database {
    public $connection;
    
    function __construct(){
        $this->connection = new mysqli(DB_HOST, DB_USER,DB_PASS,DB_NAME);
        // Check connection
        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        } 
        echo ('Connected successfully' );
    }

    public function create(){
        echo('kurac');
    }

}



$database = new Database();







?>














