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
                                        <td colspan="3" id="title" valign="center">COURSE DETAILS</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table id="frameitem">  
                                                    <tr>
                                                        <td></td>
                                                        <td id="buttonbox" valign="middle">
                                                            <table width="100%">
                                                                <tr align="center">
                                                                    <form method="POST"><td align="right"><input type="Submit" name="allcourse" value="Course Details" id="button30"></td></form>
                                                                    <form method="POST"><td align="left"><input type="Submit" name="coursereport" value="Open Course Report" id="button30"></td></form>
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