<?php

    include '../model/db_config.php';


    //..............................................................PERSONAL_INFO.........................................................


    session_start();

    if(!isset($_COOKIE["__RequestVerificationToken"])){
        header("Location: ../portal.php");
    }

    function adminidforpersonalinfo($adminidforpersonalinfo){
        $query =  "select * from admin inner join users on admin.userid = users.uname where users.id = $adminidforpersonalinfo";
        $data = get($query);
        if(count($data) > 0){
            $_SESSION["name"] = $data[0]["name"];
            return $data[0];
        }
        else{
            return false;
        }
    }
    
    //..............................................................ADMIN_INSERT...........................................................

    $adminid3 = "";
    $error_adminid3 = "";
    $adminid1 = "";
    $error_adminid1 = "";
    $adminid2 = "";
    $adminid = "";
    $error_adminid = "";
    $name = "";
    $error_name = "";
    $salary = "";
    $error_salary = "";
    $email = "";
    $error_email = "";
    $gender ="";
    $error_gender = "";
    $inputbdday="";
	$inputbdmonth="";
	$inputbdyear="";
	$error_inputbddaymonthyear="";
    $inputnationality = "";
    $error_nationality = "";
    $inputreligion = "";
    $error_religion = "";
    $inputbloodgroup = "";
    $error_inputbloodgroup = "";
    $fathername = "";
    $error_fathername = "";
    $mothername = "";
    $error_mothername = "";
    $inputjday = "";
    $inputjmonth = "";
    $inputjyear = "";
    $error_inputjdaymonthyear = "";
    $inputlday = "";
    $inputlmonth = "";
    $inputlyear = "";
    $qualifications = array();
    $error_qualifications = "";
    $error_inputldaymonthyear = "";
    $presentaddress = "";
    $error_presentaddress = "";
    $parmanentaddress = "";
    $error_parmanentaddress = "";
    $contactnumber = "";
    $error_contactnumber = "";
    $filename = "";
    $filename1 = "";
    $folder = "";
    $image = "";
    $error_img = "";
    $error_massage1 = "";
    $error_massage2 = "";

    $error = false;

    $aday = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31);
	$amonth = array("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
	$ayear = array(1997,1998,1999,2000,2001,2002,2003,2004,2005,2006,2007,2008,2009,2010,2011,2012,2013,2014,2015,2016,2017,2018,2019,2020,2021);
    $anationality = array("America","Bangladesh","India","Pakisthan","Uganda");
    $areligion = array("Muslim","Hindu","Buddhist","Chrustian","other");
    $bloodgroup = array("AB+","AB-","A+","A-","B+","B-","O+","O-");

    if(isset($_POST["admininsert"])){

        if(empty($_POST["adminid"])){
			$error = true;
			$error_adminid = "Admin ID required.";
		}
		else if(strlen($_POST["adminid"]) != 7){
			$error = true;
			$error_adminid = "Admin Id must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$arr_adminid = str_split($_POST["adminid"]);
            if(strlen($_POST["adminid"]) == 7){
                if($arr_adminid[2] == "-"){
                    
                    foreach($arr_adminid as $aa){
                        if($aa == "-"){
                            $hypen++;
                        }
                        else if($aa >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_adminid = "Admin Id like as (**-1***)";
                }
                if($arr_adminid[3] != "1"){
                    $error_adminid = "Admin Id like as (**-1***)";
                }
            }
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_adminid = "User Id like as (**-1***)";
			}
			else{
				$adminid = filter_var($_POST["adminid"],FILTER_SANITIZE_STRING);
			}	
		}

        if(empty($_POST["name"])){
            $error = true;
            $error_name = "Must be need Name";
        }
        else if(strlen($_POST["name"]) < 3){
            $error = true;
            $error_name = "Name must be greater then 2 letter";
        }
        else{
            $letter=0;
            $number=0;
            $arr_name = str_split($_POST["name"]);
            foreach($arr_name as $an){
                if($an >= 'A' && $an <= 'Z')
                    $letter++;
                else if($an >= 'a' && $an <= 'z')
                    $letter++;
                else if(is_numeric($an))
                    $number++;
            }
            if($number >= 1){
                $error = true;
                $error_name = "Name must be contain only Letter";
            }
            else{
                $name = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
            }
        }
        if(empty($_POST["salary"])){
            $error = true;
            $error_salary = "Must be need Salary";
        } 
        else if(is_numeric($_POST["salary"]) == false){
            $error = true;
            $error_salary = "Salary must be contain only number";
        }
        else{
            $salary = $_POST["salary"];
        }
        if(empty($_POST["email"])){
			$error = true;
			$error_email = "Must be need email";
		}
        else if(strlen($_POST["email"]) < 11){
            $error = true;
            $error_email = "Email must contain someone@gmail.com";
        }
        else if(strpos($_POST["email"], "@gmail.com") == false){
            $hasError = true;
			$error_email = "Email must contain someone@gmail.com";
        }
        else{
            $letter4 = 0;
            $number4 = 0;
            $atsign = 0;
            $fullstop = 0;
            $bug = 0;
            $arr_email = str_split($_POST["email"]);
            foreach($arr_email as $ae){
                if($ae >= "a" && $ae <= "z")
                    $letter4++;
                else if(is_numeric($ae))
                    $number++;
                else if($ae == "@")
                    $atsign++;
                else if($ae == ".")
                    $fullstop++;
                else
                    $bug++;
            }
            if($atsign > 1 || $bug > 0){
                $error_email = "Sorry, someone only letters (a-z), numbers (0-9), and periods (.) are allowed.";
            }
            else{  
                $email = filter_var($_POST["email"],FILTER_SANITIZE_STRING);
            }
        }
        if(!isset($_POST["gender"])){
			$error = true;
			$error_gender = "Gender Must be Required";
		}
		else{
			$gender = $_POST["gender"];
		}
        if (!isset($_POST["inputbdday"]) || !isset($_POST["inputbdmonth"]) || !isset($_POST["inputbdyear"])){
			$error = true;
			$error_inputbddaymonthyear = "Birth Day, Month & Year Required";
		}
		else{
			$inputbdday = $_POST["inputbdday"];
			$inputbdmonth = $_POST["inputbdmonth"];
			$inputbdyear = $_POST["inputbdyear"];
		}
        if(empty($_POST["inputnationality"])){
            $error = true;
            $error_nationality = "Must be need Nationality";
        }
        else{
            $inputnationality = $_POST["inputnationality"];
        }
        if(empty($_POST["inputreligion"])){
            $error = true;
            $error_religion = "Must be need religion";
        }
        else{
            $inputreligion = $_POST["inputreligion"];
        }
        
        if(!isset($_POST["inputbloodgroup"])){
			$error = true;
			$error_inputbloodgroup = "Blood Group Must be Required";
		}
		else{
			$inputbloodgroup = $_POST["inputbloodgroup"];
		}
        if(empty($_POST["fathername"])){
            $error = true;
            $error_fathername = "Must be need Father Name";
        }
        else if(strlen($_POST["fathername"]) < 3){
            $error = true;
            $error_fathername = "Father Name must be greater then 2 letter";
        }
        else{
            $letter5=0;
            $number5=0;
            $arr_fathername = str_split($_POST["fathername"]);
            foreach($arr_fathername as $afn){
                if($afn >= 'A' && $afn <= 'Z')
                    $letter5++;
                else if($afn >= 'a' && $afn <= 'z')
                    $letter5++;
                else if(is_numeric($afn))
                    $number5++;
            }
            if($number5 >= 1){
                $error = true;
                $error_fathername = "Father Name must be contain only Letter";
            }
            else{
                $fathername = filter_var($_POST["fathername"],FILTER_SANITIZE_STRING);
            }
        }
        if(empty($_POST["mothername"])){
            $error = true;
            $error_mothername = "Must be need Mother Name";
        }
        else if(strlen($_POST["mothername"]) < 3){
            $error = true;
            $error_mothername = "Mother Name must be greater then 2 letter";
        }
        else{
            $letter6=0;
            $number6=0;
            $arr_mothername = str_split($_POST["mothername"]);
            foreach($arr_mothername as $amn){
                if($amn >= 'A' && $amn <= 'Z')
                    $letter6++;
                else if($amn >= 'a' && $amn <= 'z')
                    $letter6++;
                else if(is_numeric($amn))
                    $number6++;
            }
            if($number6 >= 1){
                $error = true;
                $error_mothername = "Mother Name must be contain only Letter";
            }
            else{
                $mothername = filter_var($_POST["mothername"],FILTER_SANITIZE_STRING);
            }
        }
        if (!isset($_POST["inputjday"]) || !isset($_POST["inputjmonth"]) || !isset($_POST["inputjyear"])){
			$error = true;
			$error_inputjdaymonthyear="Join Day, Month & Year Required";
		}
		else{
			$inputjday = $_POST["inputjday"];
			$inputjmonth = $_POST["inputjmonth"];
			$inputjyear = $_POST["inputjyear"];
		}
        if (!isset($_POST["inputlday"]) || !isset($_POST["inputlmonth"]) || !isset($_POST["inputlyear"])){
			$error = true;
			$error_inputldaymonthyear="Left Day, Month & Year Required";
		}
		else{
			$inputlday = $_POST["inputlday"];
			$inputlmonth = $_POST["inputlmonth"];
			$inputlyear = $_POST["inputlyear"];
		}
        if(empty($_POST["presentaddress"])){
			$error = true;
			$error_presentaddress ="Present Address Must be Required";
		}
		else{
			$presentaddress = filter_var($_POST["presentaddress"],FILTER_SANITIZE_STRING);
		}
        if(isset($_POST["sameaspresentaddress"])){
            $parmanentaddress = $_POST["presentaddress"];
		}
        if(empty($_POST["parmanentaddress"]) && !isset($_POST["sameaspresentaddress"])){
			$error = true;
			$error_parmanentaddress ="Parmanent Address Must be Required";
		}
        else if(!empty($_POST["parmanentaddress"]) && !isset($_POST["sameaspresentaddress"])){
			$parmanentaddress = filter_var($_POST["parmanentaddress"],FILTER_SANITIZE_STRING);
		}

        if(empty($_POST["contactnumber"])){
            $error = true;
            $error_contactnumber = "Contact Number Must be Required";
        }
        else if(!is_numeric($_POST["contactnumber"])){
            $error = true;
            $error_contactnumber = "Contact Number Must be Number";
        }
        else{
            $contactnumber = filter_var($_POST["contactnumber"],FILTER_SANITIZE_STRING);
        }
        if(empty($_POST["qualifications"])){
            $error = true;
            $error_qualifications = "Qualification must be Required";
        }
        else{
            $qualifications = $_POST["qualifications"];
        }
        if(isset($_FILES['image'])){
            $filename = $_FILES['image']['name'];
            $filesize =$_FILES['image']['size'];
            $filetmp =$_FILES['image']['tmp_name'];
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            $arr_ext = array("png","jpg","jpeg");

            if(empty($filename)){
                $error = true;
                $error_img = "Image required";
            }
            else if (!in_array($ext,$arr_ext)) {
                $error = true;
                $error_img = "Please choose only png, jpg or jpeg file";
            }
            else if($filesize > 524288){
                $error = true;
                $error_img = "File size must be excately .5 MB or 512 KB";
            }
            else{
                move_uploaded_file($filetmp,"image/admin/".$filename);
            }   
        }
        if(!$error){
            $birthday = $inputbdday." ".$inputbdmonth." ".$inputbdyear;
            $joiningdate = $inputjday." ".$inputjmonth." ".$inputjyear;
            $leftdate = $inputlday." ".$inputlmonth." ".$inputlyear;
            $qualificationsstring = implode(", ",$qualifications);
            $data = insertadmin($adminid,$name,$salary,$email,$gender,$birthday,$inputnationality,$inputreligion,$inputbloodgroup,$fathername,$mothername,$joiningdate,$leftdate,$qualificationsstring,$presentaddress,$parmanentaddress,$contactnumber,$filename);
            if($data === true){
                $error_massage2 = "Successfully added Admin ID ".$adminid;
                $adminid = "";
                $error_adminid = "";
                $name = "";
                $error_name = "";
                $salary = "";
                $error_salary = "";
                $email = "";
                $error_email = "";
                $gender ="";
                $error_gender = "";
                $inputbdday="";
                $inputbdmonth="";
                $inputbdyear="";
                $error_inputbddaymonthyear="";
                $inputnationality = "";
                $error_nationality = "";
                $inputreligion = "";
                $error_religion = "";
                $inputbloodgroup = "";
                $error_inputbloodgroup = "";
                $fathername = "";
                $error_fathername = "";
                $mothername = "";
                $error_mothername = "";
                $inputjday = "";
                $inputjmonth = "";
                $inputjyear = "";
                $error_inputjdaymonthyear = "";
                $inputlday = "";
                $inputlmonth = "";
                $inputlyear = "";
                $qualifications = array();
                $error_qualifications = "";
                $error_inputldaymonthyear = "";
                $presentaddress = "";
                $error_presentaddress = "";
                $parmanentaddress = "";
                $error_parmanentaddress = "";
                $contactnumber = "";
                $error_contactnumber = ""; 
            }
            else if($data = 1062){
                $error_massage1 = "Admin ID ".$adminid." already exists";
            }
        }
    }

    function insertadmin($adminid,$name,$salary,$email,$gender,$birthday,$inputnationality,$inputreligion,$inputbloodgroup,$fathername,$mothername,$joiningdate,$leftdate,$qualificationsstring,$presentaddress,$parmanentaddress,$contactnumber,$filename){
        $query = "insert into admin values(Null,'$adminid','$name','$salary','$email','$gender','$birthday','$inputnationality','$inputreligion','$inputbloodgroup','$fathername','$mothername','$joiningdate','$leftdate','$qualificationsstring','$presentaddress','$parmanentaddress','$contactnumber','$filename')";
        return execute($query);
    }

    if(isset($_POST["admininsertclear"])){
        header("Location: admin_info_insert_form.php");
    }


    //..............................................................ADMIN_UPDATE...........................................................


    if(isset($_GET["adminidforupdate"])){
        $userid = $_GET["adminidforupdate"];
        $au = authenticateadminidforupdate($userid);
        $adminidforupdate = $au["id"];
    }
    else if(isset($_COOKIE["adminidforupdate"])){
        $adminidforupdate = $_COOKIE["adminidforupdate"];
    }

    if(isset($_POST["enterforadminupdate"])){
        if(empty($_POST["adminid1"])){
			$error = true;
			$error_adminid1 = "Admin ID required.";
		}
		else if(strlen($_POST["adminid1"]) != 7){
			$error = true;
			$error_adminid1 = "Admin Id must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$arr_adminid1 = str_split($_POST["adminid1"]);
            if(strlen($_POST["adminid1"]) == 7){
                if($arr_adminid1[2] == "-"){
                    foreach($arr_adminid1 as $aa){
                        if($aa == "-"){
                            $hypen++;
                        }
                        else if($aa >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_adminid1 = "Admin Id like as (**-1***)";
                }
                if($arr_adminid1[3] != "1"){
                    $error = true;
                    $error_adminid1 = "Admin Id like as (**-1***)";
                }
            }
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_adminid1 = "User Id like as (**-1***)";
			}
			else{
				$adminid2 = filter_var($_POST["adminid1"],FILTER_SANITIZE_STRING);
			}	
		}
        if(!$error){
            if($au = authenticateadminidforupdate($adminid2)){
                setcookie("adminidforupdate",$au["id"],time()+1200,"/");
                header("Location: admin_info_update_form.php");
            }
            else{
                $error_adminid1 = "invalid Admin ID.";
            }

        }
    }

    function authenticateadminidforupdate($uname){
        $query = "select * from admin where userid = '$uname'";
        $data = get($query);
        if(count($data) > 0){
            return $data[0];
        }
        else{
            return false;
        }
    }

    function getadminupdate($adminidforupdate){
        $query =  "select * from admin where id = $adminidforupdate";
        $data = get($query); 
        if(count($data) > 0){
            global $adminid;
            global $name;
            global $salary;
            global $gender;
            global $email;
            global $birthday;
            global $birthdayarray;
            global $inputbdday;
            global $inputbdmonth;
            global $inputbdyear;
            global $inputnationality;
            global $inputreligion;
            global $inputbloodgroup;
            global $fathername;
            global $mothername;
            global $joiningdate;
            global $joiningdatearray;
            global $inputjday;
            global $inputjmonth;
            global $inputjyear;
            global $leftdate;
            global $leftdatearray;
            global $inputlday;
            global $inputlmonth;
            global $inputlyear;
            global $qualificationsarray;
            global $qualifications;
            global $presentaddress;
            global $parmanentaddress;
            global $contactnumber;
            global $image;

            
            $adminid = $data[0]["userid"];
            $name = $data[0]["name"];
            $salary = $data[0]["salary"];
            $gender = $data[0]["gender"];
            $birthday = $data[0]["birthday"];
            $birthdayarray = explode(" ",$birthday);
            $inputbdday = $birthdayarray[0];
            $inputbdmonth = $birthdayarray[1];
            $inputbdyear = $birthdayarray[2];
            $email = $data[0]["email"];
            $inputnationality = $data[0]["nationality"];
            $inputreligion = $data[0]["religion"];
            $inputbloodgroup = $data[0]["bloodgroup"];
            $fathername = $data[0]["fathername"];
            $mothername = $data[0]["mothername"];
            $joiningdate = $data[0]["joiningdate"];
            $joiningdatearray = explode(" ",$joiningdate);
            $inputjday = $joiningdatearray[0];
            $inputjmonth = $joiningdatearray[1];
            $inputjyear = $joiningdatearray[2];
            $leftdate = $data[0]["leftdate"];
            $leftdatearray = explode(" ",$leftdate);
            $inputlday = $leftdatearray[0];
            $inputlmonth = $leftdatearray[1];
            $inputlyear = $leftdatearray[2];
            $qualificationsarray = $data[0]["qualification"];
            $qualifications = explode(" ",$qualificationsarray);
            $presentaddress = $data[0]["presentaddress"];
            $parmanentaddress = $data[0]["parmanentaddress"];
            $contactnumber = $data[0]["contactnumber"];
            $image = $data[0]["img"];
            return $data[0];
        }
        else{
            return false;
        }
    }

    if(isset($_POST["adminupdate"])){
        
        if(!empty($_POST["id"])){
            $id = $_POST["id"];
		}
        if(empty($_POST["adminid"])){
			$error = true;
			$error_adminid = "Admin ID required.";
		}
		else if(strlen($_POST["adminid"]) != 7){
			$error = true;
			$error_adminid = "Admin Id must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$arr_adminid = str_split($_POST["adminid"]);
            if(strlen($_POST["adminid"]) == 7){
                if($arr_adminid[2] == "-"){
                    foreach($arr_adminid as $aa){
                        if($aa == "-"){
                            $hypen++;
                        }
                        else if($aa >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_adminid = "Admin Id like as (**-1***)";
                }
                if($arr_adminid[3] != "1"){
                    $error = true;
                    $error_adminid = "Admin Id like as (**-1***)";
                }
            }
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_adminid = "User Id like as (**-1***)";
			}
			else{
				$adminid = filter_var($_POST["adminid"],FILTER_SANITIZE_STRING);
			}	
		}
        if(empty($_POST["name"])){
            $error = true;
            $error_name = "Must be need Name";
        }
        else if(strlen($_POST["name"]) < 3){
            $error = true;
            $error_name = "Name must be greater then 2 letter";
        }
        else{
            $letter=0;
            $number=0;
            $arr_name = str_split($_POST["name"]);
            foreach($arr_name as $an){
                if($an >= 'A' && $an <= 'Z')
                    $letter++;
                else if($an >= 'a' && $an <= 'z')
                    $letter++;
                else if(is_numeric($an))
                    $number++;
            }
            if($number >= 1){
                $error = true;
                $error_name = "Name must be contain only Letter";
            }
            else{
                $name = filter_var($_POST["name"],FILTER_SANITIZE_STRING);
            }
        }
        if(empty($_POST["salary"])){
            $error = true;
            $error_salary = "Must be need Salary";
        } 
        else if(is_numeric($_POST["salary"]) == false){
            $error = true;
            $error_salary = "Salary must be contain only number";
        }
        else{
            $salary = $_POST["salary"];
        }
        if(empty($_POST["email"])){
			$error = true;
			$error_email = "Must be need email";
		}
        else if(strpos($_POST["email"], "@gmail.com") == false){
            $error = true;
			$error_email = "Email must contain someone@gmail.com";
        }
        else{
            $letter4 = 0;
            $number4 = 0;
            $atsign = 0;
            $fullstop = 0;
            $bug = 0;
            $arr_email = str_split($_POST["email"]);
            foreach($arr_email as $ae){
                if($ae >= "a" && $ae <= "z")
                    $letter4++;
                else if(is_numeric($ae))
                    $number++;
                else if($ae == "@")
                    $atsign++;
                else if($ae == ".")
                    $fullstop++;
                else
                    $bug++;
            }
            if($atsign > 1 || $bug > 0){
                $error = true;
                $error_email = "Sorry, someone only letters (a-z), numbers (0-9), and periods (.) are allowed.";
            }
            else{  
                $email = filter_var($_POST["email"],FILTER_SANITIZE_STRING);
            }
        }
        if(!isset($_POST["gender"])){
			$error = true;
			$error_gender = "Gender Must be Required";
		}
		else{
			$gender = $_POST["gender"];
		}
        if (!isset($_POST["inputbdday"]) || !isset($_POST["inputbdmonth"]) || !isset($_POST["inputbdyear"])){
			$error = true;
			$error_inputbddaymonthyear = "Birth Date Required";
		}
		else{
			$inputbdday = $_POST["inputbdday"];
			$inputbdmonth = $_POST["inputbdmonth"];
			$inputbdyear = $_POST["inputbdyear"];
		}
        if(empty($_POST["inputnationality"])){
            $error = true;
            $error_nationality = "Must be need Nationality";
        }
        else{
            $inputnationality = $_POST["inputnationality"];
        }
        if(empty($_POST["inputreligion"])){
            $error = true;
            $error_religion = "Must be need religion";
        }
        else{
            $inputreligion = $_POST["inputreligion"];
        }
        
        if(!isset($_POST["inputbloodgroup"])){
			$error = true;
			$error_inputbloodgroup="Blood Group Must be Required";
		}
		else{
			$inputbloodgroup = $_POST["inputbloodgroup"];
		}
        if(empty($_POST["fathername"])){
            $error = true;
            $error_fathername = "Must be need Father Name";
        }
        else if(strlen($_POST["fathername"]) < 3){
            $error = true;
            $error_fathername = "Father Name must be greater then 2 letter";
        }
        else{
            $letter5=0;
            $number5=0;
            $arr_fathername = str_split($_POST["fathername"]);
            foreach($arr_fathername as $afn){
                if($afn >= 'A' && $afn <= 'Z')
                    $letter5++;
                else if($afn >= 'a' && $afn <= 'z')
                    $letter5++;
                else if(is_numeric($afn))
                    $number5++;
            }
            if($number5 >= 1){
                $error = true;
                $error_fathername = "Father Name must be contain only Letter";
            }
            else{
                $fathername = filter_var($_POST["fathername"],FILTER_SANITIZE_STRING);
            }
        }
        if(empty($_POST["mothername"])){
            $error = true;
            $error_mothername = "Must be need Mother Name";
        }
        else if(strlen($_POST["mothername"]) < 3){
            $error = true;
            $error_mothername = "Mother Name must be greater then 2 letter";
        }
        else{
            $letter6=0;
            $number6=0;
            $arr_mothername = str_split($_POST["mothername"]);
            foreach($arr_mothername as $amn){
                if($amn >= 'A' && $amn <= 'Z')
                    $letter6++;
                else if($amn >= 'a' && $amn <= 'z')
                    $letter6++;
                else if(is_numeric($amn))
                    $number6++;
            }
            if($number6 >= 1){
                $error = true;
                $error_mothername = "Mother Name must be contain only Letter";
            }
            else{
                $mothername = filter_var($_POST["mothername"],FILTER_SANITIZE_STRING);
            }
        }
        if (!isset($_POST["inputjday"]) || !isset($_POST["inputjmonth"]) || !isset($_POST["inputjyear"])){
			$error = true;
			$error_inputjdaymonthyear="Join Day, Month & Year Required";
		}
		else{
			$inputjday = $_POST["inputjday"];
			$inputjmonth = $_POST["inputjmonth"];
			$inputjyear = $_POST["inputjyear"];
		}
        if (!isset($_POST["inputlday"]) || !isset($_POST["inputlmonth"]) || !isset($_POST["inputlyear"])){
			$error = true;
			$error_inputldaymonthyear="Left Day, Month & Year Required";
		}
		else{
			$inputlday = $_POST["inputlday"];
			$inputlmonth = $_POST["inputlmonth"];
			$inputlyear = $_POST["inputlyear"];
		}
        if(empty($_POST["presentaddress"])){
			$error = true;
			$error_presentaddress ="Present Address Must be Required";
		}
		else{
			$presentaddress = filter_var($_POST["presentaddress"],FILTER_SANITIZE_STRING);
		}
        if(isset($_POST["sameaspresentaddress"])){
            $parmanentaddress = $_POST["presentaddress"];
		}
        if(empty($_POST["parmanentaddress"]) && !isset($_POST["sameaspresentaddress"])){
			$error = true;
			$error_parmanentaddress ="Parmanent Address Must be Required";
		}
        else if(!empty($_POST["parmanentaddress"]) && !isset($_POST["sameaspresentaddress"])){
			$parmanentaddress = filter_var($_POST["parmanentaddress"],FILTER_SANITIZE_STRING);
		}

        if(empty($_POST["contactnumber"])){
            $error = true;
            $error_contactnumber = "Contact Number Must be Required";
        }
        else if(!is_numeric($_POST["contactnumber"])){
            $error = true;
            $error_contactnumber = "Contact Number Must be Number";
        }
        else{
            $contactnumber = filter_var($_POST["contactnumber"],FILTER_SANITIZE_STRING);
        }
        if(empty($_POST["qualifications"])){
            $error = true;
            $error_qualifications = "Qualification must be Required";
        }
        else{
            $qualifications = $_POST["qualifications"];
        }
        if(isset($_FILES['image'])){
            $filename = $_FILES['image']['name'];
            $filesize =$_FILES['image']['size'];
            $filetmp =$_FILES['image']['tmp_name'];
            $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            $arr_ext = array("png","jpg","jpeg");

            if(empty($filename)){
                $filename = $_POST["image1"];
                $image = $filename;
            }
            else if (!in_array($ext,$arr_ext)) {
                $error = true;
                $error_img = "Please choose only png, jpg or jpeg file";
            }
            else if($filesize > 524288){
                $error = true;
                $error_img = 'File size must be excately .5 MB or 512 KB';
            }
            else{
                move_uploaded_file($filetmp,"image/admin/".$filename);
            }   
        }
        if(!$error){
            $birthday1 = $inputbdday." ".$inputbdmonth." ".$inputbdyear;
            $joiningdate1 = $inputjday." ".$inputjmonth." ".$inputjyear;
            $leftdate1 = $inputlday." ".$inputlmonth." ".$inputlyear;
            $qualificationsstring1 = implode(", ",$qualifications);
            $data = updateadmin($adminid,$name,$salary,$gender,$birthday1,$email,$inputnationality,$inputreligion,$inputbloodgroup,$fathername,$mothername,$joiningdate1,$leftdate1,$qualificationsstring1,$presentaddress,$parmanentaddress,$contactnumber,$filename);
            if($data === true){
                $error_massage2 = "Successfully update Admin ID ".$adminid;
                $adminid = "";
                $error_adminid = "";
                $name = "";
                $error_name = "";
                $salary = "";
                $error_salary = "";
                $email = "";
                $error_email = "";
                $gender ="";
                $error_gender = "";
                $inputbdday="";
                $inputbdmonth="";
                $inputbdyear="";
                $error_inputbddaymonthyear="";
                $inputnationality = "";
                $error_nationality = "";
                $inputreligion = "";
                $error_religion = "";
                $inputbloodgroup = "";
                $error_inputbloodgroup = "";
                $fathername = "";
                $error_fathername = "";
                $mothername = "";
                $error_mothername = "";
                $inputjday = "";
                $inputjmonth = "";
                $inputjyear = "";
                $error_inputjdaymonthyear = "";
                $inputlday = "";
                $inputlmonth = "";
                $inputlyear = "";
                $qualifications = array();
                $error_qualifications = "";
                $error_inputldaymonthyear = "";
                $presentaddress = "";
                $error_presentaddress = "";
                $parmanentaddress = "";
                $error_parmanentaddress = "";
                $contactnumber = "";
                $error_contactnumber = "";
                $filename= ""; 
            }
            else if($rs = 1062){
                $error_massage1 = "Admin ID ".$adminid." already exists";
            }
            
        }
    }

    function updateadmin($adminid,$name,$salary,$gender,$birthday1,$email,$inputnationality,$inputreligion,$inputbloodgroup,$fathername,$mothername,$joiningdate1,$leftdate1,$qualificationsstring1,$presentaddress,$parmanentaddress,$contactnumber,$filename){
        global $adminidforupdate;
        $query = "update admin set userid='$adminid', name='$name', salary='$salary', gender='$gender', birthday='$birthday1', email='$email',nationality='$inputnationality', religion='$inputreligion', bloodgroup='$inputbloodgroup', fathername='$fathername', mothername='$mothername', joiningdate='$joiningdate1',leftdate='$leftdate1',qualification='$qualificationsstring1',presentaddress='$presentaddress',parmanentaddress='$parmanentaddress',contactnumber='$contactnumber', img='$filename' where id= $adminidforupdate";
        return execute($query);
    }

    if(isset($_POST["backforupdate"])){
        header("Location: admin_info_update_entry_form.php");
    }


    //..............................................................ADMIN_DELETE...........................................................


    if(isset($_GET["adminidfordelete"])){
        $userid = $_GET["adminidfordelete"];
        $ad = authenticateadminidfordelete($userid);
    }
    else if(isset($_COOKIE["adminidfordelete"])){
        $adminidfordelete = $_COOKIE["adminidfordelete"];
    }

    if(!empty($ad)){
        $adminidfordelete = $ad["id"];
    }
    
    if(isset($_POST["enterforadmindelete"])){
        if(empty($_POST["adminid1"])){
			$error = true;
			$error_adminid1 = "Admin ID required.";
		}
		else if(strlen($_POST["adminid1"]) != 7){
			$error = true;
			$error_adminid1 = "Admin Id must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$arr_adminid1 = str_split($_POST["adminid1"]);
            if(strlen($_POST["adminid1"]) == 7){
                if($arr_adminid1[2] == "-"){
                    foreach($arr_adminid1 as $aa){
                        if($aa == "-"){
                            $hypen++;
                        }
                        else if($aa >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_adminid1 = "Admin Id like as (**-1***)";
                }
                if($arr_adminid1[3] != "1"){
                    $error = true;
                    $error_adminid1 = "Admin Id like as (**-1***)";
                }
            }
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_adminid1 = "User Id like as (**-1***)";
			}
			else{
				$adminid2 = filter_var($_POST["adminid1"],FILTER_SANITIZE_STRING);
			}	
		}
        if(!$error){
            if($au = authenticateadminidfordelete($adminid2)){
                setcookie("adminidfordelete",$au["id"],time()+1200,"/");
                header("Location: admin_info_delete_form.php");
            }
            else{
                $error_adminid1 = "invalid Admin ID.";
            }

        }
    }

    function authenticateadminidfordelete($userid){
        $query = "select * from admin where userid = '$userid'";
        $data = get($query);
        if(count($data) > 0){
            return $data[0];
        }
        else{
            return false;
        }
    }

    function getadminfordelete($adminidfordelete){
        $query =  "select * from admin where id = '$adminidfordelete'";
        $data = get($query);
        if(count($data) > 0){
            global $adminid;
            global $name;
            global $salary;
            global $gender;
            global $email;
            global $birthday;
            global $birthdayarray;
            global $inputbdday;
            global $inputbdmonth;
            global $inputbdyear;
            global $inputnationality;
            global $inputreligion;
            global $inputbloodgroup;
            global $fathername;
            global $mothername;
            global $joiningdate;
            global $joiningdatearray;
            global $inputjday;
            global $inputjmonth;
            global $inputjyear;
            global $leftdate;
            global $leftdatearray;
            global $inputlday;
            global $inputlmonth;
            global $inputlyear;
            global $qualificationsarray;
            global $qualifications;
            global $presentaddress;
            global $parmanentaddress;
            global $contactnumber;
            global $image;

            
            $adminid = $data[0]["userid"];
            $name = $data[0]["name"];
            $salary = $data[0]["salary"];
            $gender = $data[0]["gender"];
            $birthday = $data[0]["birthday"];
            $birthdayarray = explode(" ",$birthday);
            $inputbdday = $birthdayarray[0];
            $inputbdmonth = $birthdayarray[1];
            $inputbdyear = $birthdayarray[2];
            $email = $data[0]["email"];
            $inputnationality = $data[0]["nationality"];
            $inputreligion = $data[0]["religion"];
            $inputbloodgroup = $data[0]["bloodgroup"];
            $fathername = $data[0]["fathername"];
            $mothername = $data[0]["mothername"];
            $joiningdate = $data[0]["joiningdate"];
            $joiningdatearray = explode(" ",$joiningdate);
            $inputjday = $joiningdatearray[0];
            $inputjmonth = $joiningdatearray[1];
            $inputjyear = $joiningdatearray[2];
            $leftdate = $data[0]["leftdate"];
            $leftdatearray = explode(" ",$leftdate);
            $inputlday = $leftdatearray[0];
            $inputlmonth = $leftdatearray[1];
            $inputlyear = $leftdatearray[2];
            $qualificationsarray = $data[0]["qualification"];
            $qualifications = explode(" ",$qualificationsarray);
            $presentaddress = $data[0]["presentaddress"];
            $parmanentaddress = $data[0]["parmanentaddress"];
            $contactnumber = $data[0]["contactnumber"];
            $image = $data[0]["img"];
            return $data[0];
        }
        else{
            return false;
        }
    }

    if(isset($_POST["deleteadmin"])){
        $data = deleteadmin($adminidfordelete);
        if($data === true){
            setcookie("successfullydeleteadmin","true",time()+1,"/");
            header("Location: admin_info_delete_entry_form.php"); 
        }
        else{
            $successfullydeleteadmin = $data;
        }
    }

    function deleteadmin($adminidfordelete){
        $query = "delete from admin where id= $adminidfordelete";
        return execute($query);
    }

    
    $successfullydeleteadmin = "";
    if(!isset($_COOKIE["successfullydeleteadmin"])){
        $successfullydeleteadmin = "";
    }
    else{
            $successfullydeleteadmin = "Successfully Delete";
    }

    if(isset($_POST["backfordelete"])){
        header("Location: admin_info_delete_entry_form.php");
    }


    //................................................................ADMIN_SEARCH.....................................


    function admin_search($userid){
        $query = "select userid from admin where userid like '%$userid%'";
        $data = get($query);
        return $data;
    }

    if(isset($_GET["adminidforsearch"])){
        $userid = $_GET["adminidforsearch"];
        $as = authenticateadminidforupdate($userid);
        $adminidforsearch = $as["id"];
    }
    else if(isset($_COOKIE["adminidforsearch"])){
        $adminidforsearch = $_COOKIE["adminidforsearch"];
    }
    
    
    if(isset($_POST["adminsearch"])){
        if(empty($_POST["adminid1"])){
            $error = true;
            $error_adminid3 = "Admin ID Required.";
        }
        else if(strlen($_POST["adminid1"]) != 7){
            $error = true;
            $error_adminid3 = "Invalid Admin ID";
        }
        else{
            $hypen = 0;
            $number = 0;
            $bug =0;
            $arr_adminid = str_split($_POST["adminid1"]);
            if(strlen($_POST["adminid1"]) == 7){
                if($arr_adminid[2] == "-"){
                    foreach($arr_adminid as $aa){
                        if($aa == "-"){
                            $hypen++;
                        }
                        else if($aa >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_adminid3 = "Invalid Admin ID";
                }
                if($arr_adminid[3] != "1"){
                    $error = true;
                    $error_adminid3 = "Invalid Admin ID";
                }
            }
            if($hypen > 1 || $bug > 0){
                $error = true;
                $error_adminid3 = "Invalid Admin ID";
            }
            else{
                $adminid3 = $_POST["adminid1"];
            }	
        }
        if(!$error){
            if($au = authenticateadminidforsearch($adminid3)){
                setcookie("adminidforsearch",$au["id"],time()+1200,"/");
                header("Location: home_admin_search_personal_info.php");
            }
            else{
                $error_adminid3 = "Not Match.";
            }
        }
    }
    
    function authenticateadminidforsearch($uname){
        $query = "select * from admin where userid = '$uname'";
        $data = get($query);
        if(count($data) > 0){
            return $data[0];
        }
        else{
            return false;
        }
    }
    
    function getadminidforsearch($adminidforsearch){
        $query = "select * from admin where id = '$adminidforsearch'";
        $data = get($query);
        if(count($data) > 0){
            return $data[0];
        }
        else{
            return false;
        }
    }
        

    //.....................................................................................................................................


    $studentid = "";
    $error_studentid = "";
    $teacherid = "";
    $error_teacherid = "";

    $error = false;

    if(isset($_POST["studentsearch"])){
        if(empty($_POST["studentid"])){
            $error = true;
            $error_studentid = "Student ID Required";
        }
        else{
            $arr_studentid = str_split($_POST["studentid"]);
            //courseid like C4001,c4,C40009,c400000002
            if($arr_studentid[0] == 'S' || $arr_studentid[0] == 's'){
                $counter1 = 0;
                $counter2 = 0;
                foreach($arr_studentid as $as){
                    if($as >= 'A' && $as <= 'Z'){
                        $counter1++;
                    }
                    else if($as >= 'a' && $as <= 'z'){
                        $counter1++;
                    }
                    else if(is_numeric($as)){
                        $counter2++;
                    }
                }
                if($counter1 > 1 || $counter2 < 1){
                    $error = true;
                    $error_studentid = "Invalid Student ID";
                }
                else{
                    $studentid = $_POST["studentid"];
                }
            }
            else{
                $error = true;
                $error_studentid = "Invalid Student ID";
            }
        }
    }
    if(isset($_POST["teachersearch"])){
        if(empty($_POST["teacherid"])){
            $error = true;
            $error_teacherid = "Teacher ID Required";
        }
        else{
            $arr_teacherid = str_split($_POST["teacherid"]);
            //courseid like C4001,c4,C40009,c400000002
            if($arr_teacherid[0] == 'T' || $arr_teacherid[0] == 't'){
                $counter3 = 0;
                $counter4 = 0;
                foreach($arr_teacherid as $at){
                    if($at >= 'A' && $at <= 'Z'){
                        $counter3++;
                    }
                    else if($at >= 'a' && $at <= 'z'){
                        $counter3++;
                    }
                    else if(is_numeric($at)){
                        $counter4++;
                    }
                }
                if($counter3 > 1 || $counter4 < 1){
                    $error = true;
                    $error_teacherid = "Invalid Teacher ID";
                }
                else{
                    $teacherid = $_POST["teacherid"];
                }
            }
            else{
                $error = true;
                $error_teacherid = "Invalid Teacher ID";
            }
        }
    }


    //.........................................................SEMESTER_INSERT/UPDATE/DELETE..............................................


    $semester = "";
    $error_semester = "";
    $semester_year = "";
    $error_semester_year = "";
    $semester_status = "";
    $error_semester_status = "";
    $year_semester = "";

    $arr_semester = array("Spring","Summer","Fall");
    $arr_semester_status = array("Closed","Running","Upcoming");

    if(isset($_POST["semesterinsert"])){
        if(empty($_POST["semester_year"])){
            $error = true;
            $error_semester_year = "Must Be Need Year";
        }
        else{
            $semester_year = $_POST["semester_year"];
        }
        if(empty($_POST["semester"])){
            $error = true;
            $error_semester = "Must Be Need Semester";
        }
        else{
            $semester = $_POST["semester"];
        }
        if(empty($_POST["semester_status"])){
            $error = true;
            $error_semester_status = "Must Be Need Semester Status";
        }
        else{
            $semester_status = $_POST["semester_status"];
        }
        if(!$error){
            $year_semester = $semester_year.", ".$semester;
            $data = insertsemester($year_semester, $semester_status);
            if($data === true){
                $error_massage2 = "Successfully Insert Semester ".$year_semester;
                $semester = "";
                $semester_year = "";
                $semester_status = "";
            }
            else{
                $error_massage1 = "Semester ".$year_semester." Already Exists.";
            }

        }
    }
    function insertsemester($year_semester, $semester_status){
        $query = "insert into semester values(Null,'$year_semester','$semester_status')";
        return execute($query);
    }

    if(isset($_POST["enterforsemesterupdate"])){
        if(empty($_POST["semester_year"])){
            $error = true;
            $error_semester_year = "Must Be Need Year";
        }
        else{
            $semester_year = $_POST["semester_year"];
        }
        if(empty($_POST["semester"])){
            $error = true;
            $error_semester = "Must Be Need Semester";
        }
        else{
            $semester = $_POST["semester"];
        }
        if(!$error){
            $year_semester = $semester_year.", ".$semester;
            if($data = authenticatesemester($year_semester)){
                $_SESSION["dataforupdatesemester"] = $year_semester;
                header("Location: semester_update.php");
            }
            else{
                $error_massage1 = "Not Match.";
            }
        }
    }

    function authenticatesemester($year_semester){
        $query = "select * from semester where year_semester = '$year_semester'";
        $data = get($query);
        return $data;
    }
    if(isset($_SESSION["dataforupdatesemester"])){
        $dataforupdatesemester =$_SESSION["dataforupdatesemester"];
    }

    function dataforupdatesemester($dataforupdatesemester){
        global $semester_year;
        global $semester;
        global $semester_status;

        $query = "select * from semester where year_semester = '$dataforupdatesemester'";
        $data = get($query);

        $semester_year = substr($data[0]["year_semester"],0,4);
        $semester = substr($data[0]["year_semester"],6);
        $semester_status = $data[0]["semester_status"];

    }

    if(isset($_POST["semesterupdate"])){
        $semester_status = $_POST["semester_status"];
        $data = updatesemester($dataforupdatesemester);
        if($data === true){
            $error_massage2 = "Successfully updated Semester ".$dataforupdatesemester.".";
        }
    }

    function updatesemester($dataforupdatesemester){
        global $semester_status;
        $query = "update semester set semester_status = '$semester_status' where year_semester = '$dataforupdatesemester'";
        return execute($query);
    }

    if(isset($_POST["enterforsemesterdelete"])){
        if(empty($_POST["semester_year"])){
            $error = true;
            $error_semester_year = "Must Be Need Year";
        }
        else{
            $semester_year = $_POST["semester_year"];
        }
        if(empty($_POST["semester"])){
            $error = true;
            $error_semester = "Must Be Need Semester";
        }
        else{
            $semester = $_POST["semester"];
        }
        if(!$error){
            $year_semester = $semester_year.", ".$semester;
            if($data = authenticatesemester($year_semester)){
                $_SESSION["datafordeletesemester"] = $year_semester;
                header("Location: semester_delete.php");
            }
            else{
                $error_massage1 = "Not Match.";
            }
        }
    }

    if(isset($_SESSION["datafordeletesemester"])){
        $datafordeletesemester =$_SESSION["datafordeletesemester"];
    }

    function datafordeletesemester($datafordeletesemester){
        global $semester_year;
        global $semester;
        global $semester_status;

        $query = "select * from semester where year_semester = '$datafordeletesemester'";
        $data = get($query);

        $semester_year = substr($data[0]["year_semester"],0,4);
        $semester = substr($data[0]["year_semester"],6);
        $semester_status = $data[0]["semester_status"];
    }

    if(isset($_POST["semesterdelete"])){
        $data = deletesemester($datafordeletesemester);
        if($data === true){
            header("Location: semester_delete_entry.php");
            setcookie("datafordeletesemester","true",time()+1,"/");
        }
    }

    if(isset($_COOKIE["datafordeletesemester"])){
        $error_massage2 = "Successfully Delete Semester ".$datafordeletesemester.".";
    }

    function deletesemester($datafordeletesemester){
        $query = "delete from semester where year_semester = '$datafordeletesemester'";
        return execute($query);
    }

    //......................................................COURSE_INSERT/UPDATE/DELETE....................................................

    $courseid = "";
    $error_courseid = "";
    $coursename = "";
    $error_coursename = "";
    $schedule = "";
    $error_schedule = "";
    $capacity = "";
    $error_capacity = "";
    $class = "";
    $error_class = "";
    $section = "";
    $error_section = "";
    $course_status = "";
    $error_course_status = "";
    $teacherid = "";
    $error_teacherid = "";
    $semester_course_code = "";

    $error = false;

    $arr_schedule = array("Sun 08.00AM - 11.00AM","Sun 11.00AM - 02.00PM","Sun 02.00PM - 05.00PM","Mon 08.00AM - 11.00AM","Mon 11.00AM - 02.00PM","Mon 02.00PM - 05.00PM","Tue 08.00AM - 11.00AM","Tue 11.00AM - 02.00PM","Tue 02.00PM - 05.00PM","Wed 08.00AM - 11.00AM","Wed 11.00AM - 02.00PM","Wed 02.00PM - 05.00PM");
    $arr_course_status = array("For Registration","Ongoing","Completed");

    if(isset($_POST["courseinsert"])){
        if(empty($_POST["courseid"])){
			$error = true;
            $error_courseid = "Must Need Course ID";
		}
		else if(strlen($_POST["courseid"]) != 7){
			$error = true;
			$error_courseid = "Course ID must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$arr_courseid = str_split($_POST["courseid"]);
            if(strlen($_POST["courseid"]) == 7){
                if($arr_courseid[2] == "-"){
                    foreach($arr_courseid as $aa){
                        if($aa == "-"){
                            $hypen++;
                        }
                        else if($aa >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_courseid = "Course Id like as (**-4***)";
                }
                if($arr_courseid[3] != "4"){
                    $error = true;
                    $error_courseid = "Course Id like as (**-4***)";
                }
            }
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_courseid = "Course Id like as (**-4***)";
			}
			else{
				$courseid = filter_var($_POST["courseid"],FILTER_SANITIZE_STRING);
			}	
		}
        if(empty($_POST["coursename"])){
            $error = true;
            $error_coursename = "Must be need Course Name";
        }
        else if(strlen($_POST["coursename"]) < 2){
            $error = true;
            $error_coursename = "Course name must be greater then 1 letter";
        }
        else{
            $letter=0;
            $number=0;
            $arr = str_split($_POST["coursename"]);
            foreach($arr as $a){
                if($a >= 'A' && $a <= 'Z')
                    $letter++;
                else if($a >= 'a' && $a <= 'z')
                    $letter++;
                else if($a >= 0)
                    $number++;
            }
            if($number >= 1){
                $error_coursename = "Course name must be contain only Letter";
            }
            else{
                $coursename = filter_var($_POST["coursename"],FILTER_SANITIZE_STRING);
            }
        } 
        if(!$error){
            $data = courseinsert($courseid,$coursename);
            if($data === true){
                $error_massage2 = "Successfully added Course ID ".$courseid;
                $courseid = "";
                $coursename = "";
            }
            else if($data = 1062){
                $error_massage1 = "Course ID ".$courseid." already exists";
            }
        }
    }

    function courseinsert($courseid,$coursename){
        $query = "insert into course values(Null,'$courseid','$coursename')";
        return execute($query);
    }

    if(isset($_POST["courseinsertclear"])){
        header("Location: course_insert_form.php");
    }

    if(isset($_POST["enterforcourseupdate"])){
        if(empty($_POST["courseid"])){
			$error = true;
            $error_courseid = "Must Need Course ID";
		}
		else if(strlen($_POST["courseid"]) != 7){
			$error = true;
			$error_courseid = "Course ID must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$arr_courseid = str_split($_POST["courseid"]);
            if(strlen($_POST["courseid"]) == 7){
                if($arr_courseid[2] == "-"){
                    foreach($arr_courseid as $aa){
                        if($aa == "-"){
                            $hypen++;
                        }
                        else if($aa >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_courseid = "Course Id like as (**-4***)";
                }
                if($arr_courseid[3] != "4"){
                    $error = true;
                    $error_courseid = "Course Id like as (**-4***)";
                }
            }
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_courseid = "Course Id like as (**-4***)";
			}
			else{
				$courseid = filter_var($_POST["courseid"],FILTER_SANITIZE_STRING);
			}	
		}
        if(!$error){
            if($cu = authenticateforcourseidforUD($courseid)){
                setcookie("courseidforUD",$cu["c_id"],time()+1200,"/");
                header("Location: course_update_form.php");
            }
            else{
                $error_courseid = "invalid Course ID.";
            }

        }
    }

    function authenticateforcourseidforUD($courseid){
        $query = "select * from course where courseid = '$courseid'";
        $data = get($query);
        if(count($data) > 0){
            return $data[0];
        }
        else{
            return false;
        }
    }

    if(!isset($_COOKIE["courseidforUD"])){
        $courseidforUD = "";
    }
    else{
        $courseidforUD = $_COOKIE["courseidforUD"];
    }

    function getcourseupdate($courseidforUD){
        $query =  "select * from course where c_id = $courseidforUD";
        $data = get($query); 
        if(count($data) > 0){
            global $courseid;
            global $coursename;

            $courseid = $data[0]["courseid"];
            $coursename = $data[0]["coursename"];
            return $data[0];
        }
        else{
            return false;
        }
    }

    if(isset($_POST["courseupdate"])){
        if(empty($_POST["courseid"])){
			$error = true;
            $error_courseid = "Must Need Course ID";
		}
		else if(strlen($_POST["courseid"]) != 7){
			$error = true;
			$error_courseid = "Course ID must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$arr_courseid = str_split($_POST["courseid"]);
            if(strlen($_POST["courseid"]) == 7){
                if($arr_courseid[2] == "-"){
                    foreach($arr_courseid as $aa){
                        if($aa == "-"){
                            $hypen++;
                        }
                        else if($aa >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_courseid = "Course Id like as (**-4***)";
                }
                if($arr_courseid[3] != "4"){
                    $error = true;
                    $error_courseid = "Course Id like as (**-4***)";
                }
            }
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_courseid = "Course Id like as (**-4***)";
			}
			else{
				$courseid = filter_var($_POST["courseid"],FILTER_SANITIZE_STRING);
			}	
		}
        if(empty($_POST["coursename"])){
            $error = true;
            $error_coursename = "Must be need Course Name";
        }
        else if(strlen($_POST["coursename"]) < 2){
            $error = true;
            $error_coursename = "Course name must be greater then 1 letter";
        }
        else{
            $letter=0;
            $number=0;
            $arr = str_split($_POST["coursename"]);
            foreach($arr as $a){
                if($a >= 'A' && $a <= 'Z')
                    $letter++;
                else if($a >= 'a' && $a <= 'z')
                    $letter++;
                else if($a >= 0)
                    $number++;
            }
            if($number >= 1){
                $error = true;
                $error_coursename = "Course name must be contain only Letter";
            }
            else{
                $coursename = filter_var($_POST["coursename"],FILTER_SANITIZE_STRING);
            }
        } 
        if(!$error){
            $data = courseupdate($courseid,$coursename);
            if($data === true){
                $error_massage2 = "Successfully updated Course ID ".$courseid;
                $courseid = "";
                $coursename = "";
            }
            else if($data = 1062){
                $error_massage1 = "Course ID ".$courseid." already exists";
            }
        }
    }

    function courseupdate($courseid,$coursename){
        global $courseidforUD;
        $query = "update course set courseid='$courseid', coursename='$coursename' where c_id= $courseidforUD";
        return execute($query);
    }

    if(isset($_POST["backcourseupdate"])){
        header("Location: course_update_entry_form.php");
    }

    if(isset($_POST["enterforcoursedelete"])){
        if(empty($_POST["courseid"])){
			$error = true;
            $error_courseid = "Must Need Course ID";
		}
		else if(strlen($_POST["courseid"]) != 7){
			$error = true;
			$error_courseid = "Course ID must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$arr_courseid = str_split($_POST["courseid"]);
            if(strlen($_POST["courseid"]) == 7){
                if($arr_courseid[2] == "-"){
                    foreach($arr_courseid as $aa){
                        if($aa == "-"){
                            $hypen++;
                        }
                        else if($aa >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_courseid = "Course Id like as (**-4***)";
                }
                if($arr_courseid[3] != "4"){
                    $error = true;
                    $error_courseid = "Course Id like as (**-4***)";
                }
            }
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_courseid = "Course Id like as (**-4***)";
			}
			else{
				$courseid = filter_var($_POST["courseid"],FILTER_SANITIZE_STRING);
			}	
		}
        if(!$error){
            if($cu = authenticateforcourseidforUD($courseid)){
                setcookie("courseidforUD",$cu["c_id"],time()+1200,"/");
                header("Location: course_delete_form.php");
            }
            else{
                $error_courseid = "invalid Course ID.";
            }

        }
    }

    if(isset($_POST["coursedelete"])){
        $data = coursedelete();
        if($data === true){
            setcookie("successfullycoursedelete","true",time()+1,"/");
            header("Location: course_delete_entry_form.php"); 
        }
    }

    function coursedelete(){
        global $courseidforUD;
        $query = "delete from course where c_id= $courseidforUD";
        return execute($query);
    }

    $successfullycoursedelete = "";
    if(!isset($_COOKIE["successfullycoursedelete"])){
        $successfullycoursedelete = "";
    }
    else{
        $successfullycoursedelete = "Successfully Delete.";
    }

    if(isset($_POST["backcoursedelete"])){
        header("Location: course_delete_entry_form.php");
    }

    if(isset($_POST["courseopen"])){
        if(empty($_POST["courseid"])){
			$error = true;
            $error_courseid = "Must Be Need Course ID";
		}
        else{
            $courseid = $_POST["courseid"];
        }	
        if(empty($_POST["class"])){
            $error = true;
            $error_class = "Must Be need Class";
        }
        else{
            $class = $_POST["class"];
        }
        if(empty($_POST["section"])){
            $error = true;
            $error_section = "Must Be need Section";
        }
        else{
            $section = $_POST["section"];
        }
        if(empty($_POST["schedule"])){
            $error = true;
            $error_schedule = "Must Be Need Schedule";
        }
        else{
            $schedule = $_POST["schedule"];
        }
        if(empty($_POST["capacity"])){
            $error = true;
            $error_capacity = "Must Be Need Capacity";
        }
        else{
            $capacity = $_POST["capacity"];
        }
        if(empty($_POST["course_status"])){
            $error = true;
            $error_course_status = "Must Be Need Course Status";
        }
        else{
            $course_status = $_POST["course_status"];
        }
        if(empty($_POST["semester"])){
            $error = true;
            $error_semester = "Must Be Need Semester";
        }
        else{
            $semester = $_POST["semester"];
        }
        if(!empty($_POST["teacherid"])){
            $teacherid = $_POST["teacherid"];
        }
        if(!$error){
            $data = opencourse(substr("$courseid",0,7),$class,$section,$schedule,$capacity,$semester,substr("$teacherid",0,7),$course_status);
            if($data === true){
                $error_massage2 = "Successfully Open Course ID ".substr("$courseid",0,7);
                $courseid = "";
                $error_courseid = "";
                $semester = "";
                $error_semester = "";
                $schedule = "";
                $error_schedule = "";
                $capacity = "";
                $error_capacity = "";
                $class = "";
                $error_class = "";
                $section = "";
                $error_section = "";
                $teacherid = "";
                $course_status = "";
                $error_course_status= "";
            }
            else{
                $error_massage1 = "Course ID ".$courseid." already exists in class ".$class." section ".$section;
            }

        }
    }
    function opencourse($courseid,$class,$section,$schedule,$capacity,$semester,$teacherid,$course_status){
        $query = "select * from course_semester where courseid = '$courseid' and classdecrip = '$class' and section = '$section' and semester = '$semester'";
        $data = get($query);
        if(count($data) > 0){
            return false;
        }
        else{
            $query = "insert into course_semester values(Null,'$courseid','$class','$section','$schedule','$capacity','$semester','$teacherid','$course_status')";
            return execute($query);
        }
    }

    function allcourseid(){
        $query = "select * from course order by courseid asc";
        $data = get($query);
        if(count($data) > 0){
            $c = $data;
            $ca = array();
            foreach ($c as $n => $n_value) {
                $ca[] = $n_value["courseid"].", ".$n_value["coursename"];
            }
            return $ca;
        }
        else{
            return false;
        }
    }

    function allteacherid(){
        $query = "select * from teacher order by userid asc";
        $data = get($query);
        if(count($data) > 0){
            $t = $data;
            $ta = array();
            foreach ($t as $n => $n_value) {
                $ta[] = $n_value["userid"].", ".$n_value["name"];
            }
            return $ta;
        }
        else{
            return false;
        }
    }

    function semesteryear(){
        $query = "select year_semester from semester order by year_semester desc";
        $data = get($query);
        if(count($data) > 0){
            $s = $data;
            $sy = array();
            foreach ($s as $n => $n_value) {
                $sy[] = $n_value["year_semester"];
            }
            return $sy;
        }
        else{
            return false;
        }
    }

    if(isset($_POST["courseopenclear"])){
        header("Location: course_open_form.php");
    }

    function allsemestercourseid(){
        $query = "select * from course_semester order by cs_id desc";
        $data = get($query);
        if(count($data) > 0){
            $c = $data;
            $ca = array();
            foreach ($c as $n => $n_value) {
                $ca[] = $n_value["cs_id"].", ".$n_value["courseid"];
            }
            return $ca;
        }
        else{
            return false;
        }
    }

    if(isset($_POST["enterforcourseopenupdate"])){
        if(empty($_POST["courseid"])){
			$error = true;
            $error_courseid = "Must Need Course ID";
		}
		else{
			$courseid = $_POST["courseid"];
		}	
        if(!$error){
            if($co = authenticateforcourseidforopenUD(substr($courseid,0,-9))){
                setcookie("courseidopenforUD",$co["cs_id"],time()+1200,"/");
                header("Location: course_open_update_form.php");
            }
            else{
                $error_courseid = "invalid Course ID.";
            }

        }
    }

    function authenticateforcourseidforopenUD($courseid){
        $query = "select * from course_semester where cs_id = '$courseid'";
        $data = get($query);
        if(count($data) > 0){
            return $data[0];
        }
        else{
            return false;
        }
    }
    $courseidopenforUD = "";
    if(!isset($_COOKIE["courseidopenforUD"])){
        $courseidopenforUD = "";
    }
    else{
        $courseidopenforUD = $_COOKIE["courseidopenforUD"];
    }


    $teacherid1 = "";
    function getcourseopenupdate($courseidforopenUD){
        $query =  "select * from course_semester inner join course on course_semester.courseid = course.courseid where course_semester.cs_id = $courseidforopenUD";
        $data = get($query); 
        if(count($data) > 0){
            global $courseid;
            global $coursename;
            global $class;
            global $section;
            global $schedule;
            global $capacity;
            global $semester;
            global $teacherid;
            global $teacherid1;
            global $course_status;
            global $semester_course_code;

            $courseid = $data[0]["courseid"].", ".$data[0]["coursename"];
            $section = $data[0]["section"];
            $class = $data[0]["classdecrip"];
            $schedule = $data[0]["schedule"];
            $capacity = $data[0]["capacity"];
            $semester = $data[0]["semester"];
            $teacherid1 = $data[0]["teacherid"];
            $course_status = $data[0]["course_status"];
            $semester_course_code = $data[0]["cs_id"];

            if(!empty($teacherid1)){
                $query = "select * from teacher where userid= '$teacherid1'";
                $data1 = get($query);
                $teacherid = $data[0]["teacherid"].", ".$data1[0]["name"];
            }
        }
        else{
            return false;
        }
    }
    
    if(isset($_POST["courseopenupdate"])){
        $schedule = $_POST["schedule"];
        $capacity = $_POST["capacity"];
        $semester = $_POST["semester"];
        $course_status = $_POST["course_status"];
        if(!empty($_POST["teacherid"])){
            $teacherid = $_POST["teacherid"];
            $data = courseopenupdate($schedule,$capacity,$course_status,$semester,substr("$teacherid",0,7));
        }
        else{
            $data = courseopenupdate1($schedule,$capacity,$course_status,$semester);
        }
        if($data === true){
            $error_massage2 = "Successfully updated Course Details.";
        }
    }

    function courseopenupdate($schedule,$capacity,$course_status,$semester,$teacherid){
        global $courseidopenforUD;
        $query = "update course_semester set schedule='$schedule', capacity='$capacity', semester='$semester', teacherid='$teacherid' where cs_id = $courseidopenforUD";
        return execute($query);
    }

    function courseopenupdate1($schedule,$capacity,$course_status,$semester){
        global $courseidopenforUD;
        $query = "update course_semester set schedule='$schedule', capacity='$capacity', course_status='$course_status', semester='$semester' cs_where id = $courseidopenforUD";
        return execute($query);
    }

    if(isset($_POST["courseopenupdateback"])){
        header("Location: course_open_update_entry_form.php");
    }

    if(isset($_POST["enterforcoursecencle"])){
        if(empty($_POST["courseid"])){
			$error = true;
            $error_courseid = "Must Need Course ID";
		}
		else{
			$courseid = $_POST["courseid"];
		}	
        if(!$error){
            if($co = authenticateforcourseidforopenUD($courseid)){
                setcookie("courseidopenforUD",$co["cs_id"],time()+1200,"/");
                header("Location: course_cencle_form.php");
            }
            else{
                $error_courseid = "invalid Course ID.";
            }

        }
    }

    if(isset($_POST["coursecencle"])){
        $data = coursecencle();
        if($data === true){
            setcookie("successfullycoursecencle","true",time()+1,"/");
            header("Location: course_cencle_entry_form.php"); 
        }
    }

    function coursecencle(){
        global $courseidopenforUD;
        $query = "delete from course_semester where cs_id= $courseidopenforUD";
        return execute($query);
    }

    if(isset($_POST["coursecencleback"])){
        header("Location: course_cencle_entry_form.php");
    }

    if(isset($_POST["allcourse"])){
        header("Location: allcourse.php");
    }

    if(isset($_POST["enterforcoursedetails"])){
        if(empty($_POST["courseid"])){
			$error = true;
            $error_courseid = "Must Need Course ID";
		}
		else if(strlen($_POST["courseid"]) != 7){
			$error = true;
			$error_courseid = "Course ID must be 7 character.";
		}
		else{
			$hypen = 0;
			$number = 0;
			$bug =0;
			$arr_courseid = str_split($_POST["courseid"]);
            if(strlen($_POST["courseid"]) == 7){
                if($arr_courseid[2] == "-"){
                    foreach($arr_courseid as $aa){
                        if($aa == "-"){
                            $hypen++;
                        }
                        else if($aa >= 0){
                            $number++;
                        }
                        else{
                            $bug++;
                        }
                    }
                }
                else{
                    $error = true;
                    $error_courseid = "Course Id like as (**-4***)";
                }
                if($arr_courseid[3] != "4"){
                    $error = true;
                    $error_courseid = "Course Id like as (**-4***)";
                }
            }
			if($hypen > 1 || $bug > 0){
				$error = true;
				$error_courseid = "Course Id like as (**-4***)";
			}
			else{
				$courseid = $_POST["courseid"];
			}	
		}
        if(!$error){
            if($cu = authenticateforcourseidforUD($courseid)){
                setcookie("courseidforUD",$cu["c_id"],time()+1200,"/");
                header("Location: course_details1_form.php");
            }
            else{
                $error_courseid = "invalid Course ID.";
            }

        }
    }

    if(isset($_POST["coursereport"])){
        header("Location: coursereport.php");
    }

    if(isset($_POST["enterforcoursereport"])){
        if(empty($_POST["courseid"])){
			$error = true;
            $error_courseid = "Must Need Course ID";
		}
		else{
			$courseid = $_POST["courseid"];
		}	
        if(!$error){
            if($co = authenticateforcourseidforopenUD($courseid)){
                setcookie("courseidopenforUD",$co["cs_id"],time()+1200,"/");
                header("Location: coursereport1.php");
            }
            else{
                $error_courseid = "invalid Course ID.";
            }

        }
    }

    function allstudentbysemestercourse($courseidopenforUD){
        $query = "select * from studentenrollment where course_semester_id = $courseidopenforUD";
        $data = get($query); 
        if(count($data) > 0){
            $c = $data;
            $ca = array();
            foreach ($c as $n => $n_value) {
                $na = $n_value["studentid"];
                $query = "select * from student where userid = '$na'";
                $data1 = get($query);
                if(count($data1) > 0){
                    $ca[] = $n_value["studentid"].", ".$data1[0]["name"].", ".$n_value["result"];
                }
            }
            return $ca;
        }
        else{
            return false;
        }
    }
    if(isset($_POST["coursecencleback"])){
        header("Location: coursereport.php");    
    }

    //..................................................................Log_Out.........................................................


    if(isset($_POST["logout"])){
        setcookie("__RequestVerificationToken","",time()-1,"/");
        session_unset();
        session_destroy();
        header("Location: ../portal.php");
    }

    //...........................................................18-37646-1(admin_controller).........................................................................


    include '18-37646-1_admin_controller.php';


    //...........................................................17-35574-3(admin_controller).........................................................................


    include '17-35574-3_adminController.php';


    //...........................................................16-31722-1(admin_controller).....................................................................................................
    

    include '16-31722-1_admin_controller.php';
    

    //................................................................................................................................................
?>