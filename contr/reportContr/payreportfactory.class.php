<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/reportfactory.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer5Contr/payreport.class.php");

class PayReportFactory extends ReportFactory{

    protected function factoryMethod($type):Report{

        switch ($type) {
            case '51':
                return new PayReport();
                break;
            
            case '52':
                return new BankPayReport();
                break;
            
            default:
                # code...
                break;
        }

        
    }
}