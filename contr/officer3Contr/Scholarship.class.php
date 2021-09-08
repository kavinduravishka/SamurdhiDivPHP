<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer3DB/ScholarDB.class.php");

class Scholarship{

    private static $instance = null;

	private function __construct(){
		$this->scholar=new ScholarDB();
	}

	public static function getInstance()
    {
        if (self::$instance == null)
        {
        self::$instance = new Scholarship();
        }
    
        return self::$instance;
    }



    public function ScholarWrite($data){
    	$this->scholar->write($data);
    }

}



?>