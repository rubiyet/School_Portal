<?php

    include 'header.php';

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
                                        <td colspan="3" id="title" valign="center">COURSE INSERT</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table id="frameitem">  
                                                <form action="" onsubmit="return courseinsertvalidatebyjs()" method="POST" >
                                                    <tr>
                                                        <td align="right" width="36%" id="subtitle">
                                                            Course ID<span id="star">* </span>: 
                                                        </td>
                                                        <td width="24%">
                                                            <input id="courseid" type="text" name="courseid" value="<?php echo $courseid?>">
                                                        </td>
                                                        <td width="40%"><span id="error_courseid"><?php echo $error_courseid;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right" id="subtitle">
                                                            Course Name<span id="star">* </span>: 
                                                        </td>
                                                        <td>
                                                            <input id="coursename" type="text" name="coursename" value="<?php echo $coursename?>">
                                                        </td>
                                                        <td><span id="error_coursename"><?php echo $error_coursename;?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="2" id="errormassage1"><?php if(!empty($error_massage1)){echo $error_massage1;}?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td colspan="2" id="errormassage2"><?php if(!empty($error_massage2)){echo $error_massage2;}?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td id="buttonbox" valign="middle">
                                                            <table width="80%">
                                                                <tr>
                                                                    <td><input type="Submit" name="courseinsert" value="Insert" id="button10"></td></form>
                                                                    <form method="POST"><td><input type="submit" name="courseinsertclear" value="Clear" id="button10"></td></form>
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