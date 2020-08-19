<?php

//require_once("../model/dbh.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\dbh.class.php");

class Officer4DB extends Dbh{

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if (self::$instance == null){
        self::$instance = new Officer4DB();
        }
    
        return self::$instance;
    }

    public function loadPersonalFiles() {

        $personalfile_list='';
        $sql="SELECT * FROM personalfile WHERE is_deleted=0 ORDER BY date_appointed";
        $stmt=$this->connect()->query($sql);
        while($row=$stmt->fetch()){
            $personalfile_list.="<tr>";
            $personalfile_list.="<td>{$row['nic_number']}</td>";
            $personalfile_list.="<td>{$row['name']}</td>";
            $personalfile_list.="<td>{$row['designation']}</td>";
            $personalfile_list.="<td>{$row['service']}</td>";
            $personalfile_list.="<td>{$row['date_appointed']}</td>";
            $personalfile_list.="<td>{$row['date_of_birth']}</td>";
            $personalfile_list.="<td>{$row['date_of_pension']}</td>";
            $personalfile_list.="<td>{$row['w_op_number']}</td>";
            $personalfile_list.="<td><a href=\"modify-memberView.php?member_id={$row['member_id']}\">Edit</a></td>";
            $personalfile_list.="<td><a href=\"../includes/officer4Inc/delete-memberInc.php?member_id={$row['member_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $personalfile_list.="</tr>";
        }
        return $personalfile_list;        
    }


    public function searchEntry($search){
        $personalfile_list='';
        $sql="SELECT * FROM personalfile WHERE (nic_number LIKE '%{$search}%' OR name LIKE '%{$search}%' ) AND is_deleted=0 ORDER BY date_appointed";
        $stmt=$this->connect()->query($sql); 
        $members=$stmt->fetchAll();

        foreach($members as $member){           
          
            $personalfile_list.="<tr>";
            $personalfile_list.="<td>{$member['nic_number']}</td>";
            $personalfile_list.="<td>{$member['name']}</td>";
            $personalfile_list.="<td>{$member['designation']}</td>";
            $personalfile_list.="<td>{$member['service']}</td>";
            $personalfile_list.="<td>{$member['date_appointed']}</td>";
            $personalfile_list.="<td>{$member['date_of_birth']}</td>";
            $personalfile_list.="<td>{$member['date_of_pension']}</td>";
            $personalfile_list.="<td>{$member['w_op_number']}</td>";
            $personalfile_list.="<td><a href=\"modify-memberView.php?member_id={$member['member_id']}\">Edit</a></td>";
            $personalfile_list.="<td><a href=\"../includes/officer4Inc/delete-memberInc.php?member_id={$member['member_id']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $personalfile_list.="</tr>";
        }
        return $personalfile_list;        
    }
    
    public function findNIC($search){
        $NIC='';
        $sql="SELECT * FROM personalfile WHERE (nic_number LIKE '%{$search}%' OR name LIKE '%{$search}%' ) AND is_deleted=0 ORDER BY date_appointed";
        $stmt=$this->connect()->query($sql); 
        $members=$stmt->fetchAll();

        foreach($members as $member){           
            $NIC.="{$member['nic_number']}";            
        }
        return $NIC;         
    }

    public function addLetterRecord($nic,$name,$date,$particulars,$punishment,$ref){
        $sql="INSERT INTO appreciationletter(nic,name,date,particulars,punishment,ref) VALUES (?,?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$nic,$name,$date,$particulars,$punishment,$ref]);        
    }


    public function getAppLetterRecord($search){

        $sql="SELECT * FROM appreciationletter WHERE (nic LIKE '%{$search}%' OR name LIKE '%{$search}%' )";
        $stmt=$this->connect()->query($sql); 
        $records=$stmt->fetchAll();
        return $records;
    }


}