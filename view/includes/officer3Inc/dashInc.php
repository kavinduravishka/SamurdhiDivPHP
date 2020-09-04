
<?php 
        require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer3Contr/officer3.class.php");      
?>

<?php

    $officer3 = Officer3::getInstance();

    $q='';
    
    if(isset($_GET['q'])){
        $q=$_GET['q'];
    }
    
    
    if($q=="schol"){
        echo "<h3 class=\"tl1\">Sipdora Scholarship</h3>";
        echo $officer3->loadScholar();
    }else if($q=="ssf"){
        echo "<h3 class=\"tl1\">Social Security Fund</h3>";
        echo $officer3->loadSSFapp();
    }else if($q=="ssffam"){
        // echo "<h3 class=\"tl1\">SSF Family Members</h3>";
        // echo $officer3->loadSSFmem();
        if(isset($_GET['ssfownno'])){
            echo "<h3 class=\"tl1\">SSF Family Members: {$_GET['ssfownno']}</h3>";
            echo $officer3->selectSSFmem($_GET['ssfownno']);
        }else{
            echo "<h3 class=\"tl1\">SSF Family Members</h3>";
            echo $officer3->loadSSFmem();
        }
    }else if($q=="ssfpay"){
        echo "<h3 class=\"tl1\">Mandatory Savings Fund</h3>";
        echo $officer3->loadSSFpay();
    }else{
    echo "<a href=\"dashboardView.php?q=schol\">";
        echo "<h3 class=\"tl1\">Sipdora Scholarship</h3>";
        echo $officer3->loadScholar();
    echo "</a>";
    echo "<a href=\"dashboardView.php?q=ssf\">";
        echo "<h3 class=\"tl1\">Social Security Fund</h3>";
        echo $officer3->loadSSFapp();
    echo "</a>";
    // echo "<a href=\"dashboardView.php?q=ssffam\">";
    //     echo "<h3 class=\"tl1\">SSF Family Members</h3>";
    //     echo $officer3->loadSSFmem();
    // echo "</a>";
    echo "<a href=\"dashboardView.php?q=ssfpay\">";
        echo "<h3 class=\"tl1\">Mandatory Savings Fund</h3>";
        echo $officer3->loadSSFpay();
    echo "</a>";
    }

		

?>