<?php

    include 'header.php';

?>

<html>
	<head>
	<link rel="stylesheet" href="css/admin_info_insertupdatedelete_form.css">
	<script>

	
	var haserror=false;
	function get(id){
	return document.getElementById(id);
	}
	function validate(){
		refresh();
		
		if(get("studentid").value == ""){
			hasError=true;
			get("err_student_id").innerHTML = "*Student id required";
		}
		else if (get("studentid").value.length <=6){
			hasError=true;
			get("err_student_id").innerHTML = "* ID must be Entered"
		}
		if(get("courseid").value == ""){
			hasError=true;
			get("err_course_id").innerHTML = "*Course id required";
		}
		
		
		
		
		return !hasError;
		
	}
	function refresh(){
		hasError=false;
		
		get("err_student_id").innerHTML = "";
		get("err_course_id").innerHTML = "";
		
	}

    </script>
	

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
                                        <td colspan="3" id="title" valign="center">STUDENT ENTRY IN THE COURSE</td>
                                    </tr>
                                    <tr>
                                        <td valign="top">
										<form action="" onsubmit="return validate()" method="post">
			<table  style="background-color: plum; border: 20px solid DarkSlateGray; box-shadow: 10px 10px grey;" align="center">
				
				<tr>
					<td align="right">Student Id: </td>
					<td><input id="studentid" type="text" name="studentid" placeholder="Student Id" value="<?php echo $student_id; ?>">  </td>
					<td><span id="err_student_id"> <?php echo $err_student_id;?> </span></td>
				</tr>
				<tr>
					<td align="right">Course Id: </td>
					<td><input id="courseid" type="text" name="courseid" placeholder="Course Id" value="<?php echo $course_id; ?>">  </td>
					<td><span id="err_course_id"> <?php echo $err_course_id;?> </span></td>
				</tr>
				
				
				
				<tr>
				<td> </td>
					<td  align="center"><input type="submit" name="submit" value="Insert"> <input type="submit" name="" value="Clear"></td>
					
					
				</tr>
                
			</table>
</form>
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