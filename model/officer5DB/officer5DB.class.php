<?php

//require_once("../model/dbh.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\dbh.class.php");

class Officer5DB extends Dbh{

    public function searchEntry($search){
        $salary_record='';
        $sql="SELECT * FROM salarydetails WHERE (nic_number LIKE '%{$search}%' OR name LIKE '%{$search}%' ) ORDER BY date_appointed";
        $stmt=$this->connect()->query($sql); 
        $members=$stmt->fetchAll();

        foreach($members as $member){           
          
            $salary_record.="<tr>";
            $salary_record.="<td>{$member['nic_number']}</td>";
            $salary_record.="<td>{$member['name']}</td>";
            $salary_record.="<td>{$member['date_appointed']}</td>";
            $salary_record.="<td>{$member['salary']}</td>";
            $salary_record.="<td><a href=\"add-incrementView.php?nic_number={$member['nic_number']}\">Add Increment</a></td>";
            $salary_record.="</tr>";
        }
        return $salary_record;        
    }

    public function addIncrement($nic_number,$salary,$increment){
        $sql="UPDATE salarydetails SET salary=?,last_increment=? WHERE nic_number=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$salary, $increment,$nic_number]);
        

    }
    
    public function addSalaryRecord($nic_number, $name ,$date_appointed ,$salary){
        $sql="INSERT INTO salarydetails(nic_number, name ,date_appointed ,salary ) VALUES (?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$nic_number, $name , $date_appointed ,$salary]);
        
    }

    
    public static function getSalaryRecord($nic_number){
        $sql="SELECT * FROM salarydetails WHERE nic_number=?";
        $db_con=new Dbh();
        $stmt=$db_con->connect()->prepare($sql);
        $stmt->execute([$nic_number]);
        $members=$stmt->fetchAll();

        return $members;
    }
    
    


}