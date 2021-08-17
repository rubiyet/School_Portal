<?php

    include 'header.php';

    $sy = semesteryear($__RequestVerificationToken);
    $classschedule1 = studentclassschedule2($__RequestVerificationToken);
    //$allstudentinthecourse = allstudentinthecourse($forcourseandresultslist1);
    $allassignment = allassignment();
    
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
                                                <form method="POST">
                                                    <td width="80%" align="center">
                                                        Semester:
                                                        <select id="semester" name="semester"><option disabled selected>Semester</option><?php foreach($sy as $n){if($n == $runningsemester) echo "<option selected>$n</option>"; else echo "<option>$n</option>";}?></select>
                                                        <input type="submit" name="forcourseandresultslist" value="Enter" id="button10">
                                                    </td>
                                                    <td width="10%"><input type="submit" name="Backforcoursesandresults" value="Back" id="button10"></td>
                                                    </form>
                                                </tr>
                                                <tr>
                                                    <?php
                                                        echo "<td width='100%' style='padding:3px;text-align: center;padding:10px'><span style='font-size: 15px; color:white; background-color:#004EA2;border-radius:5px;padding:5px'><b>".$classschedule1["coursename"]." [".$classschedule1["section"]."] (".$classschedule1["cs_id"].")</b></span></a><span style='font-size: 13px;'></td>";
                                                    ?>
                                                </tr>
                                                <tr>
                                                    <td width="100%" align="center">
                                                        <b>ASSIGNMENT</b>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <hr>
                                                    </td>
                                                </tr>
                                            </table>
                                            <br>
                                            <br>
                                            <table width="100%">
                                                <tr>
                                                    <td>
                                                        <table width='100%' style='border-collapse: collapse;border-bottom:1px solid gray'>
                                                            <tr>
                                                                <td width="50%"><b>ASSIGNMENT</b></td>
                                                                <td width="50%"><b>UPLOAD TIME</b></td>
                                                                <td></td>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <?php
                                                    for($n = 2; $n < count($allassignment);$n++){
                                                        echo "<tr>";
                                                        echo "<td>";
                                                        echo "<table width='100%' style='border-collapse: collapse;border-bottom:1px solid gray'>";
                                                        echo "<tr>";
                                                        echo "<td width='50%'><b><a id='notefilename' download='".$allassignment[$n]."' href='../teacher/assignment/".$forcourseandresultslist1."/".$allassignment[$n]."'>".$allassignment[$n]."</a></b></td>";
                                                        echo "<td width='50%'>".date("m-d-Y H:i:sa", filemtime('../teacher/assignment/'.$forcourseandresultslist1.'/'.$allassignment[$n]))."</td><form method='POST'>";
                                                        echo "<td><a href='assignmentview.php?cs_id=".$classschedule1["cs_id"]."&semester=".$classschedule1["semester"]."'><button id='button10' name='assignementview' type='submit' value='".$allassignment[$n]."'>View</button></a></td><form method='POST'>";
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