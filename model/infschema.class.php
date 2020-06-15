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

	private $confile = fopen("config/tablestoread.conf", "r") or die("Unable to open file!");


	private $fieldconf = fopen("config/promptfields.conf", "w");
	private $searchconf = fopen("config/searchfields.conf", "w");

	private $contowrite="<config>\n";



	private function readinfoschema($tblname){

		$dline="<table name={$tblname}>\n";

		$sql ="SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'SamurdhiDivision' AND TABLE_NAME = '{$tblname}'";
		$stmt = $this->connect()->prepare($sql);

		while ($row = $stmt->fetch()) {
			$dline.="<field name=\"{$row}\"type= required= default=0 ></field>\n";
		}

		$dline.="</table>\n";

		return $dline;
	}




	public function genconfile(){
		$data = fread($this->confile,filesize("webdictionary.txt"));
		fclose($confile);

		$dataarr=explode("\n", $data);

		foreach ($dataarr as $table) {
			if(!$table==""){
				$this->contowrite.= $this->readinfoschema($table)."\n";
			}
		}

		$this->contowrite.="</config>";

		fwrite($fieldconf, $contowrite);
		fwrite($searchconf, $contowrite);

		fclose($fieldconf);
		fclose($searchconf);
	}



}

$confilegenerator = new DBInfo();

$confilegenerator->genconfile();

?>	