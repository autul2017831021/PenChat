<?php include "init.php"; ?>

<?php
	$obj = new base_class;
	if(isset($_POST['login'])){
		$email = $obj->security($_POST['email']);
		$password = $obj->security($_POST['password']);
		$email_status = $password_status = 1;
		if(empty($email)){
			$email_error = "Email is required";
			$email_status = "";
		}
		if(empty($password)){
			$password_error = "Password is required";
			$password_status = "";
		}
		if(!empty($email_status) && !empty($password_status)){
			if($obj->Normal_Query("SELECT * FROM users WHERE email = ?",[$email])){
				if($obj->Count_Rows()==0){
					$email_error = "Please enter correct email";
				} else{
					$row = $obj->Single_Result();
					$db_email = $row->email;
					$db_password = $row->password;
					$user_id = $row->id;
					$user_name = $row->name;
					$user_image = $row->image;
					$clean_status = $row->clean_status;
					$verify = $row->verification;

					if(password_verify($password, $db_password)){
							$status = 1;
							$obj->Normal_Query("UPDATE users SET status = ? WHERE id = ?",[$status,$user_id]);
							if($verify == 1){

									if($clean_status == 0){
								if($obj->Normal_Query("SELECT msg_id FROM messages ORDER BY msg_id DESC LIMIT 1")){
									$last_row = $obj->Single_Result();
									$last_msg_id = $last_row->msg_id + 1;
									if($obj->Normal_Query("INSERT INTO clean (clean_message_id,clean_user_id) VALUES (?,?)",[$last_msg_id,$user_id])){
										$update_clean_status = 1;
										$obj->Normal_Query("UPDATE users SET clean_status = ? WHERE id = ?",[$update_clean_status,$user_id]);
										$login_time = time();
										if($obj->Normal_Query("SELECT * FROM users_activities WHERE user_id = ?",[$user_id])){
											$activity_row = $obj->Single_Result();
											if($activity_row == 0){
												$obj->Normal_Query("INSERT INTO users_activities (user_id,login_time) VALUES (?,?)",[$user_id,$login_time]);
												$obj->Create_Session("user_name",$user_name);
												$obj->Create_Session("user_id",$user_id);
												$obj->Create_Session("user_image",$user_image);
												$obj->Create_Session("loader","1");
												header("location:index.php");
											}else{
												$obj->Normal_Query("UPDATE users_activities SET login_time = ? WHERE user_id = ?",[$login_time,$user_id]);
												$obj->Create_Session("user_name",$user_name);
												$obj->Create_Session("user_id",$user_id);
												$obj->Create_Session("user_image",$user_image);
												$obj->Create_Session("loader","1");
												header("location:index.php");
											}
										}
										
									}
								}
							}else{
								$login_time = time();
										if($obj->Normal_Query("SELECT * FROM users_activities WHERE user_id = ?",[$user_id])){
											$activity_row = $obj->Single_Result();
											if($activity_row == 0){
												$obj->Normal_Query("INSERT INTO users_activities (user_id,login_time) VALUES (?,?)",[$user_id,$login_time]);
												$obj->Create_Session("user_name",$user_name);
												$obj->Create_Session("user_id",$user_id);
												$obj->Create_Session("user_image",$user_image);
												$obj->Create_Session("loader","1");
												header("location:index.php");
											}else{
												$obj->Normal_Query("UPDATE users_activities SET login_time = ? WHERE user_id = ?",[$login_time,$user_id]);
												$obj->Create_Session("user_name",$user_name);
												$obj->Create_Session("user_id",$user_id);
												$obj->Create_Session("user_image",$user_image);
												$obj->Create_Session("loader","1");
												header("location:index.php");
											}
										}
							}
							

							}else{
								$password_error = "Email is not verified!";
							}
							
					} else{
						$password_error = "Please enter correct password!";
					}
				}
			}
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,intial-scale=1,shrink-to-fit=no">
	<title>Create New Account</title>
	<?php include 'components/css.php'; ?>
</head>
<body>
	<?php if(isset($_SESSION['security'])): ?>
		<div class="flash error-flash">
		<span class="remove">&times;</span>
		<div class="flash-heading">
			<h3><span class="cross">&#x2715;</span>Error: you have error!</h3>
		</div>
		<div class="flash-body">
			<p><?php echo $_SESSION['security']; ?><p>
		</div>
		</div>
	<?php endif; ?>
	<?php unset($_SESSION['security']); ?>
	<div class="signup-container">
		<div class="account-left">
			<div class="account-text">
				<h1>Lets Chat</h1>
				<p>Pen-chat is an up-and-coming chat app for groups. You can create all the groups you want to and invite all the people you want to them. The developers recommend this app to people on sports teams, school groups, gaming clans, work groups, and anything like that. Everybody joins in, chats it up, and has a good time</p>
			</div>
		</div>
		<div class="account-right">
			<?php include 'components/login_form.php'; ?>
		</div>
	</div>
	<?php include 'components/js.php' ?>
	<!-- <script type="text/javascript" src="assets/js/file_label.js"> </script> -->
</body>
</html>