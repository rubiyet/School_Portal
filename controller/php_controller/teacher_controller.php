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


    function teacherallcourse($__RequestVerificationToken){

    }


    //........................................................................................................................................


    $error_massage1 = "";
    $error_massage2 = "";

    //..................................................................Class_Schedule.........................................................


    function teacherclassschedule($__RequestVerificationToken){
        $query =  "select section,schedule,coursename from course_semester inner join users on course_semester.teacherid = users.uname inner join course on course_semester.courseid = course.courseid where users.id = $__RequestVerificationToken and course_semester.course_status = 'ongoing'";
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