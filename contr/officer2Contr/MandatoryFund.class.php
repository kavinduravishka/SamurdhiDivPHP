<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\MFRelDB.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer2DB\MFReqDB.class.php");

class MandatoryFund{


	public function __construct(){
		$this->MFRelease  = new MFRelDB();
        $this->MFRequest  = new MFReqDB();
	}
}
?>