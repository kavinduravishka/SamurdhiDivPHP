<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/bcreportfactory.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");

abstract class ReportFactory{

    public function anOperation($type):Report{
        $report=$this->factoryMethod($type);
        return $report;
    }

    protected abstract function factoryMethod($type):Report;

}