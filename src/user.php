<?php 
require_once('init.php');
require_once('help.php');
 class User extends Database{

     protected static $db_table = "users";
     public $id;
     public $url;

        function __construct(){

        global $database;
        if  (isset($_GET['url'])){
            $url = $_GET['url'];
            if (strpos($url, 'https://www.facebook.com') !== false){
                if (($database->duplicate($url))) {
                    $msg = $database->duplicate($url);
                    header('Location: '.''.Help::root()."?msg=$msg already exists.");
                }else{
                    $sql = $database->insert(SELF::$db_table,'url',$url);
                    $database->do_query($sql);
                    header('Location: '.''.Help::root().'templates/main.php');
                }
                
            }
            else{
                header('Location: '.''.Help::root().'?msg=Enter a valid Facebook url');

            }
        }
            
       
    }

    
   
   










 }

new User();


?>