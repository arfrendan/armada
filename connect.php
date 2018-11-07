<?php
	$server="localhost";
	$db_username="root";
	$db_password="";
	
	$con = mysqli_connect($server,$db_username,$db_password,'armada');
	if(!$con){
		die("error".mysqli_error());
	}
	
?>