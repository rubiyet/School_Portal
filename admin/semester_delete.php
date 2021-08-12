<?php

    include 'header.php';
    datafordeletesemester($datafordeletesemester);

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
                                    <td colspan="3" id="title" valign="center">SEMESTER UPDATE</td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <table id="frameitem">
                                                <form action="" method="POST">
                                                    <tr>
                                                        <td align="right" width="36%">
                                                            Year: 
                                                        </td>
                                                        <td width="28%">
                                                        <?php echo $semester_year; ?></select>
                                                        </td>
                                                        <td width="36%"></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Semester: 
                                                        </td>
                                                        <td>
                                                        <?php echo $semester; ?></select>
                                                        </td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            Semester Status: 
                                                        </td>
                                                        <td>
                                                        <?php echo $semester_status; ?></select>
                                                        </td>
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
                                                                    <td><input type="Submit" name="semesterdelete" value="Delete" id="button10"></td></form>
                                                                    <form method="POST"><td><input type="submit" name="courseopenclear" value="Clear" id="button10"></td></form>
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
        <script src=""></script>
    </body>
</html>
    </body>
</html>