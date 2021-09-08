<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer2DB/CBOorgDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer2DB/CBOmemDB.class.php");

class CBO{

	private static $instance=null;

	private function __construct(){
		$this->CBOmem = new CBOmemDB();
        $this->CBOorg = new CBOorgDB();
	}

	public static function getInstance()
    {
        if (self::$instance == null)
        {
        self::$instance = new CBO();
        }
    
        return self::$instance;
    }

	public function OrgWrite($data){
		try{
			$this->CBOorg->write($data);
		}catch(PDOException $exception){
			if(strpos($exception->getMessage(),"Duplicate entry")!==false){
				$this->CBOorg->update($data);
				$this->CBOmem->deleteOldmem(array("CBORegNo"=>$data['RegNo']));
			}
		}
	}

	public function MemWrite($data){
		$this->CBOmem->write($data);
	}

	public function selectMem($data){
		return $this->CBOmem->find($data);
	}
}
?>
