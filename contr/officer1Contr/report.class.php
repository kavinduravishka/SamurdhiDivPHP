<?php  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."\SamurdhiDivPHP\model\officer1DB\reportDB.class.php"); ?>

<?php

class Report{

public function createBCRYatigaha(){

  $users = (new ReportDB())->getZonalDetails('41-Paranahalpe','Yatigaha');
  $count_list = "";
  $t_420=0;$t_1320=0;$t_1220=0;$t_2120=0;$t_3020=0;
  $count_list .= "<tr><td>1</td><td>41-Paranahalpe</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";


  $users = (new ReportDB())->getZonalDetails('41A-Paranahalpe','Yatigaha');
  $count_list .= "<tr><td>2</td><td>41A-Paranahalpe</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  $users = (new ReportDB())->getZonalDetails('42-Halpe','Yatigaha');
  $count_list .= "<tr><td>3</td><td>42-Halpe</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";
42A-Nariyamulla

 $users = (new ReportDB())->getZonalDetails('42A-Nariyamulla','Yatigaha');
  $count_list .= "<tr><td>4</td><td>42A-Nariyamulla</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
    foreach($users as $user){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='42B-Gurullagama' AND Bank_Zonal = 'Yatigaha'  ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>5</td><td>42B-Gurullagama</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='43-Pahala-Kithulwala'  AND Bank_Zonal = 'Yatigaha' ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>6</td><td>43-Pahala-Kithulwala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='43A-Ihala-Kithulwala' AND Bank_Zonal = 'Yatigaha'  ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>7</td><td>43A-Ihala-Kithulwala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='43B-Uthuru-Kithulwala' AND Bank_Zonal = 'Yatigaha'  ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>8</td><td>43B-Uthuru-Kithulwala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='44-Waththemulla' AND Bank_Zonal = 'Yatigaha'  ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>9</td><td>44-Waththemulla</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='44A-Ihala-Kithulgala' AND Bank_Zonal = 'Yatigaha'  ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>10</td><td>44A-Ihala-Kithulgala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='44B-Pahala-Kithulgala' AND Bank_Zonal = 'Yatigaha'  ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>11</td><td>44B-Pahala-Kithulgala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='45-Kuligedara' AND Bank_Zonal = 'Yatigaha'  ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>12</td><td>45-Kuligedara</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='46-Pahala-Madithiyawala' AND Bank_Zonal = 'Yatigaha'  ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>13</td><td>46-Pahala-Madithiyawala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='46A-Pahala-Madithiyawala' AND Bank_Zonal = 'Yatigaha'  ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>14</td><td>46A-Pahala-Madithiyawala</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $query = "SELECT * FROM detailsofbenificiaries WHERE is_deleted=0 AND GN_Division='47-Hangawaththa' AND Bank_Zonal = 'Yatigaha'  ORDER BY Serial_No";
  $users = mysqli_query($connection, $query);
  $count_list .= "<tr><td>15</td><td>47-Hangawaththa</td>";
  $ben_420=0;$ben_1320=0;$ben_1220=0;$ben_2120=0;$ben_3020=0;
  if($users){
    while($user = mysqli_fetch_assoc($users)){
      if($user['Relief_Ammount']==420){$ben_420+=1;$t_420+=1;}
      else if($user['Relief_Ammount']==1320){$ben_1320+=1;$t_1320+=1;}
      else if($user['Relief_Ammount']==1220){$ben_1220+=1;$t_1220+=1;}
      else if($user['Relief_Ammount']==2120){$ben_2120+=1;$t_2120+=1;}
      else if($user['Relief_Ammount']==3020){$ben_3020+=1;$t_3020+=1;}
    }
    $total = $ben_420+$ben_1320+$ben_1220+$ben_2120+$ben_3020;
    $count_list .= "<td>{$ben_420}</td><td>{$ben_1320}</td><td>{$ben_1220}</td><td>{$ben_2120}</td><td>{$ben_3020}</td><td>{$total}</td></tr>";

  }
  $tt = $t_420+$t_1220+$t_1320+$t_2120+$t_3020;
  $count_list .="<tr><td></td><td>Total</td><td>{$t_420}</td><td>{$t_1320}</td><td>{$t_1220}</td><td>{$t_2120}</td><td>{$t_3020}</td><td>{$tt}</td></tr>";
        }
    }

?>