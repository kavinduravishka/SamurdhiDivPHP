 <?php

 class Dbh{
 	private $host = "localhost";
 	private $user = "SDBUser";
 	private $pwd = "us3rDo3s3ntli3";
	private $dbName = "SamurdhiDivision";

 	protected function connect(){
 		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
 		$pdo = new PDO($dsn,$this->user,$this->pwd);
 		$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);

 		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

 		return $pdo;  
 	}
 }

 ?>

 