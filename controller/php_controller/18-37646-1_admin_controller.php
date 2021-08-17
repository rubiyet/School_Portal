<?php
	
	$teacherid="";
	$error_teacherid="";
	$tname="";
	$error_name="";
	$salary="";
	$error_salary="";
	$temail="";
	$error_email="";
	$tgender="";
	$error_gender="";
	$input_day="";
	$input_month="";
	$input_year="";
	$error_input_date_of_birth="";
	$nationality="";
	$error_nationality="";
	$treligion="";
	$error_religion="";
	$blood_group="";
	$error_blood_group="";
	$father_name="";
	$error_father_name="";
	$mother_name="";
	$error_mother_name="";
	$join_day="";
	$join_month="";
	$join_year="";
	$error_join_date="";
	$left_day="";
	$left_month="";
	$left_year="";
	$error_left_date="";
	$qualifications=[];
	$error_qualifications="";
	$present_address="";
	$error_present_address="";
	$parmanent_address="";
	$error_parmanent_address="";
	$contact_number="";
	$error_contact_number="";
	
	
	$error = false;
	
	$year1=array(2001,2002,2003,2004,2005,2006,2007,2008,2009,2010);
	$month=array("January","February","March","April","May","June","July","August","September","Octobeer","November","December");
	$day= array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	$blood1=array("AB+","AB-","O+","O-","A+","A-","B+","B-");
	
	function qualificationExist($qualification){
		global $qualifications;
		foreach($qualifications as $q){
			if($q == $qualification) return true;
		}
		return false;
	}
	
	if(isset($_POST["submit"])){
		if(empty($_POST["teacherid"])){
			$error = true;
			$error_teacherid = "teacher ID required.";
		}
		else if(strlen($_POST["teacherid"]) != 7){
			$error = true;
			$error_teacherid = "teacher Id must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$arr_teacherid = str_split($_POST["teacherid"]);
            if(strlen($_POST["teacherid"]) == 7){
                if($arr_teacherid[2] == "-"){
                    foreach($arr_teacherid as $at){
                        if($at == "-"){
                            $hypen++;
                        }
                        else if($at >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_teacherid = "teacher Id like as (**-2***)";
                }
                if($arr_teacherid[3] != "2"){
                    $error_teacherid = "teacher Id like as (**-2***)";
                }
            }
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_teacherid = "User Id like as (**-2***)";
			}
			else{
				$teacherid = filter_var($_POST["teacherid"],FILTER_SANITIZE_STRING);
			}
		}
		if(empty($_POST["name"])){
            $error = true;
            $error_name = "Must be need Name";
        }
        else if(strlen($_POST["name"]) < 4){
            $error = true;
            $error_name = "Name is greater then 3 carecter";
        }
        else{
            $count=0;
            $num=0;
            $array_name = str_split($_POST["name"]);
            foreach($array_name as $n){
                if($n >= 'A' && $n <= 'Z')
                    $count++;
                else if($n >= 'a' && $n <= 'z')
                    $count++;
                else if($n >= 0)
                    $num++;
            }
            if($num >= 1){
                $error_name = "Name must be Letter";
            }
            else{
                $tname = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
			}
		}
		if(empty($_POST["salary"])){
			$error = true;
			$error_salary = "need salary";
		}
		else if(is_numeric($_POST["salary"])==false){
			$error = true;
			$error_salary= "salary must be number";
		}
		else{
			$salary = filter_var($_POST["salary"],FILTER_SANITIZE_STRING);
		}	
		if(empty($_POST["email"])){
			$error = true;
			$error_email="email Required";
		}
        else if(strpos($_POST["email"],"@gmail.com") == false){
            $error = true;
			$error_email="Email must contain @gmail.com character";
        }
        else if(strpos($_POST["email"],".") == false){
            $error = true;
			$error_email="Email must contain . character";
        }
        else{
            $temail=$_POST["email"];
        }
		if(!isset($_POST["gender"])){
			$error = true;
			$error_gender="Gender not select";
		}
		else{
			$tgender = filter_var($_POST["gender"],FILTER_SANITIZE_STRING);
		}
		if (!isset($_POST["input_day"])){
			$error = true;
			$error_input_date_of_birth="birth date not select";
		}
		else if (!isset($_POST["input_month"])){
			$error = true;
			$error_input_date_of_birth="birth date not select";
		}
		else if (!isset($_POST["input_year"])){
			$error = true;
			$error_input_date_of_birth="birth date not select";
		}
		else{
			$input_day = filter_var($_POST["input_day"],FILTER_SANITIZE_STRING);
			$input_month = filter_var($_POST["input_month"],FILTER_SANITIZE_STRING);
			$input_year = filter_var($_POST["input_year"],FILTER_SANITIZE_STRING);
		}
		if(empty($_POST["nationality"])){
            $error = true;
            $error_nationality = "Must be need Nationality";
        }
        else if(strlen($_POST["nationality"]) < 4){
            $error = true;
            $error_nationality = "Nationality is greater then 3 carecter";
        }
        else{
            $count1=0;
            $num1=0;
            $array_nationality = str_split($_POST["nationality"]);
            foreach($array_nationality as $n1){
                if($n1 >= 'A' && $n1 <= 'Z')
                    $count1++;
                else if($n1 >= 'a' && $n1 <= 'z')
                    $count1++;
                else if($n1 >= 0)
                    $num1++;
            }
            if($num1 >= 1){
                $error_nationality = "Nationality must be Letter";
            }
            else{
                $nationality = filter_var($_POST["nationality"],FILTER_SANITIZE_STRING);
			}
		}
		if(empty($_POST["religion"])){
            $error = true;
            $error_religion = "Must be need Religion";
        }
        else if(strlen($_POST["religion"]) < 4){
            $error = true;
            $error_religion = "Religionis greater then 3 carecter";
        }
        else{
            $count2=0;
            $num2=0;
            $array_religion = str_split($_POST["religion"]);
            foreach($array_religion as $r){
                if($r >= 'A' && $r <= 'Z')
                    $count2++;
                else if($r >= 'a' && $r <= 'z')
                    $count2++;
                else if($r >= 0)
                    $num2++;
            }
            if($num2 >= 1){
                $error_religion = "religion must be Letter";
            }
            else{
                $treligion = filter_var($_POST["religion"],FILTER_SANITIZE_STRING);
			}
		}
		if (!isset($_POST["blood_group"])){
			$error = true;
			$error_blood_group="blood group not select";
		}
		else{
			$blood_group = filter_var($_POST["blood_group"],FILTER_SANITIZE_STRING);
		}
		if(empty($_POST["father_name"])){
            $error = true;
            $error_father_name = "Must be need Father Name";
        }
        else if(strlen($_POST["father_name"]) < 4){
            $error = true;
            $error_father_name = "Father Name is greater then 3 carecter";
        }
        else{
            $count3=0;
            $num3=0;
            $array_fathername = str_split($_POST["father_name"]);
            foreach($array_fathername as $f){
                if($f >= 'A' && $f <= 'Z')
                    $count3++;
                else if($f >= 'a' && $f <= 'z')
                    $count3++;
                else if($f >= 0)
                    $num3++;
            }
            if($num3 >= 1){
                $error_father_name = "Father Name must be Letter";
            }
            else{
                $father_name = filter_var($_POST["father_name"],FILTER_SANITIZE_STRING);
			}
		}
		if(empty($_POST["mother_name"])){
            $error = true;
            $error_mother_name = "Must be need Mother Name";
        }
        else if(strlen($_POST["mother_name"]) < 4){
            $error = true;
            $error_mother_name = "Mother Name is greater then 3 carecter";
        }
        else{
            $count4=0;
            $num4=0;
            $array_mothername = str_split($_POST["mother_name"]);
            foreach($array_mothername as $m){
                if($m >= 'A' && $m <= 'Z')
                    $count4++;
                else if($m >= 'a' && $m <= 'z')
                    $count4++;
                else if($m >= 0)
                    $num4++;
            }
            if($num4 >= 1){
                $error_mother_name = "Mother Name must be Letter";
            }
            else{
                $mother_name = filter_var($_POST["mother_name"],FILTER_SANITIZE_STRING);
			}
		}
		if (!isset($_POST["join_day"])){
			$error = true;
			$error_join_date="join date not select";
		}
		else if (!isset($_POST["join_month"])){
			$error = true;
			$error_join_date="join date not select";
		}
		else if (!isset($_POST["join_year"])){
			$error = true;
			$error_join_date="join date not select";
		}
		else{
			$join_day = filter_var($_POST["join_day"],FILTER_SANITIZE_STRING);
			$join_month = filter_var($_POST["join_month"],FILTER_SANITIZE_STRING);
			$join_year = filter_var($_POST["join_year"],FILTER_SANITIZE_STRING);
		}
		if (!isset($_POST["left_day"])){
			$error = true;
			$error_left_date="left date not select";
		}
		else if (!isset($_POST["left_month"])){
			$error = true;
			$error_left_date="left date not select";
		}
		else if (!isset($_POST["left_year"])){
			$error = true;
			$error_left_date="left date not select";
		}
		else{
			$left_day = filter_var($_POST["left_day"],FILTER_SANITIZE_STRING);
			$left_month = filter_var($_POST["left_month"],FILTER_SANITIZE_STRING);
			$left_year = filter_var($_POST["left_year"],FILTER_SANITIZE_STRING);
		}
		if(!isset($_POST["qualifications"])){
			$error = true;
			$error_qualifications="not select";
		}
		else{
			$qualifications = $_POST["qualifications"];
		}
		if(empty($_POST["present_address"])){
			$error = true;
			$error_present_address= "need present address";
		}
		else{
			$present_address = filter_var($_POST["present_address"],FILTER_SANITIZE_STRING);
		}
		if(empty($_POST["parmanent_address"])){
			$error = true;
			$error_parmanent_address= "need parmanent address";
		}
		else{
			$parmanent_address = filter_var($_POST["parmanent_address"],FILTER_SANITIZE_STRING);
		}
		if(empty($_POST["contact_number"])){
			$error = true;
			$error_contact_number = "need contact number";
		}
		else if(is_numeric($_POST["contact_number"])==false){
			$error = true;
			$error_contact_number= "contact number must be number";
		}
		else{
			$contact_number = filter_var($_POST["contact_number"],FILTER_SANITIZE_STRING);
		}
	
		if(!$error){
		$birthday = $input_day." ".$input_month." ".$input_year;
            $joiningdate = $join_day." ".$join_month." ".$join_year;
            $leftdate = $left_day." ".$left_month." ".$left_year;
            $qualificationsstring = implode(", ",$qualifications);
            $data = insertteacher($teacherid,$tname,$salary,$temail,$tgender,$birthday,$nationality,$treligion,$blood_group,$father_name,$mother_name,$joiningdate,$leftdate,$qualificationsstring,$present_address,$parmanent_address,$contact_number);
			
		}
	}
	function insertteacher($teacherid,$name,$salary,$email,$gender,$birthday,$nationality,$religion,$blood_group,$father_name,$mother_name,$joiningdate,$leftdate,$qualificationsstring,$present_address,$parmanent_address,$contact_number){
        $query = "insert into teacher values(Null,'$teacherid','$name','$salary','$email','$gender','$birthday','$nationality','$religion','$blood_group','$father_name','$mother_name','$joiningdate','$leftdate','$qualificationsstring','$present_address','$parmanent_address','$contact_number')";
        return execute($query);
    }
	function getAllTeachers(){
        $query = "select * from teacher";
        $rs = get($query);
        return $rs;
    }
	function getTeacher($id){
        $query = "select * from teacher where id = $id";
        $rs = get($query);
		global $teacherid;
		global $name;
		global $salary;
		global $email;
		global $gender;
		global $birthday;
		global $nationality;
		global $religion;
		global $blood_group;
		global $father_name;
		global $mother_name;
		global $joining_day;
		global $left_day;
		global $qualifications;
		global $present_address;
		global $parmanent_address;
		global $contact_number;
		$teacherid = $rs[0]["userid"];
		$name = $rs[0]["name"];
		$salary = $rs[0]["salary"];
		$email = $rs[0]["email"];
		$gender = $rs[0]["gender"];
		$birthday = $rs[0]["birthday"];
		$nationality = $rs[0]["nationality"];
		$religion = $rs[0]["religion"];
		$blood_group = $rs[0]["bloodgroup"];
		$father_name = $rs[0]["fathername"];
		$mother_name = $rs[0]["mothername"];
		$joining_day = $rs[0]["joiningdate"];
		$left_day = $rs[0]["leftdate"];
		$qualifications = $rs[0]["qualification"];
		$present_address = $rs[0]["presentaddress"];
		$parmanent_address = $rs[0]["parmanentaddress"];
		$contact_number = $rs[0]["contactnumber"];
        return $rs[0];
    }
	if(isset($_POST["btn_editteacher"])){
		$teacherid=$_POST["userid"];
		$name=$_POST["name"];
		$salary=$_POST["salary"];
		$email=$_POST["email"];
		$gender=$_POST["gender"];
		$birthday=$_POST["birthday"];
		$nationality=$_POST["nationality"];
		$religion=$_POST["religion"];
		$blood_group=$_POST["bloodgroup"];
		$father_name=$_POST["fathername"];
		$mother_name=$_POST["mothername"];
		$joining_day=$_POST["joiningdate"];
		$left_day=$_POST["leftdate"];
		$qualifications=$_POST["qualification"];
		$present_address=$_POST["presentaddress"];
		$parmanent_address=$_POST["parmanentaddress"];
		$contact_number=$_POST["contactnumber"];
        if(editteacher($teacherid, $name, $salary, $email, $gender, $birthday, $nationality, $religion, $blood_group, $father_name, $mother_name, $joining_day, $left_day, $qualifications, $present_address, $parmanent_address, $contact_number)){
            header("Location: 18-37646-1_teacher_info_update.php");
        }
    }
    function editteacher($teacherid, $name, $salary, $email, $gender, $birthday, $nationality, $religion, $blood_group, $father_name, $mother_name, $joining_day, $left_day, $qualifications, $present_address, $parmanent_address, $contact_number){
        global $id;
        $query = "update teacher set userid='$teacherid', name='$name', salary='$salary', email='$email', gender='$gender', birthday='$birthday', nationality='$nationality', religion='$religion', bloodgroup='$blood_group', fathername='$father_name', mothername='$mother_name', joiningdate='$joining_day', leftdate='$left_day', qualification='$qualifications', presentaddress='$present_address', parmanentaddress='$parmanent_address', contactnumber='$contact_number' where id =$id";
        return execute($query);
    }
	if(isset($_POST["btn_deleteteacher"])){
		if(deleteteacher()){
			header("Location: 18-37646-1_teacher_info_delete.php");
		}
	}
	function deleteteacher(){
		global $id;
		$query = "delete from teacher where id = $id";
		return execute($query);
	}

	function teacher_search($userid){
        $query = "select * from teacher where userid like '%$userid%'";
        $data = get($query);
        return $data;
    }


	//user account
	$userid = "";
	$error_userid = "";
	$type = "";
	$error_type = "";
	$password = "";
	$error_password = "";
	$success_connect = "";
	$success_connect1 ="";
	$status = "";

	$error = false;
	
	$array_type= array("Admin","Teacher","Student");
	$array_status = array("Active","Inactive");

	function generateRandomString($length = 6) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = array("#","@");
		$randomString1 = "";
		for ($i = 0; $i < $length; $i++) {
			array_push($randomString,$characters[rand(0, $charactersLength - 1)]);
		}
		shuffle($randomString);
		foreach($randomString as $rs){
			$randomString1 .= $rs;
		}
		return $randomString1;
	}
	
	if(isset($_POST["submit"])){
		if(empty($_POST["userid"])){
			$error = true;
			$error_userid = "User Id required.";
		}
		else if(strlen($_POST["userid"]) != 7){
			$error = true;
			$error_userid = "User Id must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$array_userid = str_split($_POST["userid"]);
			if(strlen($_POST["userid"]) == 7){
				if($array_userid[2] == "-"){
					foreach($array_userid as $au){
						if($au == "-"){
							$hypen++;
						}
						else if($au >= 0){
							$number++;
						}
						else{
							$bug++;
						}
					}
				}
				else{
					$error = true;
					$error_userid = "User Id like as (00-0000)";
				}
			}
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_userid = "User Id like as (00-0000)";
			}
			else{
				$userid = filter_var($_POST["userid"],FILTER_SANITIZE_STRING);
			}	
		}
		if(!isset($_POST["type"])){
			$error = true;
			$error_type = "Type required.";
		}
		else{
			$type = filter_var($_POST["type"],FILTER_SANITIZE_STRING);
		}
		if(isset($_POST["status"])){
			$status = filter_var($_POST["status"],FILTER_SANITIZE_STRING);
		}
		if(isset($_POST["type"])){
			if(strlen($_POST["userid"]) == 7){
				if($type == "Admin"){
					$array_userid = str_split($_POST["userid"]);
					if($array_userid[3] != 1){
						$error = true;
						$error_userid = " Admin User Id like as (**-1***) with 7 character";
					}
				}
				else if($type == "Teacher"){
					$array_userid = str_split($_POST["userid"]);
					if($array_userid[3] != 2){
						$error = true;
						$error_userid = " Teacher User Id like as (**-2***) with 7 character";
					}
				}
				else if($type == "Student"){
					$array_userid = str_split($_POST["userid"]);
					if($array_userid[3] != 3){
						$error = true;
						$error_userid = " Student User Id like as (**-3***) with 7 character";
					}
				}
			}
		}
		if(!$error){
			$password = generateRandomString();
			$data = insertuser($userid,$password,$type,$status);
			$query = "insert into users values(Null,'$userid','$password','$type','$status')";
		}
	}
	function insertuser($userid,$password,$type,$status){
		$query = "insert into users values(Null,'$userid','$password','$type','$status')";
		return execute($query);
	}
	function getAllUsers(){
        $query = "select * from users";
        $rs = get($query);
        return $rs;
    }
	function getUser($id){
        $query = "select * from users where id = $id";
        $rs = get($query);
        return $rs[0];
    }
	if(isset($_POST["btn_edituser"])){
		$userid=$_POST["uname"];
		$type=$_POST["type"];
		$status=$_POST["status"];
        if(edituser($userid, $type, $status)){
            header("Location: 18-37646-1_user_acc_update.php");
        }
    }
    function edituser($userid, $type, $status){
        global $id;
        $query = "update users set uname='$userid', type='$type', status='$status' where id =$id";
        return execute($query);
    }
	if(isset($_POST["btn_deleteuser"])){
		if(deleteuser()){
			header("Location: 18-37646-1_user_acc_delete.php");
		}
	}
	function deleteuser(){
		global $id;
		$query = "delete from users where id = $id";
		return execute($query);
	}
	//teacher
	$teacher_enrollment_month="";
	$teacher_enrollment_year="";
	$teacher_enrollment_month_year="";
	$error_teacher_enrollment_month_year="";
	
	if(isset($_POST["btn_teacher_enrollment"])){	
		if(!isset($_POST["teacher_enrollment_month"]) && !isset($_POST["teacher_enrollment_year"])){
			$error =true;
			$error_teacher_enrollment_month_year="Only year or month year both required";
		}
        else if(isset($_POST["teacher_enrollment_month"]) && !isset($_POST["teacher_enrollment_year"])){
			$error=true;
			$teacher_enrollment_month=$_POST["teacher_enrollment_month"];
			$error_teacher_enrollment_month_year="month and year both required";
		}
		else if(isset($_POST["teacher_enrollment_month"]) && isset($_POST["teacher_enrollment_year"])){
			$teacher_enrollment_month_year=$_POST["teacher_enrollment_month"]." ".$_POST["teacher_enrollment_year"];
		}
        else if(isset($_POST["teacher_enrollment_year"])){
			$teacher_enrollment_year=$_POST["teacher_enrollment_year"];
		}
		if(!$error){
			if(!empty($teacher_enrollment_year)){
				setcookie("joining_year",$teacher_enrollment_year,time()+3600);
				header("location:18-37646-1_teacher_enrollment1.php");
			}
			else if(!empty($teacher_enrollment_month_year)){
				setcookie("joining_year",$teacher_enrollment_month_year,time()+3600);
				header("location:18-37646-1_teacher_enrollment1.php");
			}
		}
	}
	$joining_year="";
	if(isset($_COOKIE["joining_year"])){
		$joining_year=$_COOKIE["joining_year"];
	}
	function joiningyear($joining_year){
		$query="select * from teacher where joiningdate like '%$joining_year%'";
		$data=get($query);
		return $data;
	}
?>