<?php 
require_once("dbh.class.php");

abstract class Dbbase extends Dbh{

	abstract function write($data);

	abstract function find($data);

	abstract function update($data);
}

?>