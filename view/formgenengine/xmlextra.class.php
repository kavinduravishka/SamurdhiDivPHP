<?php

class xmlex{

	public __construct($mode){
		$this->confile = "config/".$confile;
		$readfile = fopen("$this->confile","r");
		$xmlstring= fread($readfile,filesize($this->confile));

		$this->xml = new SimpleXMLElement($xmlstring);
	}



}

?>