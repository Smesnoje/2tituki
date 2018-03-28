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

    
    public static function find_by_query($sql) {
		global $database;
        $result = $database->connection->query($sql);
            foreach($result->fetch_assoc() as $row){
                echo ($row);
                

            }
        }
		

		

	

	}
   



    





$database = new Database();







?>














