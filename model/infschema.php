<?php 

//================  FOR THE DEVELOPER's USE ONLY  ===============================

/*

TEMPLATE ::

<config>
	<table name= >
		<field name="xxx" type= required= default= >  </field>
		<field name="xxx" type= required= default= >  </field>
		<field name="xxx" type= required= default= >  </field>
	</table>

	<table name= >
		<field name="xxx" type= required= default= >  </field>
		<field name="xxx" type= required= default= >  </field>
		<field name="xxx" type= required= default= >  </field>
	</table>

	<table name= >
		<field name="xxx" type= required= default= >  </field>
		<field name="xxx" type= required= default= >  </field>
		<field name="xxx" type= required= default= >  </field>
	</table>
</config>

*/

require_once("dbh.class.php");

class DBInfo extends Dbh{

	private $confile = null;


	private $fieldconf = null;
	private $searchconf = null;

	private $contowrite="<config>\n";

	private function detectType($dbtype):string {
		if($dbtype=="int" || $dbtype=="tinyint" || $dbtype=="double" || $dbtype=="decimal"){
			return "number";
		}else if(){

		}
	}

	private function readinfoschema($tblname){

		$dline="<table name={$tblname}>\n";

		$sql ="SELECT COLUMN_NAME , DATA_TYPE FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'SamurdhiDivision' AND TABLE_NAME = '{$tblname}'";

		try{
			$stmt = $this->connect()->query($sql);
		}catch(Exception $e){
			returnError($stmt);
		}
		
		while ($row = $stmt->fetch()) {
			
			$fieldname=vsprintf("%-25s","\"".$row['COLUMN_NAME']."\"");

			$dline.=<<<EOD
	<field name={$fieldname} {$row['DATA_TYPE']}\ttype="text" required="0" default="" ></field>\n
EOD;
		}

		$dline.="</table>\n";

		return $dline;
	}




	public function genconfile(){

		$this->confile = fopen("config/tablestoread.conf", "r") or die("Unable to open file!");


		$this->fieldconf = fopen("../view/formgenengine/config/promptfields.conf", "w");
		$this->searchconf = fopen("../view/formgenengine/config/searchfields.conf", "w");


		$data = fread($this->confile,filesize("config/tablestoread.conf"));
		fclose($this->confile);

		$dataarr=explode("\n", $data);

		foreach ($dataarr as $table) {
			if(!$table==""){
				$this->contowrite.= $this->readinfoschema($table)."\n";
			}
		}

		$this->contowrite.="</config>";

		echo $this->contowrite;

		fwrite($this->fieldconf, $this->contowrite);
		fwrite($this->searchconf, $this->contowrite);

		fclose($this->fieldconf);
		fclose($this->searchconf);
	}



}

$confilegenerator = new DBInfo();

$confilegenerator->genconfile();

?>	