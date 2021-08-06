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
                                        <td colspan="3" id="title" valign="center">TEACHER PERSONAL INFORMATION INSERT</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table id="">
												<form action="" onsubmit="return teachervalidatebyjs()" method="POST">
													<tr>
														<td align="right">Teacher ID:</td>
														<td><input type="text" name="teacherid" id="teacherid" value="<?php echo $teacherid; ?>"></td>
														<td><span id="error_teacherid"><?php echo $error_teacherid?></span></td>
													</tr>
													<tr>
														<td align="right">Name:</td>
														<td><input type="text" name="name" id="name" value="<?php echo $name; ?>"> </td>
														<td><span id="error_name"><?php echo $error_name;?></span></td>
													</tr>
													<tr>
														<td align="right">Salary:</td>
														<td><input type="text" name="salary" id="salary" value="<?php echo $salary; ?>"></td>
														<td><span id="error_salary"><?php echo $error_salary?></span></td>
													</tr>
													<tr>
														<td align="right">Email:</td>
														<td><input type="text" name="email" id="email" value="<?php echo $email; ?>"></td>
														<td><span id="error_email"><?php echo $error_email;?></span></td>
													</tr>
													<tr>
														<td align="right">Gender</td>
														<td>: <input type="radio" name="gender" value="Male" 
															<?php 
																if($gender=="Male") 
																	echo "checked"; 
																?>> Male 
															<input type="radio" name="gender" value="Female"
															<?php 
																if($gender=="Female") 
																	echo "checked"; 
																?>> Female </td>
														<td><span id="error_gender"><?php echo $error_gender;?></span></td>
													</tr>
													<tr>
														<td align="right">Date of Birth:</td>
														<td><select name="input_day" id="input_day">
																<option disabled selected>Day</option>
																<?php 
																	foreach($day as $d){
																		if($d == $input_day) 
																			echo "<option selected>$d</option>"; 
																		else 
																			echo "<option>$d</option>";}
																?>
															</select>
															<select name="input_month" id="input_month" >
																<option disabled selected>Month</option>
																	<?php 
																		foreach($month as $m){
																			if($m == $input_month) 
																				echo "<option selected>$m</option>"; 
																			else  
																				echo "<option>$m</option>";}
																	?>
																</select>
																<select name="input_year" id="input_year">
																<option disabled selected>Year</option>
																	<?php 
																		foreach($year as $y){
																			if($y == $input_year) 
																				echo "<option selected>$y</option>"; 
																			else  
																				echo "<option>$y</option>";}
																	?>
																</select></td>   
														<td><span id="error_input_date_of_birth"><?php echo $error_input_date_of_birth;?></span></td>
													</tr>
													<tr>
														<td align="right">Nationality:</td>
														<td><input type="text" name="nationality" id="nationality" value="<?php echo $nationality; ?>"></td>
														<td><span id="error_nationality"><?php echo $error_nationality;?></span></td>
													</tr>
													<tr>
														<td align="right">Religion:</td>
														<td><input type="text" name="religion" id="religion" value="<?php echo $religion; ?>"></td>
														<td><span id="error_religion"><?php echo $error_religion;?></span></td>
													</tr>
													<tr>
														<td align="right">Blood Group:</td>
														<td><select name="blood_group" id="blood_group">
																<option disabled selected>Blood Group</option>
																<?php 
																	foreach($blood as $b){
																		if($b == $blood_group) 
																			echo "<option selected>$b</option>"; 
																		else 
																			echo "<option>$b</option>";}
																?>
															</select>   
														<td><span id="error_blood_group"><?php echo $error_blood_group;?></span></td>
													</tr>
													<tr>
														<td align="right">Father Name:</td>
														<td><input type="text" name="father_name" id="father_name" value="<?php echo $father_name; ?>"> </td>
														<td><span id="error_father_name"><?php echo $error_father_name;?></span></td>
													</tr>
													<tr>
														<td align="right">Mother Name:</td>
														<td><input type="text" name="mother_name" id="mother_name" value="<?php echo $mother_name; ?>"> </td>
														<td><span id="error_mother_name"><?php echo $error_mother_name;?></span></td>
													</tr>
													<tr>
														<td align="right">Join Date:</td>
														<td><select name="join_day" id="join_day">
																<option disabled selected>Day</option>
																<?php 
																	foreach($day as $d){
																		if($d == $join_day) 
																			echo "<option selected>$d</option>"; 
																		else 
																			echo "<option>$d</option>";}
																?>
															</select>
															<select name="join_month" id="join_month">
																<option disabled selected>Month</option>
																	<?php 
																		foreach($month as $m){
																			if($m == $join_month) 
																				echo "<option selected>$m</option>"; 
																			else  
																				echo "<option>$m</option>";}
																	?>
																</select>
																<select name="join_year" id="join_year">
																<option disabled selected>Year</option>
																	<?php 
																		foreach($year as $y){
																			if($y == $join_year) 
																				echo "<option selected>$y</option>"; 
																			else  
																				echo "<option>$y</option>";}
																	?>
																</select></td>   
														<td><span id="error_join_date"><?php echo $error_join_date;?></span></td>
													</tr>
													<tr>
														<td align="right">Left Date:</td>
														<td><select name="left_day" id="left_day">
																<option disabled selected>Day</option>
																<?php 
																	foreach($day as $d){
																		if($d == $left_day) 
																			echo "<option selected>$d</option>"; 
																		else 
																			echo "<option>$d</option>";}
																?>
															</select>
															<select name="left_month" id="left_month">
																<option disabled selected>Month</option>
																	<?php 
																		foreach($month as $m){
																			if($m == $left_month) 
																				echo "<option selected>$m</option>"; 
																			else  
																				echo "<option>$m</option>";}
																	?>
																</select>
																<select name="left_year" id="left_year">
																<option disabled selected>Year</option>
																	<?php 
																		foreach($year as $y){
																			if($y == $left_year) 
																				echo "<option selected>$y</option>"; 
																			else  
																				echo "<option>$y</option>";}
																	?>
																</select></td>   
														<td><span id="error_left_date"><?php echo $error_left_date;?></span></td>
													</tr>
													<tr>
														<td align="right">Qualification:</td>
														<td><input type="checkbox" name="qualifications[]" value="BSC"
															<?php if(qualificationExist("BSC")) 
																echo "checked";
															?>>BSC<br>
														<input type="checkbox" name="qualifications[]" value="MSC"
															<?php if(qualificationExist("MSC")) 
																echo "checked";
															?>> MSC<br>
														<input type="checkbox" name="qualifications[]" value="Other"
															<?php if(qualificationExist("Other")) 
																echo "checked";
															?>> Other<br>
														</td>
														<td><span id="error_qualifications"><?php echo $error_qualifications;?></span></td>
													</tr>
													<tr>
														<td align="right">Present Address:</td>
														<td><input type="text" name="present_address" id="present_address" value="<?php echo $present_address; ?>"></td>
														<td><span id="error_present_address"><?php echo $error_present_address?><span></td>
													</tr>
													<tr>
														<td align="right">Parmanent Address:</td>
														<td><input type="text" name="parmanent_address" id="parmanent_address" value="<?php echo $parmanent_address; ?>"></td>
														<td><span id="error_parmanent_address"><?php echo $error_parmanent_address?></span></td>
													</tr>
													<tr>
														<td align="right">Contact Number:</td>
														<td><input type="text" name="contact_number" id="contact_number" value="<?php echo $contact_number; ?>"></td>
														<td><span id="error_contact_number"><?php echo $error_contact_number?></span></td>
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
		<script src="../controller/js_controller/18-37646-1_admin_controller.js"></script>
	</body>
</html>