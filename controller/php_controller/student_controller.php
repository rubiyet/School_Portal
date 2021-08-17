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

    function studentpersonalinfo($__RequestVerificationToken){
        $query =  "select * from student inner join users on student.userid = users.uname where users.id = $__RequestVerificationToken";
        $data = get($query);
        if(count($data) > 0){
            $_SESSION["studentname"] = $data[0]["name"];
            return $data[0];
        }
        else{
            return false;
        }
    }

        //..................................................................Class_Schedule.........................................................
    

        function studentclassschedule($__RequestVerificationToken){
            $query =  "select section,schedule,coursename,cs_id,semester,studentid from course_semester inner join studentenrollment on course_semester.cs_id = studentenrollment.course_semester_id inner join course on course_semester.courseid = course.courseid inner join semester on course_semester.semester = semester.year_semester inner join users on users.uname = studentenrollment.studentid where users.id = $__RequestVerificationToken and course_semester.course_status = 'Ongoing' and semester.semester_status = 'Running'";
            $data = get($query);
            if(count($data) > 0){
                return $data;
            }
            else{
                return $data;
            }
        }

        //.........................................................Courses & Results..............................................................

    $runningsemester = "";

    function semesteryear($__RequestVerificationToken){
        global $runningsemester;
        $query = "select distinct year_semester,semester_status from student inner join users on student.userid = users.uname inner join studentenrollment on studentenrollment.studentid = student.userid inner join course_semester on studentenrollment.course_semester_id = course_semester.cs_id inner join semester on course_semester.semester = semester.year_semester where users.id = $__RequestVerificationToken order by semester_id desc" ;
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

    function studentclassschedule1($__RequestVerificationToken){
        global $forcourseandresultslist3;
        $query =  "select section,schedule,coursename,cs_id,semester from course_semester inner join studentenrollment on course_semester.cs_id = studentenrollment.course_semester_id inner join users on studentenrollment.studentid = users.uname inner join course on course_semester.courseid = course.courseid inner join semester on course_semester.semester = semester.year_semester where users.id = '$__RequestVerificationToken' and course_semester.semester = '$forcourseandresultslist3'";
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

    function studentclassschedule2($__RequestVerificationToken){
        global $forcourseandresultslist;
        global $forcourseandresultslist1;
        $query =  "select section,schedule,coursename,cs_id,semester,studentid from course_semester inner join studentenrollment on course_semester.cs_id = studentenrollment.course_semester_id inner join users on studentenrollment.studentid = users.uname inner join course on course_semester.courseid = course.courseid inner join semester on course_semester.semester = semester.year_semester where users.id = '$__RequestVerificationToken' and course_semester.semester = '$forcourseandresultslist' and course_semester.cs_id = '$forcourseandresultslist1'";
        $data = get($query);
        if(count($data) > 0){
            return $data[0];
        }
        else{
            return $data;
        }
    }

    function getstudentresult($__RequestVerificationToken){
        global $forcourseandresultslist1;
        $query = "select * from studentenrollment inner join users on studentenrollment.studentid = users.uname where studentenrollment.course_semester_id = '$forcourseandresultslist1' and users.id = '$__RequestVerificationToken'";
        $data = get($query);
        return $data;
    }


    //...................................................................Notice.....................................................................

    function allnotice($forcourseandresultslist1){
        $query = "Select * from notice where cs_noticeid = $forcourseandresultslist1";
        $data = get($query);
        return $data;
    }

    //...................................................................Note.....................................................................

    
    function allnote(){
        global $forcourseandresultslist1;
        if(count(glob("../teacher/note/".$forcourseandresultslist1)) != 0){
            $files = scandir("../teacher/note/".$forcourseandresultslist1);
            return $files;
        }
        else{
            return $files = array();
        }
    }

    //...................................................................Assignment.....................................................................


    function allassignment(){
        global $forcourseandresultslist1;
        if(count(glob("../teacher/assignment/".$forcourseandresultslist1)) != 0){
            $files = scandir("../teacher/assignment/".$forcourseandresultslist1);
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

    //..................................................................Log_Out.........................................................


    if(isset($_POST["logout"])){
        setcookie("__RequestVerificationToken","",time()-1,"/");
        session_unset();
        session_destroy();
        header("Location: ../portal.php");
    }