<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/reportfactory.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer4Contr/appreciation_letter_report.class.php");

class AppreciationLetterReportFactory extends ReportFactory{

    protected function factoryMethod($type):Report{

        return new AppreciationLetterReport();
    }
}