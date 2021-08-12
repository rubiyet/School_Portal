<?php
	$id = $_GET["id"];
    include 'header.php';
    $s = getUser($id);
?>
<html>
<head>
		<link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
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
                                        <td colspan="3" id="title" valign="center">USER ACCOUNT INSERT</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table id="">
<form method="POST">
		<tr>
			<td>User ID:</td>
			<td><input type="text" name="uname" value="<?php echo $s["uname"]?>"></td>
		</tr>
		<tr>
			<td>Type:</td>
			<td><input type="text" name="type" value="<?php echo $s["type"]?>"></td>
		</tr>
		<tr>
			<td>Status:</td>
			<td><input type="text" name="status" value="<?php echo $s["status"]?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn_edituser" value="Edit User"></td>
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
