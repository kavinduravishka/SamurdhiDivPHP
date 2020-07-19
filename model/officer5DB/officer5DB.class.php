<?php

//require_once("../model/dbh.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\dbh.class.php");

class Officer5DB extends Dbh{

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if (self::$instance == null){
        self::$instance = new Officer5DB();
        }
    
        return self::$instance;
    }

    public function searchEntry($search){
        $salary_record='';
        $sql="SELECT * FROM salarydetails WHERE (emp_no LIKE '%{$search}%' OR name LIKE '%{$search}%' ) ";
        $stmt=$this->connect()->query($sql); 
        $members=$stmt->fetchAll();

        foreach($members as $member){           
          
            $salary_record.="<tr>";
            $salary_record.="<td>{$member['emp_no']}</td>";
            $salary_record.="<td>{$member['name']}</td>";
            $salary_record.="<td>{$member['designation']}</td>";
            $salary_record.="<td><a href=\"modify-salaryprofileView.php?emp_no={$member['emp_no']}\">Modify</a></td>";
            $salary_record.="<td><a href=\"delete-salaryprofileInc.php?emp_no={$member['emp_no']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $salary_record.="<td><a href=\"monthly-payreportView.php?emp_no={$member['emp_no']}\">PayReport</a></td>";
            $salary_record.="</tr>";
        }
        return $salary_record;        
    }

    public function loadSalaryFiles() {

        $salaryprofile_list='';
        $sql="SELECT * FROM salarydetails WHERE is_deleted=0 ";
        $stmt=$this->connect()->query($sql);
        while($row=$stmt->fetch()){
            $salaryprofile_list.="<tr>";
            $salaryprofile_list.="<td>{$row['emp_no']}</td>";
            $salaryprofile_list.="<td>{$row['name']}</td>";
            $salaryprofile_list.="<td>{$row['designation']}</td>";
            $salaryprofile_list.="<td><a href=\"modify-salaryprofileView.php?emp_no={$row['emp_no']}\">Modify</a></td>";
            $salaryprofile_list.="<td><a href=\"delete-salaryprofileInc.php?emp_no={$row['emp_no']}\" onclick=\"return confirm('Are you sure?');\">Delete</a></td>";
            $salaryprofile_list.="<td><a href=\"monthly-payreportView.php?emp_no={$row['emp_no']}\">PayReport</a></td>";
            $salaryprofile_list.="</tr>";
        }
        return $salaryprofile_list;        
    }

    public function addIncrement($nic_number,$salary,$increment){
        $sql="UPDATE salarydetails SET salary=?,last_increment=? WHERE nic_number=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$salary, $increment,$nic_number]);
        

    }
    
    public function addSalaryProfile($emp_no, $name,$designation,$bank,$acc_no,$basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance,$net_pay){
        $sql="INSERT INTO salarydetails(emp_no, name,designation,bank,acc_no,basic_salary,interim_allo,language_allo,living_cost,w_op,agrahara,stamp_value,union_value,other_loan,special_advance,net_pay,is_deleted ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$emp_no, $name,$designation,$bank,$acc_no,$basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance,$net_pay,0]);
        
    }

    
    public static function getSalaryProfile($emp_no){
        $sql="SELECT * FROM salarydetails WHERE emp_no=?";
        $db_con=new Dbh();
        $stmt=$db_con->connect()->prepare($sql);
        $stmt->execute([$emp_no]);
        $members=$stmt->fetchAll();

        return $members;
    }

    public function modifySalaryProfile($emp_no, $name,$designation,$bank,$acc_no,$basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance,$net_pay){
        $sql="UPDATE salarydetails SET name=?,designation=?,bank=?,acc_no=?,basic_salary=?,interim_allo=?,language_allo=?,living_cost=?,w_op=?,agrahara=?,stamp_value=?,union_value=?,other_loan=?,special_advance=?,net_pay=? WHERE emp_no=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$name,$designation,$bank,$acc_no,$basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance,$net_pay,$emp_no]);
    }
    
    public static function removeSalaryProfile($emp_no){
        $sql="UPDATE salarydetails SET is_deleted=? WHERE emp_no=?";
        $db_con=new Dbh();
        $stmt=$db_con->connect()->prepare($sql);
        $stmt->execute(['1',$emp_no]);

    }
    


}