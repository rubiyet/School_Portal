<?php

    include 'header.php';
    $sc = allsemestercourseid();

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
                                                <form action = "" method = "POST">
                                                    <tr>
                                                    <td align="right" width="37%" id="subtitle">Semester Course Code<span id="star">* </span>: </td>
                                                        <td width=""><select id="cpurseid" name="courseid"><option disabled selected>Semester Course Code & Course ID</option><?php foreach($sc as $n){if($n == $id) echo "<option selected>$n</option>"; else echo "<option>$n</option>";}?></select></td>
                                                        <td width="" id="enterbutton15"><input type="submit" name="enterforcoursecencle" value="Enter" id="button10"></td>
                                                        <td id="errormassage1" width="43%"><?php echo $error_courseid?></td>
                                                    </tr>
                                                </form>
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
    </body>
</html>