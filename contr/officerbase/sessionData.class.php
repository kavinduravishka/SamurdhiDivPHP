<?php

abstract class SData{
	private $username="";
	private $userid="";
	private $logintime="";

	//private $taskdata="";

	public function __construct($uname,$uid){
		$this->username=$uname;
		$this->userid=$uid;
		$this->logintime=time();
	}




}

?>