<?php 
	$db['db_host'] = "localhost";
	$db['db_user'] = "root";
	$db['db_pass'] = "";
	$db['db_name'] = "shopit";
	
	foreach ($db as $key => $value) {//key is liye kion ke is ko upper case kerna hai.
		define(strtoupper($key), $value);
	}
	
	$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
?>