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
        $sql = 'SELECT * FROM users WHERE id=3';
        
        $users = Database::find_by_query($sql);
        var_dump($users);
    }
    
   











 }

new User();


?>