<?php

    $teacheridforpasswordchange = $_COOKIE['__RequestVerificationToken'];

	$old_password="";
	$err_old_password="";
	
	$new_password="";
	$err_new_password="";
	
	$confirm_new_password="";
	$err_confirm_new_password="";

	$hasError=false;
	
	
if(isset($_POST["teacherpasswordchange"])){
		
		if(empty($_POST["oldpassword"])){
			$hasError = true;
			$err_old_password="Old Password Required";
		}
		else{
			$old_password = $_POST["oldpassword"];
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
                $data1 = updateteacherpassword($new_password);
                if($data1 === true){
                    $error_massage2 = "Successfully Change Password.";
                    $old_password = "";
                    $new_password = "";
                    $confirm_new_password = "";
                }
            }
            else{
                $error_massage1 = "Old Password Not Match.";
                $old_password = "";
            }
        }
		
}

function authenticationforpasswordchange(){
    global $teacheridforpasswordchange;
    global $old_password;
    $query = "select * from users where id = '$teacheridforpasswordchange' and pass = '$old_password'";
    $data = get($query);
    return $data;
}

function updateteacherpassword($new_password){
    global $teacheridforpasswordchange;
    $query = "update users set pass='$new_password' where id=$teacheridforpasswordchange";
    return execute($query);
}
?>