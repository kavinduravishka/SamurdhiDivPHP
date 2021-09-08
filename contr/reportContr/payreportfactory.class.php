<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/reportfactory.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer5Contr/payreport.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer5Contr/bank-payreport.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer5Contr/bank-requestreport.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer5Contr/account-listreport.class.php");

class PayReportFactory extends ReportFactory{

    protected function factoryMethod($type):Report{

        switch ($type) {
            case '51':
                return new PayReport();
                break;
            
            case '52':
                return new BankPayReport();
                break;

            case '53':
                return new BankPayRequestReport();
                break;

            case '54':
                return new AccountListReport();
                break;
            
            default:
                # code...
                break;
        }

        
    }
}


