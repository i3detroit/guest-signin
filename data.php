<?php

    require '../password.php';
	$link = mysqli_connect($mysqlHost, $mysqlUser, $mysqlPass, $mysqlDB);
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	echo 'Connected successfully';
	
?>
