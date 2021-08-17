<?php

    include '../model/db_config.php';


    //..............................................................PERSONAL_INFO.........................................................
 

    session_start();

    if(!isset($_COOKIE["__RequestVerificationToken"])){
        header("Location: ../portal.php");
    }
    else{
        $__RequestVerificationToken = $_COOKIE["__RequestVerificationToken"];
    }

    function teacherpersonalinfo($__RequestVerificationToken){
        $query =  "select * from teacher inner join users on teacher.userid = users.uname where users.id = $__RequestVerificationToken";
        $data = get($query);
        if(count($data) > 0){
            $_SESSION["teachername"] = $data[0]["name"];
            return $data[0];
        }
        else{
            return false;
        }
    }

    //.........................................................Courses & Results..............................................................

    $runningsemester = "";

    function semesteryear($__RequestVerificationToken){
        global $runningsemester;
        $query = "select distinct year_semester,semester_status from teacher inner join users on teacher.userid = users.uname inner join course_semester on teacher.userid = course_semester.teacherid inner join semester on course_semester.semester = semester.year_semester where users.id = $__RequestVerificationToken order by semester_id desc";
        $data = get($query);
        if(count($data) > 0){
            $s = $data;
            $sy = array();
            foreach ($s as $n => $n_value) {
                $sy[] = $n_value["year_semester"];
                if($n_value["semester_status"] == "Running"){
                    $runningsemester = $n_value["year_semester"];
                }
            }
            return $sy;
        }
        else{
            return false;
        }
    }
    
    if(isset($_POST["forcourseandresultslist"])){
        if(!empty($_POST["semester"])){
            $_SESSION["semesterforcoursesandresults"] = $_POST["semester"];
            header("Location: courses_and_results1.php");
        }
    }
    $forcourseandresultslist3 ="";
    if(isset($_SESSION["semesterforcoursesandresults"])){
        $forcourseandresultslist3 = $_SESSION["semesterforcoursesandresults"];
    }
     


    function teacherclassschedule1($__RequestVerificationToken){
        global $forcourseandresultslist3;
        $query =  "select section,schedule,coursename,cs_id,semester from course_semester inner join users on course_semester.teacherid = users.uname inner join course on course_semester.courseid = course.courseid inner join semester on course_semester.semester = semester.year_semester where users.id = '$__RequestVerificationToken' and course_semester.semester = '$forcourseandresultslist3'";
        $data = get($query);
        if(count($data) > 0){
            return $data;
        }
        else{
            return $data;
        }
    }

    if(isset($_GET["cs_id"])){
        $forcourseandresultslist1 = $_GET["cs_id"];
    }

    if(isset($_GET["semester"])){
        $forcourseandresultslist = $_GET["semester"];
    }
    

    function teacherclassschedule2($__RequestVerificationToken){
        global $forcourseandresultslist;
        global $forcourseandresultslist1;
        $query =  "select * from course_semester inner join users on course_semester.teacherid = users.uname inner join course on course_semester.courseid = course.courseid inner join semester on course_semester.semester = semester.year_semester where users.id = '$__RequestVerificationToken' and course_semester.semester = '$forcourseandresultslist' and course_semester.cs_id = '$forcourseandresultslist1'";
        $data = get($query);
        if(count($data) > 0){
            return $data[0];
        }
        else{
            return $data;
        }
    }

    function allstudentinthecourse($forcourseandresultslist1){
        $query = "select studentid,result,name,email from course_semester inner join studentenrollment on course_semester.cs_id = studentenrollment.course_semester_id inner join student on studentenrollment.studentid = student.userid where cs_id = $forcourseandresultslist1";
        $data = get($query);
        return $data;
    }

    function studentidforcompletedcourse($studentidforcompletedcourse){
        $query = "select cs_id from course_semester inner join studentenrollment on course_semester.cs_id = studentenrollment.course_semester_id where studentenrollment.studentid = '$studentidforcompletedcourse' and course_semester.course_status = 'Completed'";
        $data = get($query);
        return count($data);
    }


    //...................................................................Result.....................................................................


    function studentidforcompletedcourse1($studentidforcompletedcourse1){
        $query = "select result from studentenrollment inner join course_semester on studentenrollment.course_semester_id = course_semester.cs_id where studentenrollment.studentid = '$studentidforcompletedcourse1' and course_semester.course_status = 'Completed'";
        $data = get($query);
        $s = $data;
        $sy = 0;
        foreach ($s as $n => $n_value) {
            $sy += $n_value["result"];
        }
        return $sy;
    }

    $studentidforresultupload = "";
    $half_year_exam_result = "";
    $final_exam_result = "";

    function getstudentresult($n){
        global $forcourseandresultslist1;
        global $half_year_exam_result;
        global $final_exam_result;
        $query = "select half_year_exam_result,final_exam_result from studentenrollment where course_semester_id = '$forcourseandresultslist1' and studentid = '$n'";
        $data = get($query);
        return $data;
        if(count($data) > 0){
            $s = $data;
            $sy = array();
            foreach ($s as $n => $n_value) {
                $sy[] = $n_value["year_semester"];
            }
            return $sy;
        }
    }

    if(isset($_POST["resultupload"])){
        $studentidforresultupload = $_POST["resultupload"];
        if(!empty($_POST["half_year_exam_result"]) && $_POST["half_year_exam_result"] <= 4 && is_numeric($_POST["half_year_exam_result"])){
            $half_year_exam_result = $_POST["half_year_exam_result"];
            $query = "update studentenrollment set half_year_exam_result = '$half_year_exam_result' where studentid = '$studentidforresultupload' and course_semester_id = '$forcourseandresultslist1'";
            execute($query);
        }
        if(!empty($_POST["final_exam_result"]) && $_POST["final_exam_result"] <= 4 && is_numeric($_POST["final_exam_result"])){
            $final_exam_result = $_POST["final_exam_result"];
            $query = "update studentenrollment set final_exam_result = '$final_exam_result' where studentid = '$studentidforresultupload' and course_semester_id = '$forcourseandresultslist1'";
            execute($query);
        }
        $query = "update studentenrollment set result = (half_year_exam_result + final_exam_result)/2 where studentid = '$studentidforresultupload' and course_semester_id = '$forcourseandresultslist1'";
        execute($query);
    }

    function coursetotalresult($coursetotalresult){
        global $forcourseandresultslist1;
        $query = "select result from studentenrollment where course_semester_id = '$forcourseandresultslist1' and studentid = '$coursetotalresult'";
        $data = get($query);
        return $data;
    }

 
    //...................................................................Notice.....................................................................


    if(isset($_POST["fornoticeupload"])){
        if(!empty($_POST["noticetitle"]) && !empty($_POST["notice"])){
            $noticetitle = $_POST["noticetitle"];
            $notice = $_POST["notice"];
            $noticetime = date("Y-m-d h:i:sa",strtotime("+4 hours"));
            $query = "insert into notice values('Null','$forcourseandresultslist1','$noticetitle','$notice','$noticetime')";
            execute($query);
        }
    }

    function allnotice($forcourseandresultslist1){
        $query = "Select * from notice where cs_noticeid = $forcourseandresultslist1";
        $data = get($query);
        return $data;
    }

    if(isset($_POST["noticedelete"])){
        $noticeidfornoticedelete = $_POST["noticedelete"];
        $query = "delete from notice where noticeid = '$noticeidfornoticedelete'";
        execute($query);
    }


    //...................................................................Note.....................................................................


    if(isset($_POST["fornoteupload"])){
        if(isset($_FILES['notefile'])){
            $filename = $_FILES['notefile']['name'];
            $filetmp =$_FILES['notefile']['tmp_name'];
            if (!file_exists("note/".$forcourseandresultslist1)) {
                mkdir("note/".$forcourseandresultslist1, 0777, true);
            }
            move_uploaded_file($filetmp,"note/".$forcourseandresultslist1."/".$filename);
        }
    }

    function allnote(){
        global $forcourseandresultslist1;
        if(count(glob("note/".$forcourseandresultslist1)) != 0){
            $files = scandir("note/".$forcourseandresultslist1);
            return $files;
        }
        else{
            return $files = array();
        }
    }

    if(isset($_POST["notedelete"])){
        $noteidfornoticedelete = $_POST["notedelete"];
        unlink("note/".$forcourseandresultslist1."/".$noteidfornoticedelete);
    }


    //...................................................................Assignment.....................................................................


    if(isset($_POST["forassignmentupload"])){
        if(isset($_FILES['assignmentfile'])){
            $filename = $_FILES['assignmentfile']['name'];
            $filetmp =$_FILES['assignmentfile']['tmp_name'];
            if (!file_exists("assignment/".$forcourseandresultslist1)) {
                mkdir("assignment/".$forcourseandresultslist1, 0777, true);
            }
            if (!file_exists("assignment/".$forcourseandresultslist1."/".$filename)) {
                move_uploaded_file($filetmp,"assignment/".$forcourseandresultslist1."/".$filename);
                $query = "insert into assignment values('Null','$forcourseandresultslist1','$filename','','')";
                execute($query);
            }
        }
    }

    function allassignment(){
        global $forcourseandresultslist1;
        if(count(glob("assignment/".$forcourseandresultslist1)) != 0){
            $files = scandir("assignment/".$forcourseandresultslist1);
            return $files;
        }
        else{
            return $files = array();
        }
    }

    if(isset($_POST["assignmentdelete"])){
        $noteidfornoticedelete = $_POST["assignmentdelete"];
        unlink("assignment/".$forcourseandresultslist1."/".$noteidfornoticedelete);
        $query = "delete from assignment where cs_id = '$forcourseandresultslist1' and assignment = '$noteidfornoticedelete'";
        execute($query);
    }

    if(isset($_POST["assignmenttimebutton"])){
        $assignmenttime = $_POST["assignmenttime"];
        $filename = $_POST["assignmenttimebutton"];
        $d1 = (strtotime("now") + $assignmenttime*60);
        $d2 = date("d-m-Y h:i:sa",$d1);
        if($assignmenttime == 0){
            $query = "update assignment set time = '', starttime = '' where cs_id = '$forcourseandresultslist1' and assignment = '$filename'";
            execute($query);
        }
        else{
            $query = "update assignment set time = '$assignmenttime', starttime = '$d2' where cs_id = '$forcourseandresultslist1' and assignment = '$filename'";
            execute($query);
        }
    }

    function getassignmenttime($getassignment){
        global $forcourseandresultslist1;
        $query = "select time from assignment where cs_id = '$forcourseandresultslist1' and assignment = '$getassignment'";
        $data = get($query);
        return $data[0];
    }

    if(isset($_POST["assignementview"])){
        $assignmentname = $_POST["assignementview"];
        $_SESSION["assignementnameforview"] = $assignmentname;
        $assignementnameforview = $_SESSION["assignementnameforview"];
    }

    function allassignmentview(){
        global $forcourseandresultslist1;
        global $assignementnameforview;
        if(count(glob("assignmentview/".$forcourseandresultslist1)) != 0){
            $files = scandir("assignmentview/".$forcourseandresultslist1);
            return $files;
        }
        else{
            return $files = array();
        }
    }



    //....................................................Back Button of courses and results...........................................................

    if(isset($_POST["Backforcoursesandresults"])){
        header("Location: courses_and_results2.php?cs_id=".$forcourseandresultslist1."&semester=".$forcourseandresultslist);
    }

    //................................................................................................................................................


    $error_massage1 = "";
    $error_massage2 = "";

    //..................................................................Class_Schedule.........................................................
    

    function teacherclassschedule($__RequestVerificationToken){
        $query =  "select section,schedule,coursename,cs_id,semester,teacherid from course_semester inner join users on course_semester.teacherid = users.uname inner join course on course_semester.courseid = course.courseid inner join semester on course_semester.semester = semester.year_semester where users.id = $__RequestVerificationToken and course_semester.course_status = 'Ongoing' and semester.semester_status = 'Running'";
        $data = get($query);
        if(count($data) > 0){
            return $data;
        }
        else{
            return $data;
        }
    }

    
    //..................................................................Log_Out.........................................................


    if(isset($_POST["logout"])){
        setcookie("__RequestVerificationToken","",time()-1,"/");
        session_unset();
        session_destroy();
        header("Location: ../portal.php");
    }


    //...........................................................18-37646-1(teacher_controller).........................................................................


    include '18-37646-1_teacher_controller.php';


    //..
?>