<?php

require_once(__DIR__."/../reportContr/reportfactory.class.php");

class BCReportFactory extends ReportFactory{

    protected function factoryMethod($type){
        return new BCReport();
    }
}