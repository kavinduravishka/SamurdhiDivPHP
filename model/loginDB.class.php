<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/dbh.class.php");

class LoginDB extends Dbh{


    public static function authenticateUser($username,$hashed_password){
        try{
            $sql1="SELECT * FROM user WHERE user_name=? AND password=? LIMIT 1";
            $stmt1=(new Dbh())->connect()->prepare($sql1);
            $stmt1->execute([$username,$hashed_password]);
            $resolved=$stmt1->fetchAll();

            if(!$resolved){
                
                //return FALSE;
                return null;
            }
            else{
                
                $user_id=$resolved[0]['id'];
                $user_name=$resolved[0]['user_name'];

                $sql2="UPDATE user SET last_login=NOW() WHERE id=? LIMIT 1";
                $stmt2=(new Dbh())->connect()->prepare($sql2);
                $stmt2->execute([$user_id]);

                //return TRUE;
                return $user_id;
            }
                                
        }
        catch(PDOException $e) {
            return null;
        }
    }
    
    
    public static function getUser($user_id){
        $sql="SELECT * FROM user WHERE id=? LIMIT 1";
        $db_con=new Dbh();
        $stmt=$db_con->connect()->prepare($sql);
        $stmt->execute([$user_id]);
        $users=$stmt->fetchAll();
        return $users;
    }


    public static function updateUser($user_name, $first_name , $last_name , $email,$user_id){
        $sql="UPDATE user SET user_name=?,first_name=?,last_name=?,email=? WHERE id=?";
        $db_con=new Dbh();
        $stmt=$db_con->connect()->prepare($sql);
        $stmt->execute([$user_name, $first_name , $last_name , $email,$user_id]);
    }


    public static function changePassword($hashed_password,$user_id){
        $query="UPDATE user SET password=? WHERE id=? LIMIT 1";
        $db_con=new Dbh();
        $stmt=$db_con->connect()->prepare($query);
        $stmt->execute([$hashed_password,$user_id]);
    }

    public static function checkChangePassword($user_id,$password){
        $sql1="SELECT * FROM user WHERE id=? AND password=? LIMIT 1";
        $stmt1=(new Dbh())->connect()->prepare($sql1);
        $stmt1->execute([$user_id,$password]);
        $resolved=$stmt1->fetchAll();
        if(!$resolved){                
            return FALSE;
        }
        else{
            return TRUE;
        }
    }


}