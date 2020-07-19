<?php

//require_once("../model/officer4DB/officer4DB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer5DB\officer5DB.class.php");

class Officer5 {

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if (self::$instance == null){
        self::$instance = new Officer5();
        }
    
        return self::$instance;
    }

    public function addSalaryProfile($emp_no, $name,$designation,$bank,$acc_no,$basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance){
        $net_pay=$basic_salary+$interim_allo+$living_cost+$language_allo-$w_op-$agrahara-$stamp-$union-$other_loan-$special_advance;
        (Officer5DB::getInstance())->addSalaryProfile($emp_no, $name,$designation,$bank,$acc_no,$basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance,$net_pay);
        header('Location: http://localhost/SamurdhiDivPHP/view/officer5View/salary-updateView.php?salary_profile_added=true');

    }

    public function searchEntry($search){
        $salaryList=(Officer5DB::getInstance())->searchEntry($search);
        
        return $salaryList;        
    }

    public function loadSalaryFiles() {

        $salary_list=(Officer5DB::getInstance())->loadSalaryFiles();
            
        return $salary_list;        
    }

    public function addIncrement($nic_number,$salary,$increment){
        $new_salary=$salary+$increment;
        (Officer5DB::getInstance())->addIncrement($nic_number,$new_salary,$increment);
        header('Location: http://localhost/SamurdhiDivPHP/view/officer5View/salary-updateView.php?salary_modified=true');


    }

    public static function getSalaryProfile($emp_no){
        //$emp_no=int($emp_no);
        $name='';
        $designation='';
        $bank='';
        $acc_no='';
        $basic_salary='';
        $interim_allo='';
        $language_allo='';
        $living_cost='';
        $w_op='';
        $agrahara='';
        $stamp='';
        $union='';
        $other_loan='';
        $special_advance='';
        $net_pay='';

        $members=(Officer5DB::getInstance())->getSalaryProfile($emp_no);

        foreach($members as $member){
            
            $emp_no=$member['emp_no'];
            $name=$member['name'];
            $designation=$member['designation'];
            $bank=$member['bank'];
            $acc_no=$member['acc_no'];
            $basic_salary=$member['basic_salary'];
            $interim_allo=$member['interim_allo'];
            $language_allo=$member['language_allo'];
            $living_cost=$member['living_cost'];
            $gross_pay=$basic_salary+$interim_allo+$language_allo+$living_cost;
            $w_op=$member['w_op'];
            $agrahara=$member['agrahara'];
            $stamp=$member['stamp_value'];
            $union=$member['union_value'];
            $other_loan=$member['other_loan'];
            $special_advance=$member['special_advance'];
            $net_pay=$member['net_pay'];
                        
        }

        return compact('emp_no', 'name','designation','bank','acc_no','basic_salary','interim_allo','language_allo','living_cost','gross_pay','w_op','agrahara','stamp','union','other_loan','special_advance','net_pay');
        
    }

    public function modifySalaryProfile($emp_no, $name,$designation,$bank,$acc_no,$basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance){
        $net_pay=$basic_salary+$interim_allo+$living_cost+$language_allo-$w_op-$agrahara-$stamp-$union-$other_loan-$special_advance;
        (Officer5DB::getInstance())->modifySalaryProfile($emp_no, $name,$designation,$bank,$acc_no,$basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance,$net_pay);
        header('Location: http://localhost/SamurdhiDivPHP/view/officer5View/salary-updateView.php?salary_profile_modified=true');
    }

    public static function removeSalaryProfile($emp_no){
        (Officer5DB::getInstance())->removeSalaryProfile($emp_no);

    }

    public function calculateNetPayment($basic_salary,$interim_allo,$language_allo,$living_cost,$w_op,$agrahara,$stamp,$union,$other_loan,$special_advance){
        $net_pay=$basic_salary+$interim_allo+$living_cost+$language_allo-$w_op-$agrahara-$stamp-$union-$other_loan-$special_advance;
        return $net_pay;
    }



    

}