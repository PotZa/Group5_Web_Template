<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv=Content-Type 
 			content="text/html" 
 			charset="tis-620">
	</head>
<?php
	$PY_FName = $_GET['PY_FName'];$_POST['th_name'];
	$PY_LName = $_GET['PY_LName'];
	$TM_ID = $_GET['TM_ID'];
	$PY_Age = $_GET['PY_Age'];
	$PY_Phone = $_GET['PY_Phone'];
	$PR_FName = $_GET['PR_FName'];
	$PR_LName = $_GET['PR_LName'];
	$PR_Street = $_GET['PR_Street'];
	$PR_City = $_GET['PR_City'];
	$PR_State = $_GET['PR_State'];
	$PR_Zip = $_GET['PR_Zip'];
	$PR_Phone = $_GET['PR_Phone'];
	
	/*echo $PY_FName."<br>";
	echo $PY_LName."<br>";
	echo $TM_ID."<br>";
	echo $PY_Age."<br>";
	echo $PY_Phone."<br>";
	echo $PR_FName."<br>";
	echo $PR_LName."<br>";
	echo $PR_Street."<br>";
	echo $PR_City."<br>";
	echo $PR_State."<br>";
	echo $PR_Zip."<br>";
	echo $PR_Phone."<br>";*/
	
	$host = "localhost";
	$user = "watashides"; 
	$pass = "vu-hdLw59P";	
	mysql_connect($host,$user,$pass) or die("not connect");

	mysql_select_db("watashides_INT302Test") 
	or die(mysql_error());
	mysql_query("SET NAMES TIS620");
	
	$sql="select * from player";
	$result=mysql_query($sql);
	$PY_Num=mysql_num_rows($result);
	$PY_Num = $PY_Num+1;

	$sql_insert_player = "INSERT INTO player VALUE ('PY0".$PY_Num."','".$PY_FName."','".$PY_LName."',".$PY_Age.",'".$TM_ID."');";
	//echo "Insert Player <br>";
	//echo $sql_insert_player."<br><br>";
	$result_insert_player=mysql_query($sql_insert_player);
	
	$PR_sql = "SELECT * FROM parent";
	$PR_result=mysql_query($PR_sql);
	$PR_Num=mysql_num_rows($PR_result);
	$PR_Num = $PR_Num+1;

    $sql_insert_parent = "INSERT INTO parent VALUE ('PR0".$PR_Num."','".$PR_FName."','".$PR_LName."','".$PR_Phone."','".$PR_Street."','".$PR_City."','".$PR_State."','".$PR_Zip."');";
    //echo "Insert Parent <br>";
	//echo $sql_insert_parent."<br><br>";
	$result_insert_parent=mysql_query($sql_insert_parent);
	
	$sql_insert_register = "INSERT INTO register VALUE ('PY0".$PY_Num."','PR0".$PR_Num."','".date("Y-m-d")."');";
    //echo "Insert Register <br>";
	//echo $sql_insert_register."<br><br>";
	$result_insert_register=mysql_query($sql_insert_register);
	
?>
<center>
	<h1>บันทึกข้อมูลเรียบร้อย</h1><br>
	<a href="index.php">กลับสู่หน้าหลัก<a/>
</center>
</html>