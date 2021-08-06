<?php 
	include '../controller/php_controller/admin_controller.php';
	$userid = $_GET["userid"];
	$userids = admin_search($userid);
	
	if(count($userids)> 0){
		foreach($userids as $u){
            echo "<a href='admin_info_update_form.php?adminidforupdate=".$u["userid"]."'><button id='button20'>".$u["userid"]."</button></a>";
		}
	}
?>

