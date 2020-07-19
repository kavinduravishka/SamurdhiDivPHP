<?php  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer1DB/reportDB.class.php"); 
 //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/ireport.php"); 
  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");
   require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/mpdfAdaptee.class.php");


class SubsidyAllowanceReport implements Report {

public function printReport($data){

  $adaptee = new MPDFAdaptee();
  $adaptee->createPDF($data);

}

public function viewReport(){

  $users = (new ReportDB())->getZonalDetails('Yatigaha');
  $count_list = "";
  $count_list .= "<tr><td>1</td><td>යටිගහ</td>";
    $t_1320=0;$t_1220=0;$t_2120=0;$t_3020=0;
    $ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    $ttben_1320=0;$ttben_1220=0;$ttben_2120=0;$ttben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $tben_1320=$ben_1320*1320;$tben_1220=$ben_1220*1220;$tben_2120=$ben_2120*2120;$tben_3020=$ben_3020*3020;
      $ttben_1320+=$tben_1320;$ttben_1220+=$tben_1220;$ttben_2120+=$tben_2120;$ttben_3020+=$tben_3020;
    $total1 = $tben_1320+$tben_1220+$tben_2120+$tben_3020;

    $count_list .= "<td>{$ben_1320}</td><td>{$tben_1320}</td><td>{$ben_1220}</td><td>{$tben_1220}</td><td>{$ben_2120}</td><td>{$tben_2120}</td><td>{$ben_3020}</td><td>{$tben_3020}</td><td>{$total1}</td></tr>";


  
    $users = (new ReportDB())->getZonalDetails('Badalgama');
  $count_list .= "<tr><td>2</td><td> බඩල්ගම</td>";
    $ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $tben_1320=$ben_1320*1320;$tben_1220=$ben_1220*1220;$tben_2120=$ben_2120*2120;$tben_3020=$ben_3020*3020;
    $total2 = $tben_1320+$tben_1220+$tben_2120+$tben_3020;
    $ttben_1320+=$tben_1320;$ttben_1220+=$tben_1220;$ttben_2120+=$tben_2120;$ttben_3020+=$tben_3020;
    $count_list .= "<td>{$ben_1320}</td><td>{$tben_1320}</td><td>{$ben_1220}</td><td>{$tben_1220}</td><td>{$ben_2120}</td><td>{$tben_2120}</td><td>{$ben_3020}</td><td>{$tben_3020}</td><td>{$total2}</td></tr>";

  $users = (new ReportDB())->getZonalDetails('Divulapitiya');
  $count_list .= "<tr><td>3</td><td> දිවුලපිටිය</td>";
    $ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $tben_1320=$ben_1320*1320;$tben_1220=$ben_1220*1220;$tben_2120=$ben_2120*2120;$tben_3020=$ben_3020*3020;
    $total3 = $tben_1320+$tben_1220+$tben_2120+$tben_3020;
    $ttben_1320+=$tben_1320;$ttben_1220+=$tben_1220;$ttben_2120+=$tben_2120;$ttben_3020+=$tben_3020;
    $count_list .= "<td>{$ben_1320}</td><td>{$tben_1320}</td><td>{$ben_1220}</td><td>{$tben_1220}</td><td>{$ben_2120}</td><td>{$tben_2120}</td><td>{$ben_3020}</td><td>{$tben_3020}</td><td>{$total3}</td></tr>";

    
  $users = (new ReportDB())->getZonalDetails('Dunugaha');
  $count_list .= "<tr><td>4</td><td>දුනගහ</td>";
    $ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $tben_1320=$ben_1320*1320;$tben_1220=$ben_1220*1220;$tben_2120=$ben_2120*2120;$tben_3020=$ben_3020*3020;
    $total4 = $tben_1320+$tben_1220+$tben_2120+$tben_3020;
    $ttben_1320+=$tben_1320;$ttben_1220+=$tben_1220;$ttben_2120+=$tben_2120;$ttben_3020+=$tben_3020;
    $count_list .= "<td>{$ben_1320}</td><td>{$tben_1320}</td><td>{$ben_1220}</td><td>{$tben_1220}</td><td>{$ben_2120}</td><td>{$tben_2120}</td><td>{$ben_3020}</td><td>{$tben_3020}</td><td>{$total4}</td></tr>";


    $users = (new ReportDB())->getZonalDetails('Katuwelgama');
  $count_list .= "<tr><td>5</td><td>කටුවැල්ගම</td>";
    $ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $tben_1320=$ben_1320*1320;$tben_1220=$ben_1220*1220;$tben_2120=$ben_2120*2120;$tben_3020=$ben_3020*3020;
    $total5 = $tben_1320+$tben_1220+$tben_2120+$tben_3020;
    $ttben_1320+=$tben_1320;$ttben_1220+=$tben_1220;$ttben_2120+=$tben_2120;$ttben_3020+=$tben_3020;
    $count_list .= "<td>{$ben_1320}</td><td>{$tben_1320}</td><td>{$ben_1220}</td><td>{$tben_1220}</td><td>{$ben_2120}</td><td>{$tben_2120}</td><td>{$ben_3020}</td><td>{$tben_3020}</td><td>{$total5}</td></tr>";

    $users = (new ReportDB())->getZonalDetails('Koongodamulla');
  $count_list .= "<tr><td>6</td><td>කෝන්ගොඩමුල්ල</td>";
    $ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $tben_1320=$ben_1320*1320;$tben_1220=$ben_1220*1220;$tben_2120=$ben_2120*2120;$tben_3020=$ben_3020*3020;
    $total6 = $tben_1320+$tben_1220+$tben_2120+$tben_3020;
    $ttben_1320+=$tben_1320;$ttben_1220+=$tben_1220;$ttben_2120+=$tben_2120;$ttben_3020+=$tben_3020;
    $count_list .= "<td>{$ben_1320}</td><td>{$tben_1320}</td><td>{$ben_1220}</td><td>{$tben_1220}</td><td>{$ben_2120}</td><td>{$tben_2120}</td><td>{$ben_3020}</td><td>{$tben_3020}</td><td>{$total6}</td></tr>";

    $users = (new ReportDB())->getZonalDetails('Kotadeniyawa');
  $count_list .= "<tr><td>7</td><td>කොටදෙනියාව </td>";
    $ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $tben_1320=$ben_1320*1320;$tben_1220=$ben_1220*1220;$tben_2120=$ben_2120*2120;$tben_3020=$ben_3020*3020;
    $total7 = $tben_1320+$tben_1220+$tben_2120+$tben_3020;
    $ttben_1320+=$tben_1320;$ttben_1220+=$tben_1220;$ttben_2120+=$tben_2120;$ttben_3020+=$tben_3020;
    $count_list .= "<td>{$ben_1320}</td><td>{$tben_1320}</td><td>{$ben_1220}</td><td>{$tben_1220}</td><td>{$ben_2120}</td><td>{$tben_2120}</td><td>{$ben_3020}</td><td>{$tben_3020}</td><td>{$total7}</td></tr>";

    $users = (new ReportDB())->getZonalDetails('Walpita');
  $count_list .= "<tr><td>8</td><td>වල්පිට</td>";
    $ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $tben_1320=$ben_1320*1320;$tben_1220=$ben_1220*1220;$tben_2120=$ben_2120*2120;$tben_3020=$ben_3020*3020;
    $total8 = $tben_1320+$tben_1220+$tben_2120+$tben_3020;
    $ttben_1320+=$tben_1320;$ttben_1220+=$tben_1220;$ttben_2120+=$tben_2120;$ttben_3020+=$tben_3020;
    $count_list .= "<td>{$ben_1320}</td><td>{$tben_1320}</td><td>{$ben_1220}</td><td>{$tben_1220}</td><td>{$ben_2120}</td><td>{$tben_2120}</td><td>{$ben_3020}</td><td>{$tben_3020}</td><td>{$total8}</td></tr>";

    $users = (new ReportDB())->getZonalDetails('Welangana');
  $count_list .= "<tr><td>9</td><td>වෙලඟන</td>";
    $ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $tben_1320=$ben_1320*1320;$tben_1220=$ben_1220*1220;$tben_2120=$ben_2120*2120;$tben_3020=$ben_3020*3020;
    $total9 = $tben_1320+$tben_1220+$tben_2120+$tben_3020;
    $ttben_1320+=$tben_1320;$ttben_1220+=$tben_1220;$ttben_2120+=$tben_2120;$ttben_3020+=$tben_3020;
    $count_list .= "<td>{$ben_1320}</td><td>{$tben_1320}</td><td>{$ben_1220}</td><td>{$tben_1220}</td><td>{$ben_2120}</td><td>{$tben_2120}</td><td>{$ben_3020}</td><td>{$tben_3020}</td><td>{$total9}</td></tr>";

    $tt = $total1+$total2+$total3+$total4+$total5+$total6+$total7+$total8+$total9;
  $count_list .="<tr><td></td><td>එකතුව</td><td>{$t_1320}</td><td>{$ttben_1320}</td><td>{$t_1220}</td><td>{$ttben_1220}</td><td>{$t_2120}</td><td>{$ttben_2120}</td><td>{$t_3020}</td><td>{$ttben_3020}</td><td>{$tt}</td></tr>";


    // return array($count_list,$total1,$total2,$total3,$total4,$total5,$total6,$total7,$total8,$total9,$total10,$total11,$total12,$total13,$total14,$total15);
    return $count_list;

  }
 
}


?>