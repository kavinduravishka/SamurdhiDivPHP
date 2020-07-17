<?php

require_once(__DIR__."/../reportContr/ireport.php");

abstract class ReportFactory{

    public function anOperation($type){
        Report report=factoryMethod($type);
        return report;
    }

    protected abstract function factoryMethod($type);

}