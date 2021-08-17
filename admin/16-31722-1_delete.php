<?php include 'header.php';?>


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
		if(get("studentenrollid").value == ""){
			hasError=true;
			get("err_student_enroll_id").innerHTML = "*Enroll id required";
		}
		
		
		
		return !hasError;
		
	}
		function refresh(){
		hasError=false;
		get("err_student_enroll_id").innerHTML = "";
		
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
			<table  style="background-color: plum; border: 20px solid DarkSlateGray; box-shadow: 10px 10px grey;" align="center">
				
			<form action="" onsubmit="return validate()" method="post">

                 <tr>
					<td align="right">Student Enrollment Id: </td>
					<td><input id="studentenrollid" type="text" name="studentenrollid" placeholder="Student Enrollment Id" value="<?php echo $student_enroll_id; ?>"> </td>
					<td><span id="err_student_enroll_id" > <?php echo $err_student_enroll_id;?> </span></td>
				</tr>
				<tr>
				<td> </td>
					<td  align="center"><input type="submit" name="deletestudententryinthecourse" value="Delete"> <input type="submit" name="submit" value="Clear"></td>
					
					
				</tr>
				
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