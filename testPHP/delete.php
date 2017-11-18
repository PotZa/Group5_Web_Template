<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=Content-Type 
 			content="text/html" 
 			charset="tis-620">
	</head>
	<table>
		<tr>
			<th>No.</th>
			<th>PY_ID</th>
			<th>PY_FName</th>
			<th>PY_LName</th>
			<th>TM_Name</th>
			<th>Date_Signed</th>
		</tr>
<?php
	$host = "localhost";
	$user = "watashides";
	$pass = "vu-hdLw59P";	
	mysql_connect($host,$user,$pass) or die("not connect");

	mysql_select_db("watashides_INT302Test")
	or die(mysql_error());
	mysql_query("SET NAMES TIS620");
	
	