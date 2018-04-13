<?php 
    require_once("init.php");
?>
<?php 
 class User extends Database{
     protected static $db_table = "users";
     public $id;
     public $url;

        function __construct(){
  
        global $database;
        $sql = "INSERT INTO " . static::$db_table . "(url)";
		$sql .= "VALUES ('". $_GET['url']."')";
        $kurac = $database->query($sql);
        var_dump($kurac);
       
    }

    
   
   










 }

new User();


?>