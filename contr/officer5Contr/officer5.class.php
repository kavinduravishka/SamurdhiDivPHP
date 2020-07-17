<?php

//require_once("../model/officer4DB/officer4DB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer5DB\officer5DB.class.php");

class Officer5 {

    protected $new_salary=0;

    public function searchEntry($search){
        $personalfile_list=(new Officer5DB())->searchEntry($search);
        
        return $personalfile_list;        
    }

    public function addIncrement($nic_number,$salary,$increment){
        $new_salary=$salary+$increment;
        (new officer5DB())->addIncrement($nic_number,$new_salary,$increment);
        header('Location: http://localhost/SamurdhiDivPHP/view/officer5View/salary-updateView.php?salary_modified=true');


    }

    public static function getSalaryRecord($nic_number){
        $salary_record=(new Officer5DB())->getSalaryRecord($nic_number);
        
        return $salary_record;
    }

    

}