<?php 

function checklogged($uid){
    if(!isset($_SESSION['user_id'])){
        header('Location: /SamurdhiDivPHP/');
    }else{
        
        $nuid=$_SESSION['user_id'];

        if($uid==$nuid){
            return;
        }else if($nuid=="1"){
            header('Location: ');
        }else if($nuid=="2"){
            header('Location: /SamurdhiDivPHP/view/officer2view/dashboardView.php');
        }else if($nuid=="3"){
            header('Location: /SamurdhiDivPHP/view/officer3view/dashboardView.php');
        }else if($nuid=="4"){
            header('Location: ');
        }else if($nuid=="5"){
            header('Location: ');
        }

    }
}

?>