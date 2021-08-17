<?php
	$id = $_GET["id"];
    include 'header.php';
    getTeacher($id);
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
										<td colspan="3" id="title" valign="center">ADMIN PERSONAL INFORMATION UPDATE</td>
									</tr>
									<tr>
										<td valign="top">
											<table id="">
												<form onsubmit="return teacherupdatevalidatebyjs()" method="POST">
														<tr>
															<td>Teacher ID:</td>
															<td><input type="text" id="teacherid" name="userid" value="<?php echo $teacherid?>"></td>
															<td><span id="error_teacherid"><?php echo $error_teacherid; ?></span></td>
														</tr>
														<tr>
															<td>Name:</td>
															<td><input id="name" type="text" name="name" value="<?php echo $name?>"></td>
															<td><span id="error_name"><?php echo $error_name; ?></span></td>
														</tr>
														<tr>
															<td>Salary:</td>
															<td><input type="text" id="salary" name="salary" value="<?php echo $salary?>"></td>
															<td><span id="error_salary"><?php echo $error_salary; ?></span></td>
														</tr>
														<tr>
															<td>Email:</td>
															<td><input type="text" id="email" name="email" value="<?php echo $email?>"></td>
															<td><span id="error_email"><?php echo $error_email; ?></span></td>
														</tr>
														<tr>
															<td>Gender:</td>
															<td><input type="text" id="gender" name="gender" value="<?php echo $gender?>"></td>
															<td><span id="error_gender"><?php echo $error_gender; ?></span></td>
														</tr>
														<tr>
															<td>Birth of Date:</td>
															<td><input type="text" id="input_date_of_birth" name="birthday" value="<?php echo $birthday?>"></td>
															<td><span id="error_input_date_of_birth"><?php echo $error_input_date_of_birth; ?></span></td>
														</tr>
														<tr>
															<td>Nationality:</td>
															<td><input type="text" id="nationality" name="nationality" value="<?php echo $nationality?>"></td>
															<td><span id="error_nationality"><?php echo $error_nationality; ?></span></td>
														</tr>
														<tr>
															<td>Religion:</td>
															<td><input type="text" id="religion" name="religion" value="<?php echo $religion?>"></td>
															<td><span id="error_religion"><?php echo $error_religion; ?></span></td>
														</tr>
														<tr>
															<td>Blood Group:</td>
															<td><input type="text" id="blood_group" name="bloodgroup" value="<?php echo $blood_group?>"></td>
															<td><span id="error_blood_group"><?php echo $error_blood_group; ?></span></td>
														</tr>
														<tr>
															<td>Father Name:</td>
															<td><input type="text" id="father_name" name="fathername" value="<?php echo $father_name?>"></td>
															<td><span id="error_father_name"><?php echo $error_father_name; ?></span></td>
														</tr>
														<tr>
															<td>Mother Name:</td>
															<td><input type="text" id="mother_name" name="mothername"  value="<?php echo $mother_name?>"></td>
															<td><span id="error_mother_name"><?php echo $error_mother_name; ?></span></td>
														</tr>
														<tr>
															<td>Join Date:</td>
															<td><input type="text" id="join_date" name="joiningdate" value="<?php echo $joining_day?>"></td>
															<td><span id="error_join_date"><?php echo $error_join_date; ?></span></td>
														</tr>
														<tr>
															<td>left Date:</td>
															<td><input type="text" id="left_date" name="leftdate" value="<?php echo $left_day?>"></td>
															<td><span id="error_left_date"><?php echo $error_left_date; ?></span></td>
														</tr>
														<tr>
															<td>Qualification:</td>
															<td><input type="text" id="qualifications" name="qualification" value="<?php echo $qualifications?>"></td>
															<td><span id="error_qualifications"><?php echo $error_qualifications; ?></span></td>
														</tr>
														<tr>
															<td>Present Address:</td>
															<td><input type="text" id="present_address" name="presentaddress" value="<?php echo $present_address?>"></td>
															<td><span id="error_present_address"><?php echo $error_present_address; ?></span></td>
														</tr>
														<tr>
															<td>Parmanent Address:</td>
															<td><input type="text" id="parmanent_address" name="parmanentaddress" value="<?php echo $parmanent_address?>"></td>
															<td><span id="error_parmanent_address"><?php echo $error_parmanent_address; ?></span></td>
														</tr>
														<tr>
															<td>Contact Number:</td>
															<td><input type="text" id="contact_number" name="contactnumber" value="<?php echo $contact_number?>"></td>
															<td><span id="error_contact_number"><?php echo $error_contact_number; ?></span></td>
														</tr>
														<tr>
															<td></td>
															<td><input type="submit" name="btn_editteacher" value="Edit teacher"></td>
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
		<script src="../controller/js_controller/18-37646-1_admin_controller.js"></script>
	</body>
</html>
