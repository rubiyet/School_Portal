<?php

    include 'header.php';

?>

<html>
	<head>
	<link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
	</head>
	<body>
	<table width="100%" id="inserttable">
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
                                        <td colspan="3" id="title" valign="center">PASSWORD CHANGE</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table id="">
                                                <form action = "" method = "POST">
                                                    <tr>
                                                        <td>Current Password</td>
                                                        <td>: <input type="password" name="currentpassword" value="<?php echo $current_password; ?>" placeholder="Current Password"> </td>
                                                        <td><span> <?php echo $err_current_password;?> </span></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>New Password</td>
                                                        <td>: <input type="password" name="newpassword" value="<?php echo $new_password; ?>" placeholder="New Password"> </td>
                                                        <td><span> <?php echo $err_new_password;?> </span></td>
                                                    </tr>
                                                    
                                                    <tr>
                                                        <td>Confirm New Password</td>
                                                        <td>: <input type="password" name="confirmnewpassword" value="<?php echo $confirm_new_password; ?>" placeholder="Confirm New Password"> </td>
                                                        <td><span> <?php echo $err_confirm_new_password;?> </span></td>
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
                                                        <td colspan="2" align="center"><input type="submit" name="adminpasswordchange" value="Change"></td>
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