<?php

//require_once("../model/officer4DB/officer4DB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer4DB\officer4DB.class.php");

class Officer4 {

    public function loadPersonalFiles() {

        $personalfile_list=(new Officer4DB())->loadPersonalFiles();
            
        return $personalfile_list;        
    }


    public function searchEntry($search){
        $personalfile_list=(new Officer4DB())->searchEntry($search);
        
        return $personalfile_list;        
    }

    public function addLetterRecord($name,$date,$particulars,$punishment,$ref){
        $nic=$this->findNIC($name);
        (new Officer4DB())->addLetterRecord($nic,$name,$date,$particulars,$punishment,$ref);
        header('Location: http://localhost/SamurdhiDivPHP/view/officer4View/personal-filesView.php?letter_record_added=true');
    }

    public function findNIC($name){
        $NIC=(new Officer4DB())->findNIC($name);
        return $NIC;        
    }

    

}