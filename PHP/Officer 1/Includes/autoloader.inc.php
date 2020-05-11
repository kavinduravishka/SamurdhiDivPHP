<?php
    //include 'includes/person.inc.php';

    spl_autoload_register('myAutoLoader');

    function myAutoLoader($className){
        $path="classes/";
        $extension=".class.php";
        $fullpath=$path . $className . $extension;

        if (!file_exists($fullpath)) {
            return false;
        }

        include_once $fullpath;
    }
?>