<?php

    $adminidforpasswordchange = $_COOKIE['__RequestVerificationToken'];

	$current_password="";
	$err_current_password="";
	
	$new_password="";
	$err_new_password="";
	
	$confirm_new_password="";
	$err_confirm_new_password="";

	$hasError=false;
	
	
if(isset($_POST["adminpasswordchange"])){
		
		if(empty($_POST["currentpassword"])){
			$hasError = true;
			$err_current_password="Current Password Required";
		}
		else{
			$current_password = $_POST["currentpassword"];
		}
		if(empty($_POST["newpassword"])){
			$hasError = true;
			$err_new_password="New Password Required";
		}
		else if(strlen($_POST["newpassword"]) <= 7){
			$hasError = true;
			$err_new_password="New Password must contain at least 8 character";   
		}
		else if(strpos($_POST["newpassword"], '@') == false && strpos($_POST["newpassword"], "#") == false){
            $err_new_password= "New Password must contain at least 8 character,one @ character and one # character";
		}
		else{
			$upper = 0;
			$lower = 0;
			$number = 0;
			$arr = str_split($_POST["newpassword"]);
			foreach($arr as $a){
				if($a >= 'A' && $a <= 'Z')
					$upper++;
				else if($a >= 'a' && $a <= 'z')
					$lower++;
				else if ($a >= 0)
					$number++;
			}
			if($upper >= 1 && $lower >= 1 && $number >= 1){
				$new_password = $_POST["newpassword"];
			}
			else{
				$err_new_password= "Must contain at least 8 character, 1 special character(@ or #),1 number and combination of uppercase and lowercase alphabet";
			}
		}
		
		if(empty($_POST["confirmnewpassword"])){
			$hasError = true;
			$err_confirm_new_password="Confirm new password Required";
		}
        else if($_POST["confirmnewpassword"] != $_POST["newpassword"]){
            $hasError = true;
			$err_confirm_new_password="new password and confirm new password not match";
        }
        else{
            $confirm_new_password=$_POST["confirmnewpassword"];
        }
        if(!$hasError){
            $data = authenticationforpasswordchange();
            if(count($data) > 0){
                $data1 = updateadminpassword($new_password);
                if($data1 === true){
                    $error_massage2 = "Successfully Change Password.";
                    $current_password = "";
                    $new_password = "";
                    $confirm_new_password = "";
                }
            }
            else{
                $error_massage1 = "Old Password Not Match.";
                $current_password = "";
            }
        }
		
}

function authenticationforpasswordchange(){
    global $adminidforpasswordchange;
    global $current_password;
    $query = "select * from users where id = '$adminidforpasswordchange' and pass = '$current_password'";
    $data = get($query);
    return $data;
}

function updateadminpassword($new_password){
    global $adminidforpasswordchange;
    $query = "update users set pass='$new_password' where id=$adminidforpasswordchange";
    return execute($query);
}

	$student_enroll_id="";
	$err_student_enroll_id="";
	
	$student_id="";
	$err_student_id="";
	
	$course_id="";
	$err_course_id="";
	
	
	
	
	
	if (isset($_GET["id"])){
		$id=$_GET["id"];
	}
	
	$hasError=false;
	
	if(isset($_POST["submit"])){
		
		if(empty($_POST["studentid"])){
			$hasError = true;
			$err_student_id=" Student Id Required";
		}
		else{
			$student_id = $_POST["studentid"];
		}
		
		if(empty($_POST["courseid"])){
			$hasError = true;
			$err_course_id=" Course Id Required";
		}
		else{
			$course_id = $_POST["courseid"];
		}
		
		
		
		if(!$hasError){
				$data = insertstudentenrollment($student_id,$course_id);
				
        }
		

    
		
		
	}
	
	function insertstudentenrollment($student_id,$course_id){
        $query = "insert into studentenrollment values(Null,'$student_id','$course_id','0','0','0')";
        return execute($query);
    }	
	if(isset($_POST["deletestudententryinthecourse"])){
		if(empty($_POST["studentenrollid"])){
			$hasError = true;
			$err_student_enroll_id="Student Enroll Id Required";
		}
		else{
			$student_enroll_id = $_POST["studentenrollid"];
		}
		
		if(!$hasError){
            $data = deletestudentenrollment($student_enroll_id);
            
        }
}	
	function deletestudentenrollment($student_enroll_id){
        $query = "delete from Studentenrollment where studentenrollmentid='$student_enroll_id'";
        return execute($query);
    }
	function studentenrollmentinthecourse(){
		$query ="select * from Studentenrollment ";
		$data = get($query);
		return $data;
	}
	function getstudentenrollmentinthecourse($id){
		$query="select * from Studentenrollment where studentenrollmentid='$id'";
		$data= get($query);
		return $data[0];
	}
	
		if(isset($_POST["updatestudententryinthecourse"])){
		if(empty($_POST["studentid"])){
			$hasError = true;
			$err_student_id=" Student Id Required";
		}
		else{
			$student_id = $_POST["studentid"];
		}
		
		if(empty($_POST["courseid"])){
			$hasError = true;
			$err_course_id=" Course Id Required";
		}
		else{
			$course_id = $_POST["courseid"];
		}
		
		
			if(!$hasError){
            $data = updatestudentenrollment($student_id,$course_id);
			}
	}
		function updatestudentenrollment($student_id,$course_id){
		global $id;
			$query = "update studentenrollment set studentid='$student_id', course_semester_id='$course_id' where studentenrollmentid='$id'";
			return execute($query);
			
			
		}
?>