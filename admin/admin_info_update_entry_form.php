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
                                        <td colspan="3" id="title" valign="center">ADMIN PERSONAL INFORMATION UPDATE</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table id="frameitem">
                                                <form action = "" method = "POST" autocomplete="off">
                                                    <tr>
                                                        <td align="right" width="37%" id="subtitle">Admin ID<span id="star">* </span>: </td>
                                                        <td width=""><input type="text" name="adminid1" placeholder="**-1***" value="" onkeyup="admin_search(this)"></td>
                                                        <td width="" id="enterbutton15"><input type="submit" name="enterforadminupdate" value="Enter" id="button10"></td>
                                                        <td id="errormassage1" width="43%"><?php echo $error_adminid1?></td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td><div id="suggesstion4"></div></td>
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
        <script src="js/admin_info_update_entry_form.js"></script>
    </body>
</html>