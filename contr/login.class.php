<?php

//session_start();

//require_once("../model/loginDB.class.php");
require_once(__DIR__."/../model/loginDB.class.php");



class Login {

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if (self::$instance == null){
        self::$instance = new Login();
        }
    
        return self::$instance;
    }

    public function verifyUser($username,$pwd){

        $hashed_password = sha1($pwd);
        $login = new LoginDB();
        $login_details=$login->verifyUser($username,$hashed_password);        
        return $login_details;
        
    }

    public function logOut(){
        session_start();
        $_SESSION = array();
        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(),'',time()-86400,'/');
        }

        session_destroy();
        header('Location: http://localhost/SamurdhiDivPHP/view/loginView.php?logout=yes');
    }

    
  
  
  
}