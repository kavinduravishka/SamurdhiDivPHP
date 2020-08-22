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

    // protected  $m_logger=null;                                          //Chain Of Reponsibility    

    // public function setNextLogger($logger){                      
    //     $this->m_logger = $logger;
    //     //return $logger;
    // }

    // final public function handleLoginRequest($request){

    //     $processed = $this->handleLogin($request);

    //     if (! $processed && $this->m_logger != null) {
    //         ($this->m_logger)->handleLogin($request);
    //     }        
    // }

    // abstract protected function handleLogin( $request);

    private $nextHandler;

    public function setNext(Handler $handler): Handler
    {
        $this->nextHandler = $handler;
        // Returning a handler from here will let us link handlers in a
        // convenient way like this:
        // $monkey->setNext($squirrel)->setNext($dog);
        return $handler;
    }

    public function handle($request)
    {
        if ($this->nextHandler) {
            return $this->nextHandler->handle($request);
        }

        return null;
    }


    public static function authenticateUser($user_name, $password){

        $hashed_password = sha1($password);
            
        $logger1=Officer1::getInstance();
        $logger2=Officer2::getInstance();
        $logger3=Officer3::getInstance();
        $logger4=Officer4::getInstance();
        $logger5=Officer5::getInstance();

        $logger1->setNextLogger($logger2)->setNextLogger($logger3)->setNextLogger($logger4)>setNextLogger($logger5);
        // $logger2->setNextLogger($logger3);
        // $logger3->setNextLogger($logger4);
        // $logger4->setNextLogger($logger5);
        //$logger5->setLogger();

        //$_SESSION['user_id'];

        if((LoginDB::authenticateUser($user_name,$hashed_password))!=null){
            $_SESSION['user_name']=$user_name;
            $_SESSION['user_id']=LoginDB::authenticateUser($user_name,$hashed_password);
            $login_request=$_SESSION['user_id'];
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


    public static function getUserDetails($user_id){
        $user_name='';
        $first_name='';
        $last_name='';
        $email='';

        
        $users=LoginDB::getUser($user_id);
        foreach($users as $user){
        $user_name=$user['user_name'];
        $first_name=$user['first_name'];
        $last_name=$user['last_name'];
        $email=$user['email'];
        }
        return compact('user_name','first_name','last_name','email');

    }

    public static function updateUserDetails($user_name, $first_name , $last_name , $email,$user_id){

        $dashboards=array(
            1=>'officer4View/personal-filesView.php',
            2=>'officer1View/beneficiariesView.php',
            3=>'officer2view/dashboardView.php',
            4=>'officer3view/dashboardView.php',
            5=>'officer5View/salary-updateView.php',
        );
        $header_dashboard=$dashboards[ $_SESSION['user_id'] ];
        $header_tag="Location:http://localhost/SamurdhiDivPHP/view/".$header_dashboard."?user_modified=true";

        LoginDB::updateUser($user_name, $first_name , $last_name , $email,$user_id);
        header($header_tag);
    }

    public static function changePassword($password,$user_id){
        $hashed_password=sha1($password);
        LoginDB::changePassword($hashed_password,$user_id);
        header('Location: http://localhost/SamurdhiDivPHP/view/userProfileView.php/?pwd_modified=true');
    }
    
    

    

}