<?php

    include 'header.php';

    $classschedule = studentclassschedule($__RequestVerificationToken);

?>

<html>
    <head>
        <!-- <link rel="stylesheet" href="css/home.css"> -->
        <link rel="stylesheet" href="css/personal_info.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    </head>
    <body>
        <table width="100%">
            <tr>
                <td width="18.5%"></td>
                <td width="63%">
                    <table width="100%" height="815" valign="top" >
                        <tr>
                            <td width="23%" valign="top">
                                <?php include 'navbar.php';?>
                            </td>
                            <td width="77%" valign="top">
                                <table id="frame">
                                    <tr>
                                        <td colspan="3" id="title" valign="center">Class Schedule</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table align="" id="frameitem" width="100%">
                                                <?php
                                                    $flag = 1;
                                                    $flag1 = 0;
                                                    $flag2 = 0;
                                                    $flag3 = 0;
                                                    $flag4 = 0;
                                                    foreach($classschedule as $cs){ 
                                                        if(substr($cs["schedule"],0,3) == "Sun"){ 
                                                            echo "<tr>";
                                                            echo "<td>";
                                                            echo "<table width='100%'' ";
                                                            echo "<tr>";
                                                            echo "<td rowspan='20' width='20%' align='left' valign='top' style='font-size: 15px; padding-left: 20px;'><b>".substr($cs["schedule"],0,3)."day</b></td>";
                                                            foreach($classschedule as $cs){ 
                                                                if(substr($cs["schedule"],0,3) == "Sun"){
                                                                    if($flag1 == 0){
                                                                        $flag1 = 1;
                                                                        echo "<td width='' style='padding:3px;'><a href='courses_and_results2.php?cs_id=".$cs["cs_id"]."&semester=".$cs["semester"]."'><span style='font-size: 13px; color:#428BCA;'><b>".$cs["coursename"]." [".$cs["section"]."]</b></span></a><br><span style='font-size: 12px;'>Time: <b>".$cs["schedule"]."</b></td>";
                                                                    }
                                                                    else if($flag1 == 1){
                                                                        $flag1 = 0;
                                                                        echo "<td width='' style='padding:3px;'><a href='courses_and_results2.php?cs_id=".$cs["cs_id"]."&semester=".$cs["semester"]."'><span style='font-size: 13px; color:#428BCA;'><b>".$cs["coursename"]." [".$cs["section"]."]</b></span><br></a><span style='font-size: 12px;'>Time: <b>".$cs["schedule"]."</b></td>";
                                                                        echo "</tr>";
                                                                    }     
                                                                }
                                                            }
                                                            if($flag1 == 1){
                                                                echo "</tr>";
                                                            }
                                                            $flag = 0;
                                                            echo "</table>";
                                                            echo "</td>";
                                                            echo "</tr>";
                                                            echo "<tr><td colspan='2'><hr style='border: 1px solid rgb(221, 208, 208);'></td></tr>";
                                                        }
                                                        if($flag == 0){
                                                            $flag = 1;
                                                            break;
                                                        }
                                                    }
                                                    foreach($classschedule as $cs){ 
                                                        if(substr($cs["schedule"],0,3) == "Mon"){
                                                            echo "<tr>";
                                                            echo "<td>";
                                                            echo "<table width='100%'' ";
                                                            echo "<tr>";
                                                            echo "<td rowspan='20' width='20%' align='left' valign='top' style='font-size: 15px; padding-left: 20px;'><b>".substr($cs["schedule"],0,3)."day</b></td>";
                                                            foreach($classschedule as $cs){ 
                                                                if(substr($cs["schedule"],0,3) == "Mon"){
                                                                    if($flag2 == 0){
                                                                        $flag2 = 1;
                                                                        echo "<td width='' style='padding:3px;'><a href='courses_and_results2.php?cs_id=".$cs["cs_id"]."&semester=".$cs["semester"]."'><span style='font-size: 13px; color:#428BCA;'><b>".$cs["coursename"]." [".$cs["section"]."]</b></span></a><br><span style='font-size: 12px;'>Time: <b>".$cs["schedule"]."</b></td>";
                                                                    }
                                                                    else if($flag2 == 1){
                                                                        $flag2 = 0;
                                                                        echo "<td width='' style='padding:3px;'><a href='courses_and_results2.php?cs_id=".$cs["cs_id"]."&semester=".$cs["semester"]."'><span style='font-size: 13px; color:#428BCA;'><b>".$cs["coursename"]." [".$cs["section"]."]</b></span></a><br><span style='font-size: 12px;'>Time: <b>".$cs["schedule"]."</b></td>";
                                                                        echo "</tr>";
                                                                    }     
                                                                }
                                                            }
                                                            if($flag2 == 1){
                                                                echo "</tr>";
                                                            }
                                                            $flag = 0;
                                                            echo "</table>";
                                                            echo "</td>";
                                                            echo "</tr>";
                                                            echo "<tr><td colspan='2'><hr style='border: 1px solid rgb(221, 208, 208);'></td></tr>";
                                                        }
                                                        if($flag == 0){
                                                            $flag = 1;
                                                            break;
                                                        }
                                                    }
                                                    foreach($classschedule as $cs){ 
                                                        if(substr($cs["schedule"],0,3) == "Tue"){
                                                            echo "<tr>";
                                                            echo "<td>";
                                                            echo "<table width='100%'' ";
                                                            echo "<tr>";
                                                            echo "<td rowspan='20' width='20%' align='left' valign='top' style='font-size: 15px; padding-left: 20px;'><b>".substr($cs["schedule"],0,3)."sday</b></td>";
                                                            foreach($classschedule as $cs){ 
                                                                if(substr($cs["schedule"],0,3) == "Tue"){
                                                                    if($flag3 == 0){
                                                                        $flag3 = 1;
                                                                        echo "<td width='' style='padding:3px;'><a href='courses_and_results2.php?cs_id=".$cs["cs_id"]."&semester=".$cs["semester"]."'><span style='font-size: 13px; color:#428BCA;'><b>".$cs["coursename"]." [".$cs["section"]."]</b></span></a><br><span style='font-size: 12px;'>Time: <b>".$cs["schedule"]."</b></td>";
                                                                    }
                                                                    else if($flag3 == 1){
                                                                        $flag3 = 0;
                                                                        echo "<td width='' style='padding:3px;'><a href='courses_and_results2.php?cs_id=".$cs["cs_id"]."&semester=".$cs["semester"]."'><span style='font-size: 13px; color:#428BCA;'><b>".$cs["coursename"]." [".$cs["section"]."]</b></span></a><br><span style='font-size: 12px;'>Time: <b>".$cs["schedule"]."</b></td>";
                                                                        echo "</tr>";
                                                                    }     
                                                                }
                                                            }
                                                            if($flag3 == 1){
                                                                echo "</tr>";
                                                            }
                                                            $flag = 0;
                                                            echo "</table>";
                                                            echo "</td>";
                                                            echo "</tr>";
                                                            echo "<tr><td colspan='2'><hr style='border: 1px solid rgb(221, 208, 208);'></td></tr>";
                                                        }
                                                        if($flag == 0){
                                                            $flag = 1;
                                                            break;
                                                        }
                                                    }
                                                    foreach($classschedule as $cs){ 
                                                        if(substr($cs["schedule"],0,3) == "Wed"){
                                                            echo "<tr>";
                                                            echo "<td>";
                                                            echo "<table width='100%'' ";
                                                            echo "<tr>";
                                                            echo "<td rowspan='20' width='20%' align='left' valign='top' style='font-size: 15px; padding-left: 20px;'><b>".substr($cs["schedule"],0,3)."nessday</b></td>";
                                                            foreach($classschedule as $cs){ 
                                                                if(substr($cs["schedule"],0,3) == "Wed"){
                                                                    if($flag4 == 0){
                                                                        $flag4 = 1;
                                                                        echo "<td width='' style='padding:3px;'><a href='courses_and_results2.php?cs_id=".$cs["cs_id"]."&semester=".$cs["semester"]."'><span style='font-size: 13px; color:#428BCA;'><b>".$cs["coursename"]." [".$cs["section"]."]</b></span></a><br><span style='font-size: 12px;'>Time: <b>".$cs["schedule"]."</b></td>";
                                                                    }
                                                                    else if($flag4 == 1){
                                                                        $flag4 = 0;
                                                                        echo "<td width='' style='padding:3px;'><a href='courses_and_results2.php?cs_id=".$cs["cs_id"]."&semester=".$cs["semester"]."'><span style='font-size: 13px; color:#428BCA;'><b>".$cs["coursename"]." [".$cs["section"]."]</b></span></a><br><span style='font-size: 12px;'>Time: <b>".$cs["schedule"]."</b></td>";
                                                                        echo "</tr>";
                                                                    }     
                                                                }
                                                            }
                                                            if($flag4 == 1){
                                                                echo "</tr>";
                                                            }
                                                            $flag = 0;
                                                            echo "</table>";
                                                            echo "</td>";
                                                            echo "</tr>";
                                                            echo "<tr><td colspan='2'><hr style='border: 1px solid rgb(221, 208, 208);'></td></tr>";
                                                        }
                                                        if($flag == 0){
                                                            $flag = 1;
                                                            break;
                                                        }
                                                    }
                                                    ?>
                                            </table>
                                        </td>
                                    </tr>
                                </table>        
                            </td>
                        </tr>
                    </table>
                </td>
                <td width="18.5%"></td>
            </tr>
        </table>
        <script src="js/home.js"></script>
    </body>
</html>