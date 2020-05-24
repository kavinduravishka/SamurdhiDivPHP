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
    

}