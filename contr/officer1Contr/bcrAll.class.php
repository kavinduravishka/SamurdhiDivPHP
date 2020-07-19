<?php  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer1DB/reportDB.class.php"); 
 //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/ireport.php"); 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
   require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");


class AllBCReport implements Report {

public function printReport($data){

  $adaptee = new MPDFAdaptee();
  $adaptee->createPDF($data);

}

public function viewReport(){

  $users = (new ReportDB())->getZonalDetails('Yatigaha');
  $count_list = "";
  $t_420=0;$t_1320=0;$t_1220=0;$t_2120=0;$t_3020=0;
  $count_list .= "<tr><td>1</td><td>යටිගහ</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total1 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total1}</td></tr>";


  
    $users = (new ReportDB())->getZonalDetails('Badalgama');
  $count_list .= "<tr><td>2</td><td> බඩල්ගම</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total2 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total2}</td></tr>";

  $users = (new ReportDB())->getZonalDetails('Divulapitiya');
  $count_list .= "<tr><td>3</td><td> දිවුලපිටිය</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total3 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total3}</td></tr>";

    
  $users = (new ReportDB())->getZonalDetails('Dunugaha');
  $count_list .= "<tr><td>4</td><td>දුනගහ</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total4 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total4}</td></tr>";


    $users = (new ReportDB())->getZonalDetails('Katuwelgama');
  $count_list .= "<tr><td>5</td><td>කටුවැල්ගම</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total5 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total5}</td></tr>";

    $users = (new ReportDB())->getZonalDetails('Koongodamulla');
  $count_list .= "<tr><td>6</td><td>කෝන්ගොඩමුල්ල</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total6 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total6}</td></tr>";

    $users = (new ReportDB())->getZonalDetails('Kotadeniyawa');
  $count_list .= "<tr><td>7</td><td>කොටදෙනියාව </td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total7 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total7}</td></tr>";

    $users = (new ReportDB())->getZonalDetails('Walpita');
  $count_list .= "<tr><td>8</td><td>වල්පිට</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total8 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total8}</td></tr>";

    $users = (new ReportDB())->getZonalDetails('Welangana');
  $count_list .= "<tr><td>9</td><td>වෙලඟන</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total9 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total9}</td></tr>";


 $tt = $t_420+$t_1220+$t_1320+$t_2120+$t_3020;
  $count_list .="<tr><td></td><td>එකතුව</td><td>{$t_420}</td><td>{$t_1320}</td><td>{$t_1220}</td><td>{$t_2120}</td><td>{$t_3020}</td><td>{$tt}</td></tr>";


    // return array($count_list,$total1,$total2,$total3,$total4,$total5,$total6,$total7,$total8,$total9,$total10,$total11,$total12,$total13,$total14,$total15);
    return $count_list;

  }
 
}


?>