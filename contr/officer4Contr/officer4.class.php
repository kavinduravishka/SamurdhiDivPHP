<?php

//require_once("../model/officer4DB/officer4DB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer4DB/officer4DB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer.class.php");

class Officer4 extends Officer{

    private static $instance = null;

    private function __construct(){}

    public static function getInstance(){
        if (self::$instance == null){
        self::$instance = new Officer4();
        }
    
        return self::$instance;
    }

    protected function handleLogin($request){
        if ($request==1) {
            header('Location: http://localhost/SamurdhiDivPHP/view/officer4View/personal-filesView.php');
            exit;
        }
        else {
             $this->m_logger->handleLogin($request);
        }
    }

    public function loadPersonalFiles() {

        $personalfile_list=(Officer4DB::getInstance())->loadPersonalFiles();
            
        return $personalfile_list;        
    }


    public function searchEntry($search){
        $personalfile_list=(Officer4DB::getInstance())->searchEntry($search);
        
        return $personalfile_list;        
    }

    public function addLetterRecord($name,$date,$particulars,$punishment,$ref){
        $nic=$this->findNIC($name);
        (Officer4DB::getInstance())->addLetterRecord($nic,$name,$date,$particulars,$punishment,$ref);
        header('Location: http://localhost/SamurdhiDivPHP/view/officer4View/personal-filesView.php?letter_record_added=true');
    }

    public function getAppLetterRecord($input_data){
        
        $records=(Officer4DB::getInstance())->getAppLetterRecord($input_data);
        return $records;
        //header('Location: http://localhost/SamurdhiDivPHP/view/officer4View/personal-filesView.php?letter_record_added=true');
    }

    public function findNIC($name){
        $NIC=(Officer4DB::getInstance())->findNIC($name);
        return $NIC;        
    }

    

}