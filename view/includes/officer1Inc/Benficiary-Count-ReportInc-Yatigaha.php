<?php //session_start(); ?>
<?php 
//   if(!isset($_SESSION['user_id'])){
//     header('Location:index.php');
//   }

  require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer1Contr/report.class.php");

  $report = new Report();
  list($count_list,$total1,$total2,$total3,$total4,$total5,$total6,$total7,$total8,$total9,$total10,$total11,$total12,$total13,$total14,$total15) = $report->createBCRYatigaha();


 ?>



