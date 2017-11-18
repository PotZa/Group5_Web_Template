<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','root');
	define('DB','db_wine');

	$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
	?>
