<?php



require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer2Contr\CBO.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer2Contr\LottaryFund.class.php");
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\contr\officer2Contr\MandatoryFund.class.php");

class Officer2 {

    public function  __construct(){

        $this->CBO=new CBO();
        $this->LottaryFund=new LottaryFund();
        $this->MandatoryFund=new MandatoryFund();
    }

    public function CBOorgWrite($data){
        $this->CBO->OrgWrite($data);
    }

    public function CBOmemWrite($data){
        $this->CBO->MemWrite($data);
    }

    public function LottaryFundWrite($data){

    }
    
    public function MFreleaseWrite($data){

    }

    public function MFrequestWrite($data){

    }
}