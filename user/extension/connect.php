<?php
    $db_host = "51.79.225.50";
	$db_user = "arifuzza_abolirez_soft";
	$db_pass = "abolirez_soft";
	$db_name = "arifuzza_abolirez_soft";
	
	$con = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
	if(mysqli_connect_error()){

		die('OPS Failed');
		
	}
?>