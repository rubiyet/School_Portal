<?php

    include 'header.php';
    $c = allcourseid();
    $t = allteacherid();
    $sy = semesteryear();
    getcourseopenupdate($courseidopenforUD);

?>
<html>
<head>
    <link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
</head>
<body>
    <table width="100%">
        <tr>
            <td width="18.5%"></td>
            <td width="63">
                <table width="100%" height="830" valign="top" >
                    <tr>
                        <td width="23%" valign="top">
                            <?php include 'navbar.php';?>
                        </td>
                        <td width="77%" valign="top">
                            <table id="frame">
                                <tr>
                                    <td colspan="3" id="title" valign="center">COURSE OPEN UPDATE</td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <table id="frameitem">
                                                <form action="" method="POST">
                                                <tr>
                                                        <td align="right" width="36%">
                                                            Semester Course Code: 
                                                        </td>
                                                        <td width="24%"><span><?php echo $semester_course_code;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" width="36%">
                                                            Course ID & Name: 
                                                        </td>
                                                        <td width="24%"><span><?php echo $courseid;?></span></td>
                                                    </tr>
                                                    <td align="right">
                                                            Teacher ID & Name: 
                                                        </td>
                                                        <td><span><?php if(!empty($teacherid)){echo $teacherid;}?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Class: 
                                                        </td>
                                                        <td width="24%"><span><?php echo $class;?></span></td>  
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Section: 
                                                        </td>
                                                        <td width="24%"><span><?php echo $section;?></span></td> 
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Schedule: 
                                                        </td>
                                                        <td>
                                                            <select id="schedule" name="schedule"><option disabled selected>Schedule</option><?php foreach($arr_schedule as $n){if($n == $schedule) echo "<option selected>$n</option>"; else echo "<option>$n</option>";}?></select>
                                                        </td>
                                                        <td><span id="error_schedule"><?php echo $error_schedule;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Capacity: 
                                                        </td>
                                                        <td>
                                                            <select id="capacity" name="capacity"><option disabled selected>Capacity</option><?php foreach(range(1,20) as $n){if($n == $capacity) echo "<option selected>$n</option>"; else echo "<option>$n</option>";}?></select>
                                                        </td>
                                                        <td><span id="error_capacity"><?php echo $error_capacity;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Course Status: 
                                                        </td>
                                                        <td>
                                                            <select id="course_status" name="course_status"><option disabled selected>Course Status</option><?php foreach($arr_course_status as $n){if($n == $course_status) echo "<option selected>$n</option>"; else echo "<option>$n</option>";}?></select>
                                                        </td>
                                                        <td><span id="error_course_status"><?php echo $error_course_status;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Semester: 
                                                        </td>
                                                        <td>
                                                            <select id="semester" name="semester"><option disabled selected>Semester</option><?php foreach($sy as $n){if($n == $semester) echo "<option selected>$n</option>"; else echo "<option>$n</option>";}?></select>
                                                        </td>
                                                        <td><span id="error_semester"><?php echo $error_semester;?></span></td>
                                                    </tr>
                                                    <tr>
                                                    <tr>
                                                        <td align="right">
                                                            Change Teacher: 
                                                        </td>
                                                        <td>
                                                        <select id="teacherid" name="teacherid"><option disabled selected>Teacher ID & Name</option><?php foreach($t as $n){if($t == $teacherid) echo "<option selected>$n</option>"; else echo "<option>$n</option>";}?></select>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td id="errormassage1"><?php if(!empty($error_massage1)){echo $error_massage1;}?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td id="errormassage2"><?php if(!empty($error_massage2)){echo $error_massage2;}?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td id="buttonbox" valign="middle">
                                                            <table width="80%">
                                                                <tr>
                                                                    <td><input type="Submit" name="courseopenupdate" value="Update" id="button10"></td></form>
                                                                    <form method="POST"><td><input type="submit" name="courseopenupdateback" value="Back" id="button10"></td></form>
                                                                </tr>
                                                            </table>
                                                        </td>
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
        <script src="../controller/js_controller/admin_controller.js"></script>
    </body>
</html>
    </body>
</html>