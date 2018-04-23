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

    
    public static function duplicate($url){
        global $database;
        $sql = "SELECT * FROM users WHERE url like '";
        $sql .= $url;
        $sql .= "'";
        $result = $database->do_query($sql);
        $row = $result->fetch_assoc(); 
        return ($row['url']);
        
        
    }

        public function insert($tabel,$rows,$values){
            $sql = "INSERT INTO " . $tabel . " (".$rows.")";
            $sql .= "VALUES ('". $values ."')";

            return $sql;
        }
		
        public function do_query($sql){
            //    $result = mysqli_query($this->connection, $sql); ->outdated
               $result = $this->connection->query($sql);
             
        
            return $result;
           }
		

	

	}
   



    





$database = new Database();







?>














