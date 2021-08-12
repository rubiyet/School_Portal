<?php

    include 'header.php';
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
                                    <td colspan="3" id="title" valign="center">COURSE CENCLE</td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <table id="frameitem">
                                                <form action="" method="POST">
                                                    <tr>
                                                        <td align="right" width="36%">
                                                            Course ID & Name: 
                                                        </td>
                                                        <td width="24%"><span><?php echo $courseid;?></span></td>
                                                        <td id="errormassage1" width="43%"><?php echo $error_courseid?></td>
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
                                                        <td><span><?php echo $class;?></span></td>  
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Section: 
                                                        </td>
                                                        <td><span><?php echo $section;?></span></td> 
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Schedule: 
                                                        </td>
                                                        <td><span><?php echo $schedule;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Capacity: 
                                                        </td>
                                                        <td><span><?php echo $capacity;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Semester: 
                                                        </td>
                                                        <td><span><?php echo $semester;?></span></td>
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
                                                                    <td><input type="Submit" name="coursecencle" value="Cencle" id="button10"></td></form>
                                                                    <form method="POST"><td><input type="submit" name="coursecencleback" value="Back" id="button10"></td></form>
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