<?php

require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/reportfactory.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/bcrYatigaha.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/bcrBadalgama.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/bcrDivulapitiya.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/bcrDunagaha.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/bcrKatuwelgama.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/bcrKoongodamulla.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/bcrKotadeniyawa.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/bcrWalpita.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/bcrWelangana.class.php");
class BCReportFactory extends ReportFactory{

    protected function factoryMethod($type):Report{

        switch($type){

            case 1:
                return new BCRYatigaha();
                break;
            case 2:
                return new BCRBadalgama();
                break;

            case 3:
                return new BCRDivulapitiya();
                break;
            case 4:
                return new BCRDunagaha();
                break;
            case 5:
                return new BCRKatuwelgama();
                break;
            case 6:
                return new BCRkoongodamulla();
                break;
            case 7:
                return new BCRKotadeniyawa();
                break;
            case 8:
                return new BCRWalpita();
                break;
            case 9:
                return new BCRWelangana();
                break;

        }
    }
}