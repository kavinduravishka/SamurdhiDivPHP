<?php

class Scholarship{

	private function __construct(){}

	public static function getInstance()
    {
        if (self::$instance == null)
        {
        self::$instance = new Scholarship();
        }
    
        return self::$instance;
    }

}

?>