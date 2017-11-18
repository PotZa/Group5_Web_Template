<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=Content-Type 
 			content="text/html" 
 			charset="tis-620">
	</head>
<?php
	$PY_ID = $_GET['PY_ID'];
	$PY_FName = $_GET['PY_FName'];
	$PY_LName = $_GET['PY_LName'];
	$TM_ID = $_GET['TM_ID'];
	$PY_Age = $_GET['PY_Age'];
	
	$host = "localhost";
	$user = "watashides";
	$pass = "vu-hdLw59P";	
	mysql_connect($host,$user,$pass) or die("not connect");

	mysql_select_db("watashides_INT302Test")
	or die(mysql_error());
	mysql_query("SET NAMES TIS620");
	
	$sql_update_player =  "UPDATE player SET PY_FName='".$PY_FName."',";
	$sql_update_player .= " PY_LName='".$PY_LName."',";
	$sql_update_player .= " PY_Age='".$PY_Age."',";
	$sql_update_player .= " TM_ID='".$TM_ID."',";
	$sql_update_player .= " WHERE PY_ID='".$PY_ID."';";
	
	echo $sql_update_player;
	$result_insert_player=mysql_query($sql_update_player);
	
?>
<center>
	<h1>บันทึกข้อมูลเรียบร้อย</h1><br>
	<a href="index.php">กลับสู่หน้าหลัก<a/>
</center>
</html>