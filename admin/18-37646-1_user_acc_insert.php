<?php

	include 'header.php';

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
												<form action=""method="POST" onsubmit="return uservalidatebyjs()">
														<tr>
															<td align ="right">
																User ID:
															</td>
															<td>
																<input id="userid" type="text" name="userid" value="<?php echo $userid?>">
															</td>
															<td><span id="error_userid"><?php echo $error_userid;?></span></td>
														</tr>
														<tr>
															<td align ="right">
																Type:
															</td>
															<td><select name="type" id="type">
																	<option disabled selected>Type</option>
																	<?php 
																		foreach($array_type as $t){
																			if($t == $type) 
																				echo "<option selected>$t</option>"; 
																			else 
																				echo "<option>$t</option>";}
																	?>
																</select>
															</td>
															<td><span id="error_type"><?php echo $error_type;?></span></td>
														</tr>
														<tr>
															<td align ="right">
																Status:
															</td>
															<td><select name="status">
																	<?php 
																		foreach($array_status as $s){
																			if($s == $status) 
																				echo "<option selected>$s</option>"; 
																			else 
																				echo "<option>$s</option>";}
																	?>
																</select>
															</td>
														</tr>
														<tr>
															<td></td>
															<td>
																<?php echo $success_connect;?>
																<?php echo $success_connect1;?>
															</td>
														</tr>
														<tr>
															<td></td>
															<td align="center">
																<input type="Submit" name="submit" value="Insert">
															</td>
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
		<script src="js_controller/user_acc_insert_controller.js"></script>
	</body>
</html>