<?php

require_once("dbh.class.php");
require_once("../include/yfa.inc.php");

function returnError($stmt){
    $errors = $stmt->errorInfo();
    echo "<h5>".$errors[2]."</h5>";
    echo "<br>";
    echo "<h5>".$errors[2]."</h5>";
    echo "<br>";
    echo "<h5>".$errors[2]."</h5>";
    exit;
}

class LOF extends Dbh{

	public function  setLFRecord($NIC, $Name, $Address, $Date){
		$sDate=yfa($Date);
		$sql = "INSERT INTO LottaryFundRecord(NIC,Name,Address,Date) values (?,?,?,?)";
		$stmt = $this->connect()->prepare($sql);

		try{
			$stmt->execute([$NIC, $Name, $Address, $sDate]);
		}catch(Exception $e){
			returnError($stmt);
		}
		
	}

	public function checkifAlready($NIC){
		$sql = "SELECT COUNT(*) FROM LottaryFundRecord WHERE NIC = ?";
		$stmt = $this->connect()->prepare($sql);

		try{
			$stmt->execute([$NIC]);

			$count= $stmt->fetch();

			if($count==0){
				return 0;
			}else{
				return 1;
			}
		}catch(Exception $e){
			returnError($stmt);
		}
	}

}
