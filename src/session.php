<?php 
    class Session {

        private $signed_in = false;
        public $user_id;
        public $count;
       
       
       
       function __construct(){
        session_start();
       }
           
       
       public function is_signed_in(){
           return $this->signed_in;
       
       }
     
       
       
       
       
       
       
         
     }
    $session = new Session();



?>