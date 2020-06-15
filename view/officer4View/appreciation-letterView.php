<?php   
        include_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/appreciation-letterInc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Appreciation Letter</title>
    
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/main_dk.css">
    <link rel="stylesheet" type="text/css" href="/SamurdhiDivPHP/view/css/ksidebar.css" >
    <script type="text/javascript" src="/SamurdhiDivPHP/view/js/ksidebar.js"></script>
        
</head>
<body>
<?php 
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/header.inc.php");
    require_once(realpath($_SERVER["DOCUMENT_ROOT"])."/SamurdhiDivPHP/view/includes/officer4Inc/officer4_sidebar.inc.php");
?>  
	

    <main>
        <h2>ප්‍රශංසා සහ දෝෂ දර්ශන</h2>
        <h2>COMMENDATIONS and CENSURES</h2>
        
        <?php 
            if(!empty($errors)){
                echo '<div class="errmsg">';
                echo '<b>There are error(s) in your form</b><br>';
                foreach ($errors as $error){
                    $error=ucfirst(str_replace("_"," ",$error));
                    echo $error .'<br>';
                }
                echo '</div>';
            }
        ?>

        <form action="appreciation-letterView.php" method="post" class="letterform" >
            
            <p class="Mname">
                <label for="">නම/Name:</label>
                <input type="text" name="name">           
            </p>
            <div>
            සටහන : දෝෂ දර්ශනයක් කළ සෑම විටකම ඒ බව නිළදාරියා වෙත දැනුම් දිය යුතුය.දෝෂ දර්ශනය සටහන් කළ යුත්තේ රතු තීන්තෙනි. නිළදාරියාට දන්වන ලද බවටද, ඔහු විසින් ඊට විරෝධය පළකරන ලද්දේ නම් , එය සලකාබලන බවට  සහ නිෂ්ප්‍රභා කරන ලද බවට ද සටහන් කළ යුතුය.
            </div>
            <div>
            Note : Censures, which must be entered in red ink, should invariable be conveyed to the officer. A note should be made that this has been done and his protest if any, considered and overruled.
            </div>
            <div class="maincontainer" >		
            <center><table class="personalfile_list">

                <tr>
                    <th>දිනය/Date</th>
                    <th>විස්තර කෙටියෙන්/ Brief Particulars</th>
                    <th>කිසියම් දඩුවමක් කරන ලද්දේ නම් එය/ Punishments, if any</th>
                    <th>අදාල ලිපි කඩදාසි වල යොමුව/ Reference to papers</th>
                </tr>

                <tr>
                    <td><input type="date" name="date"></td>
                    <td><input type="text" name="particulars"?></td>
                    <td><input type="text" name="punishment"?></td>
                    <td><input type="text" name="ref"?></td>
                </tr>

            
            </center></table>
            </div>
            <p>
                <label for="">&nbsp;</label>
                <button type="submit" name="submit">Save</button>
                          
            </p>
        </form>


    </main>
</body>
</html>