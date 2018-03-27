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
       
    }

    public static function find_all() {
		return static::find_by_query("SELECT * FROM " . static::$db_table . " ");

    }

    public static function find_by_id($id) {
		global $database;
		$the_result_array = static::find_by_query("SELECT * FROM " . static::$db_table . " WHERE id = ".$id. "LIMIT 1");

		return !empty($the_result_array) ? array_shift($the_result_array) : false;

		
	}



    

}



$database = new Database();







?>














