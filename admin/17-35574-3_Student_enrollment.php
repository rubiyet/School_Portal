<?php
	include 'header.php';
	$teachers=getAllStudents();
	//print_r($teachers);
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
                                        <td colspan="3" id="title" valign="center">STUDENT PERSONAL INFORMATION INSERT</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
                                            <table id="">
        <form method="POST">
			<tr>
				<td>
					<select name="Student_enroll_month" id="student_enrollment_month" >
							<option disabled selected>Month</option>
								<?php 
									foreach($array as $m){
										if($m == $student_enrollment_month) 
											echo "<option selected>$m</option>"; 
										else  
											echo "<option>$m</option>";}
								?>
							</select>
				</td>
				<td>
					<select name="Student_enroll_year" id="student_enrollment_year" >
							<option disabled selected>Year</option>
								<?php 
									  for($j=1920; $j<=2010; $j++)
									  {
										if($j == $student_enrollment_year) 
											echo "<option selected>$j</option>"; 
										else  
											echo "<option>$j</option>";}
								?>
							</select>
				</td>
				<td>
					<?php echo $error_student_enrollment_month_year;?>
				</td>
			</tr>
			<tr>
					<td align="center" colspan="2">
						<input type="Submit" name="student_enroll" value="Insert">
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