<?php  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer1DB/reportDB.class.php"); 
 //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/ireport.php"); 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
   require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");


class BCRKoongodamulla implements Report {

public function printReport($data){

  $adaptee = new MPDFAdaptee();
  $adaptee->createPDF($data);

}
  private $t_420=0;
  private $t_1320=0;
  private $t_1220=0;
  private $t_2120=0;
  private $t_3020=0;

  public function countList($users){
    $count_list = "";
    $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
        if($user['Relief_Amount']==420){$ben_420+=1;$this->t_420+=1;}
        else if($user['Relief_Amount']==1320){$ben_1320+=1;$this->t_1320+=1;}
        else if($user['Relief_Amount']==1220){$ben_1220+=1;$this->t_1220+=1;}
        else if($user['Relief_Amount']==2120){$ben_2120+=1;$this->t_2120+=1;}
        else if($user['Relief_Amount']==3020){$ben_3020+=1;$this->t_3020+=1;}
      }
      $total1 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
      return $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total1}</td></tr>";
  }



  public function viewReport(){
    
      $gn_divisions = array('Ambalayaya','Pahala-Madampella','East-Kaluwarippuwa-North','Koongodamulla-North','Koongodamulla-West','Koongodamulla-South','Bolagala','Koongodamulla-East','Ihala-Madampella-North','Otharawadiya','East-Kaluwarippuwa-South','Miriswatta');
      $gn_divisions_sinhala = array('අම්බලයාය','පහල මඩම්පෙල්ල','නැගෙනහිර කලුවරිප්පුව උතුර','කෝනගොඩමුල්ල උතුර ','කෝනගොඩමුල්ල බටහිර','කෝනගොඩමුල්ල දකුණ','බොලගොල','කෝනගොඩමුල්ල නැගෙනහිර','ඉහල මාදම්පෙල්ල උතුර','ඔනරවාඩිය','නැගෙනහිර කලුවරිප්පුව දකුණ','මිරිස්වත්ත');
      
      $count_list = "";
      for($i=0; $i<count($gn_divisions); $i++){
        $index = $i+1;
        $users = (new ReportDB())->getGNDetails($gn_divisions[$i],'Koongodamulla');
        $count_list .= "<tr><td>".$index."</td><td>".$gn_divisions_sinhala[$i]."</td>";
        $count_list .= $this->countList($users);
      }

      $tt = $this->t_420+$this->t_1220+$this->t_1320+$this->t_2120+$this->t_3020;
      $count_list .="<tr><td></td><td>එකතුව</td><td>{$this->t_420}</td><td>{$this->t_1320}</td><td>{$this->t_1220}</td><td>{$this->t_2120}</td><td>{$this->t_3020}</td><td>{$tt}</td></tr>";
      return $count_list;

  }
}


?>