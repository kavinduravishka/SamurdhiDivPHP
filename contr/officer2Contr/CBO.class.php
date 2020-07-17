<?php
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\CBOorgDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\CBOmemDB.class.php");

class CBO{
	public function __construct(){
		$this->CBOmem = new CBOmemDB();
        $this->CBOorg = new CBOmemDB();
	}

	public function OrgWrite($data){
		$this->CBOorg->write($data);
	}

	public function MemWrite($data){
		$this->CBOmem->write($data);
	}
}
?>
