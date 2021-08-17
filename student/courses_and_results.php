<?php

    include 'header.php';

    $sy = semesteryear($__RequestVerificationToken);
    $classschedule = studentclassschedule($__RequestVerificationToken);


?>

<html>
    <head>
        <!-- <link rel="stylesheet" href="css/home.css"> -->
        <link rel="stylesheet" href="css/teacher_info_insertupdatedelete_form.css">
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
                                        <td colspan="3" id="title" valign="center">COURSES & RESULTS</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table align="" id="frameitem" width="100%">
                                                <tr>
                                                    
                                                    <td width="100%" align="center">
                                                        <form method="POST">
                                                        Semester:
                                                        <select id="semester" name="semester"><option disabled selected>Semester</option><?php foreach($sy as $n){if($n == $runningsemester) echo "<option selected>$n</option>"; else echo "<option>$n</option>";}?></select>
                                                        <input type="submit" name="forcourseandresultslist" value="Enter" id="button10">
                                                        </form>
                                                    </td>
                                                </tr>
                                                <?php
                                                    foreach($classschedule as $cs){ 
                                                        echo "<tr>";
                                                        echo "<td>";
                                                        echo "<table width='100%'' ";
                                                        echo "<tr>";
                                                        echo "<td width='' style='padding:3px;'><a href='courses_and_results2.php?cs_id=".$cs["cs_id"]."&semester=".$cs["semester"]."'><span style='font-size: 15px; color:#428BCA;'><b>".$cs["coursename"]." [".$cs["section"]."] (".$cs["cs_id"].")</b></span></a><span style='font-size: 13px;'>  Time: <b>".$cs["schedule"]."</b></span></td>";
                                                        echo "</tr>";
                                                        echo "</table>";
                                                        echo "</td>";
                                                        echo "</tr>";
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