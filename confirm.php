<?php 
	if(!isset($_GET['email']) || !isset($_GET['token'])){
		header('Location: signup.php');
		exit();
	}else{
		$con = new mysqli("localhost","root","","messenger");
		$email = $con->real_escape_string($_GET['email']);
		$token = $con->real_escape_string($_GET['token']);

		$sql = $con->query("SELECT id FROM users WHERE email='$email' AND token='$token' AND verification=0");

		if ($sql->num_rows > 0) {
			$con->query("UPDATE users SET verification=1, token='' WHERE email='$email'");
			header('Location: login.php');
			
			
		}else{
			header('Location: signup.php');
		}

			
		
	}
	

 ?>		
