<?php

//require_once(__DIR__."/../model/loginDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/loginDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbh.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/officer1.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/officer2.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/officer3.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer4Contr/officer4.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer5Contr/officer5.class.php");

abstract class Officer{

    protected  $m_logger=null;                                          //Chain Of Reponsibility    

    public function setNextLogger(Officer $logger){                      
        $this->m_logger = $logger;
    }

    final public function handleLoginRequest(String $request){

        $processed = $this->handleLogin($request);

        if (! $processed && $this->m_logger !== null) {
            $this->m_logger->handleLogin($request);
        }        
    }

    abstract protected function handleLogin(String $request);


    public static function authenticateUser($user_name, $password){

        $hashed_password = sha1($password);
            
        $logger1=Officer1::getInstance();
        $logger2=Officer2::getInstance();
        $logger3=Officer3::getInstance();
        $logger4=Officer4::getInstance();
        $logger5=Officer5::getInstance();

        $logger1->setNextLogger($logger2);
        $logger2->setNextLogger($logger3);
        $logger3->setNextLogger($logger4);
        $logger4->setNextLogger($logger5);
        //$logger5->setLogger();

        if(LoginDB::authenticateUser($user_name,$hashed_password)){
            $_SESSION['user_name']=$user_name;
            $login_request=$_SESSION['user_name'];
            $logger1->handleLoginRequest($login_request);
        }
        else{
            $errors[]='Invalid UserName/ Password';
        }
    }

    public static function logOut(){
        session_start();
        $_SESSION = array();
        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(),'',time()-86400,'/');
        }

        session_destroy();
        header('Location: http://localhost/SamurdhiDivPHP/view/loginView.php?logout=yes');
    }
    
    

    

}