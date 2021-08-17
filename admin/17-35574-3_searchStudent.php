<?php


	include '../Controller/php_controller/17-35574-3_adminController.php';
	$key = $_GET["key"];
	$student = studentSearch($key);
	
	if(count($student)> 0){
		foreach($student as $p){
			echo "<a href='studentUpdate.php?id=".$p["id"]."'>".$p["name"]."</a><br>";
		
		}
	}

?>