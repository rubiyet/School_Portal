<?php

    include 'header.php';

    $sy = semesteryear($__RequestVerificationToken);
    $classschedule1 = studentclassschedule2($__RequestVerificationToken);

    // if(isset($_GET["cs_id"]) && isset($_GET["semester"])){
    //     $token = $_GET["cs_id"];
    //     $token1 = $_GET["semester"];
    //     $token2 = $classschedule1["teacherid"];
    //     $query = "select cs_id,semester,teacherid from course_semester where cs_id = '$token' and semester= '$token1' and teacherid = '$token2'";
    //     $data = get($query);
    //     if(count($data) == 0){
    //         header("Location: courses_and_results.php");
    //     }
    // }


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
                                                <tr>
                                                    <?php
                                                        echo "<td width='100%' style='padding:3px;text-align: center;padding:10px'><span style='font-size: 15px; color:white; background-color:#004EA2;border-radius:5px;padding:5px'><b>".$classschedule1["coursename"]." [".$classschedule1["section"]."] (".$classschedule1["cs_id"].")</b></span><span style='font-size: 13px;'></td>";
                                                    ?>
                                                </tr>
                                                <tr>
                                                    <?php
                                                        echo "<td width='100%'align='center' style='padding:3px;'><a href='result.php?cs_id=".$classschedule1["cs_id"]."&semester=".$classschedule1["semester"]."'><button id='button30'>Result</button></a>&nbsp;&nbsp;<a href='note.php?cs_id=".$classschedule1["cs_id"]."&semester=".$classschedule1["semester"]."'><button id='button30'>Note</button></a></td>";
                                                    ?>    
                                                </tr>
                                                <tr>
                                                    <?php
                                                        echo "<td width='100%'align='center' style='padding:3px;'><a href='notice.php?cs_id=".$classschedule1["cs_id"]."&semester=".$classschedule1["semester"]."'><button id='button30'>Notice</button></a>&nbsp;&nbsp;<a href='assignment.php?cs_id=".$classschedule1["cs_id"]."&semester=".$classschedule1["semester"]."'><button id='button30'>Assignment</button></a></td>";
                                                    ?>    
                                                </tr>
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