<?php
	require_once 'connect.php';
// 	require_once 'connectdeploy.php';
	$query = "update project set Status='0' where Status='1'";
	$result = mysql_query($query) or die(header("HTTP/1.1 500 ".mysql_error()));
	
	$successfulreturnheader = "HTTP/1.1 200 Deactivated All Projects";
	echo header($successfulreturnheader); 
		
?>