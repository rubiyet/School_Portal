<?php 
	include '../controller/php_controller/admin_controller.php';
	$userid = $_GET["userid"];
	$userids = teacher_search($userid);
	
	if(count($userids)> 0){
		foreach($userids as $u){
            echo "<a href='18-37646-1_teacher_info_update1.php?id=".$u["id"]."'><button>".$u["userid"]."</button></a><br>";
		}
	}
?>