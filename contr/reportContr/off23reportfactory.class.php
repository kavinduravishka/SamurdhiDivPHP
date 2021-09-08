<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/reportfactory.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/mfreport.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/sfpayreport.class.php");

class off23report extends ReportFactory{

    protected function factoryMethod($type):Report{

        switch($type){

            case 1:
                return new mfreport();
                break;
            case 2:
                return new sfpayreport();
                break;

            
        }
    }
}

?>