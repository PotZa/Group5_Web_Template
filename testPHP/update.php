<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=Content-Type 
 			content="text/html" 
 			charset="tis-620">
	</head>
	<body>
<?php

	$host = "localhost";
	$user = "watashides"; //ชื่อเข้าใช้ฐานข้อมูล
	$pass = "vu-hdLw59P";	//รหัสผู้เข้าใช้ฐานข้อมูล
	mysql_connect($host,$user,$pass) or die("not connect");

	mysql_select_db("watashides_INT302Test") //ชื่อฐานข้อมูล
	or die(mysql_error());
	mysql_query("SET NAMES TIS620");
	
	$player = $_GET['PY_ID'];
	
	$sql = "SELECT * FROM player WHERE PY_ID = '".$player."';";
	
	$result = mysql_query($sql);
	while($row = mysql_fetch_array($result))
	{
?>	
		<form action="update_data.php" method="get">
		  PY_ID: <input type="text" name="PY_ID" value="<?=$player?>"><br>
		  First name: <input type="text" name="PY_FName" value="<?=$row['PY_FName']?>"><br>
		  Last name: <input type="text" name="PY_LName" value="<?=$row['PY_LName']?>"><br>
		  Team ID: <input type="text" name="TM_ID" value="<?=$row['TM_ID']?>"><br>
		  Age: <input type="text" name="PY_Age" value="<?=$row['PY_Age']?>"><br>
		  <input type="submit" value="Submit">
		</form>
<?php
	}
?>
	</body>
</html>