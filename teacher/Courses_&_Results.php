<?php

    include 'header.php';

    $classschedule = teacherclassschedule($_COOKIE["__RequestVerificationToken"]);

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
                                        <td colspan="3" id="title" valign="center">Courses & Results</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table align="" id="frameitem" width="100%">
                                                
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