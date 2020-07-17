<?php  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/model/officer1DB/reportDB.class.php"); ?>
<?php  //require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/ireport.php"); 
require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/reportContr/ireport.php");?>

<?php

class BCReport implements Report {

   public function printReport($data){}

public function createBCRYatigaha(){

  $users = (new ReportDB())->getZonalDetails('41-Paranahalpe','Yatigaha');
  $count_list = "";
  $t_420=0;$t_1320=0;$t_1220=0;$t_2120=0;$t_3020=0;
  $count_list .= "<tr><td>1</td><td>41-Paranahalpe</td>";
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


  $users = (new ReportDB())->getZonalDetails('41A-Paranahalpe','Yatigaha');
  $count_list .= "<tr><td>2</td><td>41A-Paranahalpe</td>";
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

  $users = (new ReportDB())->getZonalDetails('42-Halpe','Yatigaha');
  $count_list .= "<tr><td>3</td><td>42-Halpe</td>";
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

    
  $users = (new ReportDB())->getZonalDetails('42A-Nariyamulla','Yatigaha');
  $count_list .= "<tr><td>4</td><td>42A-Nariyamulla</td>";
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


    $users = (new ReportDB())->getZonalDetails('42B-Gurullagama','Yatigaha');
  $count_list .= "<tr><td>5</td><td>42B-Gurullagama</td>";
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

    $users = (new ReportDB())->getZonalDetails('43-Pahala-Kithulwala','Yatigaha');
  $count_list .= "<tr><td>6</td><td>43-Pahala-Kithulwala</td>";
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

    $users = (new ReportDB())->getZonalDetails('43A-Ihala-Kithulwala','Yatigaha');
  $count_list .= "<tr><td>7</td><td>43A-Ihala-Kithulwala</td>";
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

    $users = (new ReportDB())->getZonalDetails('43B-Uthuru-Kithulwala','Yatigaha');
  $count_list .= "<tr><td>8</td><td>43B-Uthuru-Kithulwala</td>";
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

    $users = (new ReportDB())->getZonalDetails('44-Waththemulla','Yatigaha');
  $count_list .= "<tr><td>9</td><td>44-Waththemulla</td>";
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


    $users = (new ReportDB())->getZonalDetails('44A-Ihala-Kithulgala','Yatigaha');
  $count_list .= "<tr><td>10</td><td>44A-Ihala-Kithulgala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total10 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total10}</td></tr>";


    $users = (new ReportDB())->getZonalDetails('44B-Pahala-Kithulgala','Yatigaha');
  $count_list .= "<tr><td>11</td><td>44B-Pahala-Kithulgala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total11 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total11}</td></tr>";


     $users = (new ReportDB())->getZonalDetails('45-Kuligedara','Yatigaha');
  $count_list .= "<tr><td>12</td><td>45-Kuligedara</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total12 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total12}</td></tr>";


    $users = (new ReportDB())->getZonalDetails('46-Pahala-Madithiyawala','Yatigaha');
  $count_list .= "<tr><td>13</td><td>46-Pahala-Madithiyawala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total13 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total13}</td></tr>";


     $users = (new ReportDB())->getZonalDetails('46A-Pahala-Madithiyawala','Yatigaha');
  $count_list .= "<tr><td>14</td><td>46A-Pahala-Madithiyawala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total14 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total14}</td></tr>";


      $users = (new ReportDB())->getZonalDetails('47-Hangawaththa','Yatigaha');
  $count_list .= "<tr><td>15</td><td>47-Hangawaththa</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Amount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Amount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Amount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Amount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Amount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total15 = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total1}</td></tr>";


 $tt = $t_420+$t_1220+$t_1320+$t_2120+$t_3020;
  $count_list .="<tr><td></td><td>Total</td><td>{$t_420}</td><td>{$t_1320}</td><td>{$t_1220}</td><td>{$t_2120}</td><td>{$t_3020}</td><td>{$tt}</td></tr>";


    return array($count_list,$total1,$total2,$total3,$total4,$total5,$total6,$total7,$total8,$total9,$total10,$total11,$total12,$total13,$total14,$total15);

  }
 

  public function printReport($data){
  
  $adaptee->printReport($data);

  }
}


?>