<?php

class Login extends Dbh{

    public function verifyUser($username,$pwd){

        $hashed_password = sha1($pwd);

        $_SESSION['user_id']='';
        $_SESSION['user_name']='';

        try{
            $sql1="SELECT * FROM user WHERE user_name=? AND password=? LIMIT 1";
            $stmt1=$this->connect()->prepare($sql1);
            $stmt1->execute([$username,$hashed_password]);
            $resolved=$stmt1->fetchAll();
            if(!$resolved){
                $user_id='';
                $user_name='';
    
                return compact('user_id','user_name');
                
            }
            else{
                

                $_SESSION['user_id']=$resolved[0]['id'];
                $_SESSION['user_name']=$resolved[0]['user_name'];

                $sql2="UPDATE user SET last_login=NOW() WHERE id=? LIMIT 1";
                $stmt2=$this->connect()->prepare($sql2);
                $stmt2->execute([$_SESSION['user_id']]);

                return compact('user_id','user_name');
            }
                                
        }
        catch(PDOException $e) {

            $_SESSION['user_id']='';
            $_SESSION['user_name']='';

            return compact('user_id','user_name');  
            
        }
    }

    public function logOut(){
        session_start();
        $_SESSION = array();
        if(isset($_COOKIE[session_name()])){
            setcookie(session_name(),'',time()-86400,'/');
        }

        session_destroy();
        header('Location: login.index.php?logout=yes');
    }
}