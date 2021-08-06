<?php 
	include '../controller/php_controller/admin_controller.php';
	$userid = $_GET["userid"];
	$userids = admin_search($userid);
	
	if(count($userids)> 0){
		foreach($userids as $u){
            echo "<a href='home_admin_search_personal_info.php?adminidforsearch=".$u["userid"]."'><button id='button20'>".$u["userid"]."</button></a>";
		}
	}
?>

