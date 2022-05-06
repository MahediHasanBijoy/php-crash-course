<?php 

	// default user -> root and default pass -> ''
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'php_crash_course');


	// Create connection
	$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check connection
	if($conn->connect_error){
		die('Connection Failed'. $conn->connect_error);
	}
 ?>