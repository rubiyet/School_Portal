<?php
	include 'header.php';
	$teachers=getAllTeachers();
?>
<html>
	<head>
		<link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
		<style>

		</style>
	</head>
	<body>
		<table width="100%">
			<tr>
				<td width="18.5%"></td>
				<td width="63%">
					<table width="100%" height="830" valign="top" >
						<tr>
							<td width="23%" valign="top">
								<?php include 'navbar.php';?>
							</td>
							<td width="77%" valign="top">
								<table id="frame">
									<tr>
										<td colspan="3" id="title" valign="center">TEACHER ENROLLMENT</td>
									</tr>
									<tr>
										<td valign="top" align="center">
		<table>
        <form method="POST">
			<tr>
				<td>
					<select name="teacher_enrollment_month" id="teacher_enrollment_month" >
							<option disabled selected>Month</option>
								<?php 
									foreach($month as $m){
										if($m == $teacher_enrollment_month) 
											echo "<option selected>$m</option>"; 
										else  
											echo "<option>$m</option>";}
								?>
							</select>
				</td>
				<td>
					<select name="teacher_enrollment_year" id="teacher_enrollment_year" >
							<option disabled selected>Year</option>
								<?php 
									foreach($year1 as $y){
										if($y == $teacher_enrollment_year) 
											echo "<option selected>$y</option>"; 
										else  
											echo "<option>$y</option>";}
								?>
							</select>
				</td>
				<td>
					<?php echo $error_teacher_enrollment_month_year;?>
				</td>
			</tr>
			<tr>
					<td align="center" colspan="2">
						<input type="Submit" name="btn_teacher_enrollment" value="Insert">
                        <a href="#"><input type="Submit" value="Reset"></a>
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
	</body>
</html>