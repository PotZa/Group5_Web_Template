<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=Content-Type
 			content="text/html";
 			charset="tis-620">
	</head>
	<body>
<?php
	$host = "localhost";
	$user = "root";
	$pass = "root";
	mysql_connect($host,$user,$pass) or die("not connect");

	mysql_select_db("db_wine") or die(mysql_error());
	mysql_query("SET NAMES TIS620");
?>
<a href="insert.php"></a>
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
	$sql = "SELECT id,name,sname,email,phone,uname,pass";
	$sql.= " FROM member";

	$count=0;

 	$result = mysql_query($sql);
	while($row = mysql_fetch_array ($result) )
	{
		$count++;
?>
		<tr>
			<td><?=$count?></td>
			<td><?=$row['id']?></td>
			<td><?=$row['name']?></td>
			<td><?=$row['sname']?></td>
			<td><?=$row['email']?></td>
			<td><?=$row['phone']?></td>
			<td><?=$row['uname']?></td>
			<td><?=$row['pass']?></td>
			<td><a href="update.php?PY_ID=<?=$row['id']?>">update</a></td>
		</tr>
<?php
	}
?>
	</table>
	</body>
</html>
