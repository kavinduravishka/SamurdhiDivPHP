<?php

//require_once("../model/dbh.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\dbh.class.php");

class StaffMemberDB extends Dbh{

    public static function getMember($member_id){
        $member_id=(int)$member_id;
        $sql="SELECT * FROM personalfile WHERE member_id=?";
        $db_con=new Dbh();
        $stmt=$db_con->connect()->prepare($sql);
        $stmt->execute([$member_id]);
        $members=$stmt->fetchAll();

        return $members;
    }

    
    public function addMember($nic_number, $name , $designation , $service ,$date_appointed ,$date_of_birth ,$date_of_pension ,$w_op_number, $member_type){
        $sql="INSERT INTO personalfile(nic_number, name , designation , service ,date_appointed ,date_of_birth ,date_of_pension ,w_op_number, member_type,is_deleted ) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$nic_number, $name , $designation , $service ,$date_appointed ,$date_of_birth ,$date_of_pension ,$w_op_number, $member_type,0]);
        
    }


    public function updateMember($nic_number, $name , $designation , $service ,$date_appointed ,$date_of_birth ,$date_of_pension ,$w_op_number, $member_type,$member_id){
        $sql="UPDATE personalfile SET nic_number=?,name=?,designation=?,service=?,date_appointed=?,date_of_birth=?,date_of_pension=?,w_op_number=?, member_type=? WHERE member_id=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$nic_number, $name , $designation , $service ,$date_appointed ,$date_of_birth ,$date_of_pension ,$w_op_number, $member_type,$member_id]);
        

    }

    public static function removeMember($member_id){
        $sql="UPDATE personalfile SET is_deleted=? WHERE member_id=?";
        $db_con=new Dbh();
        $stmt=$db_con->connect()->prepare($sql);
        $stmt->execute(['1',$member_id]);

    }



}