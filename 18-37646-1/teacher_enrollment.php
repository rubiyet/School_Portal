<?php


    
	$month=array("January","February","March","April","May","June","July","August","September","Octobeer","November","December");
	$year=array(2001,2002,2003,2004,2005,2006,2007,2008,2009,2010);

	$teacher_enrollment_month="";
	$teacher_enrollment_year="";
	$error_teacher_enrollment_month_year="";
	
	$error=false;
	
	if(isset($_POST["btn_teacher_enrollment"])){	
		if(!isset($_POST["teacher_enrollment_month"]) && !isset($_POST["teacher_enrollment_year"])){
			$error =true;
			$error_teacher_enrollment_month_year="month or year required";
		}
        else if(isset($_POST["teacher_enrollment_month"])){
			$teacher_enrollment_month=$_POST["teacher_enrollment_month"];
		}
        else if(isset($_POST["teacher_enrollment_year"])){
			$teacher_enrollment_year=$_POST["teacher_enrollment_year"];
		}
	}
?>
<html>
	<body>
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
									foreach($year as $y){
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
	</body>
</html>
