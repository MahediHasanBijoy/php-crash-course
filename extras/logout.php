<?php 

session_start();

// Destroy a session
session_destroy();

// Redirecting to homepage
header('Location: /php-crash-course/13_sessions.php');

 ?>