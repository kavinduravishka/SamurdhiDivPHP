
<?php 
        require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/contr/officer2Contr/officer2.class.php");      
?>


<?php

    $officer2 = Officer2::getInstance();

    $q='';
    
    if(isset($_GET['q'])){
        $q=$_GET['q'];
    }

        if($q=="cbo"){
            echo "<h3 class=\"tl1\">Community Based Organizations</h3>";
            echo $officer2->loadCBO();
        }else if($q=="cbomem"){
            //echo "<h3 class=\"tl1\">CBO Members</h3>";
            //echo $officer2->loadCBOmem();
            if(isset($_GET['cboregno'])){
                echo "<h3 class=\"tl1\">CBO Members: {$_GET['cboregno']}</h3>";
                echo $officer2->selectCBOmem($_GET['cboregno']);
            }else{
                echo "<h3 class=\"tl1\">CBO Members</h3>";
                echo $officer2->loadCBOmem();
            }
        }else if($q=="lott"){
            echo "<h3 class=\"tl1\">Lottary Fund</h3>";
            echo $officer2->loadLottary();
        }else if($q=="mandf"){
            echo "<h3 class=\"tl1\">Mandatory Savings Fund</h3>";
            echo $officer2->loadMF();
        }else{
        echo "<a href=\"dashboardView.php?q=cbo\">";
            echo "<h3 class=\"tl1\">Community Based Organizations</h3>";
            echo $officer2->loadCBO();
        echo "</a>";
        // echo "<a href=\"dashboardView.php?q=cbomem\">";
        //     echo "<h3 class=\"tl1\">CBO Members</h3>";
        //     echo $officer2->loadCBOmem();
        echo "</a>";
        echo "<a href=\"dashboardView.php?q=lott\">";
            echo "<h3 class=\"tl1\">Lottary Fund</h3>";
            echo $officer2->loadLottary();
        echo "</a>";
        echo "<a href=\"dashboardView.php?q=mandf\">";
            echo "<h3 class=\"tl1\">Mandatory Savings Fund</h3>";
            echo $officer2->loadMF();
        echo "</a>";
        }

?>