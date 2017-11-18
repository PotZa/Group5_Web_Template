<?php

		$name = $_GET['fname'];
		$surname = $_GET['sname'];
		$email = $_GET['email'];
		$phone = $_GET['phone'];
		$username = $_GET['uname1'];
		$password = $_GET['pass1'];


		if($name == '' || $surname == '' || $email == '' || $phone == '' || $username == '' || $password == ''  ){
			echo 'please fill all values';
		}else{
			require_once('dbConnect.php');
			$sql = "SELECT * FROM member WHERE uname = '$username' OR email='$email'";

			$check = mysqli_fetch_array(mysqli_query($con,$sql));

			if(isset($check)){
				echo 'username or email already exist';
			}else{
				$sql = "INSERT INTO member (id,name,sname,email,phone,uname,pass)
				VALUES('y02','$name','$surname','$email','$phone','$username','$password')";
				if(mysqli_query($con,$sql)){
					echo 'successfully registered';
				}else{
					echo 'oops! Please try again!';
				}
			}
			mysqli_close($con);
		}
?>
